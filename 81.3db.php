<?php 
//db연결
$severname = "localhost";
$username ="root";
$password = '';
$dbname ='81study';

try{
$conn = new PDO("mysql:host=$severname; dbname=$dbname", $username, $password);
$conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
// echo 'DB연결 성공';
}catch(PDOException $e){
    echo $e->getMessage();
    exit;
}

?>