<?php 
session_start();
/* $edit_idx 셋팅이 되어 있는지 체크 */
$edit_idx =(isset($_SESSION['edit_idx']) && $_SESSION['edit_idx'] != '' && is_numeric($_SESSION['edit_idx'])) ? $_SESSION['edit_idx'] : '' ;

include './db.php';


$idx = (isset($_POST['idx']) && $_POST['idx'] != '' && is_numeric($_POST['idx'])) ? $_POST['idx']:'';
$title = (isset($_POST['title']) && $_POST['title'] != '') ? $_POST['title']:'';
$content = (isset($_POST['content']) && $_POST['content'] != '') ? $_POST['content']:'';
$name = (isset($_POST['NAME']) && $_POST['NAME'] != '') ? $_POST['NAME']:'';
$pw = (isset($_POST['pw']) && $_POST['pw'] != '') ? $_POST['pw']:'';

if($idx == ''){
	$arr = ['result' => 'empty_idx'];
	die(json_encode($arr));
}

if($edit_idx != $idx){
	$arr = ['result' => 'denied'];
	die(json_encode($arr));
}

$pwd_hash = '';

if($pw != ''){
	$pwd_hash = password_hash($pw, PASSWORD_BCRYPT);
}

// 정규식을 통해 img 태그 전체 src값을 추출
preg_match_all("/<img[^>]*src=[\"']?([^>\"']+)[\"']?[^>]*>/i", $content, $matches);


$img_arry = [];
foreach($matches[1] AS $key => $row){
	//이미 업로드된 이미지
	if(substr($row, 0, 11) == 'img_upload'){
		continue;
	}
	//외부 링크 이미지 skip
	if(substr($row,0,5) != 'data:'){
		continue;
	}

	// $row = 'data:image/png;base64,dkdkdkdkd';
	list($type, $data) = explode(';',$row);
	// $type : data:image/png
	// $data : base64,dkdkdkdk

	list(,$data) = explode(',',$data);
	// $data :dkdkdk

	$data = base64_decode($data);


	//확장자 만들기
	list(, $data)= explode('/',$type);

	// $ext :png
	$ext = ($ext =='jpeg') ? 'jpg' : $ext;

	//파일명 만들기
	$filename = date('Ymd') .'_'.$key .'.'. $ext; 

	file_put_contents('img_upload/'.$filename,$data);

	$content = str_replace($row, 'img_upload'.$filename, $content);

	$img_arry[] = 'img_upload'. $filename;
}

//implode  a|b|c 배열을 구분자 기준으로 해서 ['a','b','c']문자열로 변경해줌
$imglist = implode('|', $img_arry); //['a','b','c']


/* 비밀번호가 비어 있지 않으면 */
if($pwd_hash != ''){
	$sql = "UPDATE m_board SET NAME=:name, title=:title, content=:content, imgList=:imgList, pw=:pw WHERE idx=:idx";
}else{
	$sql = "UPDATE m_board SET NAME=:name, title=:title, content=:content, imgList=:imgList WHERE idx=:idx";
}

$stmt = $conn->prepare($sql);
$stmt->bindParam(':name',$name);

if($pwd_hash != ''){
	$stmt -> bindParam(':pw',$pwd_hash);
}

$stmt->bindParam(':title',$title);
$stmt->bindParam(':content',$content);
$stmt->bindParam(':imgList',$imglist);
$stmt->bindParam(':idx',$idx);
$stmt->execute();

$arr=['result' => 'success'];
die(json_encode($arr));
?>