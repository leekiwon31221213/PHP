<?php

$filepath = '36.2a.html'; //파일
$filesize = filesize($filepath);  //파일 사이즈 구하기
$filename = '36.2dddda.html'; //파일이름 변경



/* //헤더 설정 
    header("Content-Type: application/octet-stream");
    header("Content-Disposition: attachment; filename=$filename"); //다운로드 되는 파일 이름 지정
    header("Content-Transfer-Encoding: binary");
    header("Content-Length: $filesize"); //파일 사이즈 명시
    
    ob_clean();
    flush(); //버퍼 비우기
    readfile($filepath); //파일 읽어서 출력하기 */
    

// 멤버인 경우에 다운로드
$is_member = true;
if($is_member ===true){
    //헤더 설정 
header("Content-Type: application/octet-stream");
header("Content-Disposition: attachment; filename=$filename"); //다운로드 되는 파일 이름 지정
header("Content-Transfer-Encoding: binary");
header("Content-Length: $filesize"); //파일 사이즈 명시

ob_clean();
flush(); //버퍼 비우기
readfile($filepath); //파일 읽어서 출력하기
    }else{
        echo "회원만 다운로드 가능합니다.";
    }
?>