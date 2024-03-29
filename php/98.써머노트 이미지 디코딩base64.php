<?php 
/* 써머노트로 이미지를 첨부하면 > 코드로 봤을때 base64 문자열로 나오기때문에 이부분을 디코딩 해줘야함 */

//다른 내용도 포함 될 수 있기에 정규식 작성을 통하여 이미지 부분만 추출해내야함

/* 예시 
$content = 'aaaaa<img src="aaa.gif">dddd';
preg_match_all("/<img[^>]*src=[\"']?([^>\"']+)[\"']?[^>]*>/i", $content, $matches);
print_r($matches);
*/


//$content 부분은 본문 변수와 같아야함
preg_match_all("/<img[^>]*src=[\"']?([^>\"']+)[\"']?[^>]*>/i", $content, $matches);

//이미지 목록을 DB에 저장
$img_array=[];

foreach($matches[1] AS $key => $val){
    // echo $val;
    // echo "<br>";
    
    //src 들어온 형태data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAfQAAAH0CAYAAADL1t+
    //중요한부분은 iVBORw0KGgoAAAANSUhEUgAAAfQAAAH0CAYAAADL1t+ 부분을 사용할예정


    /* list()에 담을수 있음 
    $type에 data:image/png이 저장  
    $data에 base64,iVBORw0KGgoAAAANSUhEUgAAAfQAAAH0CAYAAADL1t+저장*/
    list($type,$data) = explode(';', $val);


    /* 이미지 확장자 */
    list(,$ext)= explode('/',$type);

    /* jpeg인 경우 */
    $ext =($ext == 'jpeg')?'jpg':$ext;
    // echo $ext;

    /* 파일명 만들기 */
    /* 이미지가 여러개 들어오면 파일명이 같아 질수 있어 $key값 활용 */
    $filename = date('Ymd') .'_'.$key .'.'. $ext; //20240123_0.png
    // echo $filename; 

    /* $data에 base64,iVBORw0KGgoAAAANSUhEUgAAAfQAAAH0CAYAAADL1t+ 부분에서 
    iVBORw0KGgoAAAANSUhEUgAAAfQAAAH0CAYAAADL1t+이 필요하지 
    base64는 필요 없기 때문에 디코딩 */

    list(,$base64_decode_data) = explode(',',$data);
    // echo $base64_decode_data;

    //$rs_code 이미지 데이터
    $rs_code = base64_decode($base64_decode_data);

    /* 이미지 저장 경로 */   
    //이미지 기록
    //업로드 폴더는 '92.게시판이미지업로드 폴더에 $filename으로 넣고 디코딩되어 있는 데이터를 넣는다
    file_put_contents('92.게시판이미지업로드/'.$filename,$rs_code);
    


    /* 본문에서 여전히 base64로 인코딩 되어있어 디코딩된 파일로 바꿔치기 해줘야함*/

    //이미지를 담기
    $img_array[]= '92.게시판이미지업로드/'.$filename;
    // $content = str_replace(바꿀대상,변경할이름,본문$content);
    $content = str_replace($val,'92.게시판이미지업로드/'.$filename,$content);

    echo $content;
}

    /* 배열로 저장이 불가능하여 문자열로 변경 */
    $imglist = implode('|',$img_array);
    // echo $imglist;

    /* DB에 저장 */

    $sql = "INSERT INTO m_board(code,name,title,pw,content,imglist,ip,rdate) VALUES(:code, :name, :title, :pw, :content, :imgList, :ip ,NOW())";

    /* ip */
    $ip = $_SERVER['REMOTE_ADDR'];

    $stmt = $conn->prepare($sql);
    $stmt -> bindParam(':code',$code);
    $stmt -> bindParam(':name',$name);
    $stmt -> bindParam(':title',$title);
    $stmt -> bindParam(':pw',$pw_hash); //암호화 진행했기에 pw_hash사용
    $stmt -> bindParam(':content',$content);
    $stmt -> bindParam(':imgList',$imglist);
    $stmt -> bindParam(':ip',$ip);
    $stmt->execute();
?>