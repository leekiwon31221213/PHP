<?php 

//세션생성
session_start();

$_SESSION['ss_name'] = '홍길동';
$_SESSION['ss_age'] = '27세';

?>

세션이 생성되었습니다. <br>
<a href="42.2세션확인.php">세션확인</a>