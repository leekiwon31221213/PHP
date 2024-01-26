<?php 
//쿠키 만들기

setcookie("ck_name", "홍길동", time() + 5, "/");
setcookie("ck_age", "27세", time() + 10, "/");
//$_COOKIE["ck_nmae"]

?>
쿠키가 생성되었습니다. <br>
<a href="41.3쿠키확인.php">쿠키 확인</a>