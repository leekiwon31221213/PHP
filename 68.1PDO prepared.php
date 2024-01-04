<?php
$severname ="localhost";
$username = 'root';
$password = '';
$dbname = '67excel';

try{
$conn = new PDO("mysql:host=$severname; dbname=$dbname", $username, $password);
$conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
echo "<p>DB 연결에 성공했습니다.</p>";

}catch(PDOException $e){
    echo $e->getMessage();
}
try{
$stmt = $conn -> prepare("INSERT INTO 68test(firstname,lastname,email)
VALUES(:firstname,:lastname, :email)");

//바인드
$stmt -> bindParam(':firstname', $firstname);
$stmt -> bindParam(':lastname', $lastname);
$stmt -> bindParam(':email', $email);
 
//실행구문 작성
$firstname = "박딩";
$lastname = '웅';
$email = 'uhng@example.com';

//두번째 처리
$firstname = "홀리";
$lastname = '맘';
$email = 'mom222@example.com';
$stmt -> execute();
}
catch(PDOException $e){
    echo $e->getMessage();
}
$conn=null;


?>