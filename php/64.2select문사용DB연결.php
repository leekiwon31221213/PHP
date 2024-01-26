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