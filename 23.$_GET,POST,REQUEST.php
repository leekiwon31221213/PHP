<?php


echo "<h2 style='font-size:50px;'>&#36;_GET['']; 제일 중요</h2>";
echo "<p style='font-size:30px;'>&#36;_GET은 단순 검색용 일때 사용</p>";

print_r($_GET);

echo "<br>";
echo "name : ".$_GET['name'];

echo "<br>";
echo "company : ".$_GET['company'];
// http://localhost/23.$_GET,POST,REQUEST.php?name=giwon&company=google
echo "<br>";
echo "
<hr>";


echo "<h2 style='font-size:50px;'>&#36;_REQUST[''];</h2>";
echo "<p style='font-size:30px;'>&#36;_REQUST는 &#36;_GET, &#36;_POST, &#36;_COOKIE 동시에 사용할 수 있음(공용)</p>";

echo "<br>";
echo "name : ".$_REQUEST['name'];

echo "<br>";
echo "company : ".$_REQUEST['company'];



echo "<br>";
echo "
<hr>";


echo "<h2 style='font-size:50px;'>&#36;_POST['']; 제일 중요</h2>";
echo "<p style='font-size:30px;'>&#36;_POST의 name은 HTML input name에서 가져옴</p>"; 
echo "<p style='font-size:30px;'>&#36;_POST는 중요한 정보를 가져올때 사용</p>"; 

print_r($_POST);

echo "<br>";
echo "name : ".$_POST['name'];
echo "company : ".$_POST['company'];
echo "email : ".$_POST['email'];

echo "<p style='font-size:50px; font-weight:bold;'>DB에 저장 방법 SQL</p>"; 
echo "<p style='font-size:50px; font-weight:bold;'>SQL저장  INSERT INTO 회원가입</p>"; 
echo "<p style='font-size:50px; font-weight:bold;'>SQL수정  UPDATE 정보수정</p>"; 
echo "<p style='font-size:50px; font-weight:bold;'>SQL삭제  DELETE 회원탈퇴</p>"; 

//member이란 테이블 안에 name, company, email
$sql = "INSERT INTO member(name, company, email) values{'{$name}','{$comapany}',{$email})";
mysqli_query($sql);




?>