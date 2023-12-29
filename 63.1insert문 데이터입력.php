<?php 

$serverName='localhost';
$userName='root';
$passWord= '';
$dbName = 'member';



try{
    $conn = new PDO("mysql:host=$serverName; dbname=$dbName;",$userName,$passWord);
    $conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    echo "<p>DB 연결에 성공했음</p>";
}
catch(PDOException $e){
    echo $e->getMessage();
}

try{
//insert 쿼리구문
$sql = "INSERT INTO myguests(firstname, lastname, email) 
VALUES('세라','박','sera@example.com')";
$conn->exec($sql);
echo "<p>입력에 성공했음</p>";

} catch(PDOException $e){
    echo $e->getMessage();
}
$conn = null;

?>


<br>
<hr>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>insert문으로 데이터 입력하기 </title>
</head>

<body>
    <h2>
        insert문으로 데이터 입력하기

        <ul>
            <li>테이블 조회 SELECT * FROM myguests;</li>
            <li>첫번째 이름 마지막 이름 조회 SELECT firstname,lastname FROM myguests;</li>
        </ul>
    </h2>

</body>

</html>