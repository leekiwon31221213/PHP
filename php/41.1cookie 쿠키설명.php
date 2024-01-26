<?php 

echo "<h2 style='font-size:50px;'>Cookie 쿠키</h2>";
echo "<p style='font-size:30px;'>쿠키란? <br>
1. 사용자를 식별하는데 사용 <br>
2. 쿠키는 서버가 이용자의 컴퓨터에 저장하는 작은 파일  <br>
3. 같은 컴퓨터가 브라우저로 페이지를 요청할 때마다 쿠키도 함께 보냄  <br>
4. PHP를 사용하면 쿠키 값을 만들고 검색할 수 있음  <br>
</p>";

echo "<br>";
echo "<hr>";

echo "<h2 style='font-size:50px;'>쿠키 만들기 setcookie()</h2>";
echo "<p style='font-size:30px;'>setcookie('ck_name', '홍길동', time() + 240, '/')</p>";
echo "<p style='font-size:30px;'>'쿠키 변수이름', '들어갈 내용', '유효기간 설정', '어디 경로에서 사용할지'</p>";


echo "<br>";
echo "<hr>";

echo "<h2 style='font-size:50px;'>쿠키 확인</h2>";
echo "<p style='font-size:30px;'>echo '이름은 :' .&#36;_COOKIE['ck_name'] . '입니다';</p>";

echo "<br>";
echo "<hr>";


echo "<h2 style='font-size:50px;'>쿠키 삭제 </h2>";
echo "<p style='font-size:30px;'>setcookie('ck_name', '', time() - 240, '/')</p>";
echo "<p style='font-size:30px;'>'쿠키 변수이름', ' ', ' - ', '어디 경로에서 사용할지'</p>";


echo "<hr>";
echo "<p style='font-size:30px;'>쿠키를 만들때는 41.2쿠키만들기.php <br>
쿠키를 확인할때는 41.3쿠키확인.php <br>
41.4쿠키삭제.php</p>";

echo "<p style='font-size:30px;'>isset() 셋팅이 되어있는지 참 거짓으로 구분하는 함수</p>";




?>