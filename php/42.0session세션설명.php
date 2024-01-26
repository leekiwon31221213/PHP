<?php 

echo "<h2 style='font-size:50px;'>session 세션</h2>";
echo "<p style='font-size:30px;'>세션이란? <br>
1. 세션은 여러 페이지에서 사용할 정보(변수)를 저장하는 방법 <br>
2. 쿠키와 달리 정보는 사용자 컴퓨터에 저장되지 않음 <br>
</p>";


echo "<p style='font-size:30px;'>session_start();</p>";
echo "<p style='font-size:30px;'>세션을 생성,확인,삭제 session_start(); 코드 작성을 해야함</p>";

echo "<br>";
echo "<hr>";

echo "<h2 style='font-size:50px;'>세션 전체삭제</h2>";
echo "<p style='font-size:30px;'>
session_start(); <br>
session_unset(); <br>
session_destroy();
</p>";



echo "<br>";
echo "<hr>";

echo "<h2 style='font-size:50px;'>세션 부분삭제</h2>";
echo "<p style='font-size:30px;'>
session_start(); <br>
unset(&#36;_SESSION['ss_age']);

</p>";


echo "<br>";
echo "<hr>";

echo "<h2 style='font-size:50px;'>4번 파일 참고 php.ini파일 내용을 확인 할때</h2>";
echo "<p style='font-size:30px;'>
phpinfo() 함수 사용; <br>
session.gc_maxlifetime	Local Value 1440  Master Value1440 기본값 <br>
php.ini를 수정해야함 > 1440 >2000 변경함 -> 무조건 재가동 해야 수정된게 변경됨

</p>";

echo $_COOKIE['PHPSESSID'];
?>