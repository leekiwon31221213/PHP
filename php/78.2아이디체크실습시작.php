<?php 
//db연결
require_once('78.아이디체크실습DB생성.php');

$user_id = $_GET['id'];

// echo $user_id;

//쿼리문
$sql = "SELECT COUNT(*) cnt FROM member WHERE user_id='".$user_id."'";

//DB생성에서 $conn으로 접근해서 conn사용
$stmt = $conn->prepare($sql);
$stmt->execute();

$result = $stmt->setFetchMode(PDO::FETCH_ASSOC);

//결과값이 담아짐
$row = $stmt->fetch();


// print_r($row);

$arr = ['result'=> $row['cnt']? 'exist': 'not_exist'];

die(json_encode($arr));
?>