<?php 
//세션 전체 삭제
session_start(); 
session_unset(); 
session_destroy()

//세션 부분 삭제
// session_start();
// unset($_SESSION['ss_age']);
?>

<a href="42.2세션확인.php">세션확인</a>