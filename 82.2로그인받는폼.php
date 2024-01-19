<?php
include '82.0로그인구현db.php';

// print_r($_POST);

$user_id =$_POST['id'];
$user_pw =$_POST['pw'];

$sql = 'SELECT * FROM member WHERE user_id=:user_id and user_pw =:user_pw';

$stmt = $conn->prepare($sql);

$stmt->bindparam(':user_id', $user_id);
$stmt->bindparam(':user_pw', $user_pw);
$stmt->execute();
$row = $stmt->fetch();

if($row){
session_start();
$_SESSION['id'] = $user_id;

$arr=['result'=>'success'];
die(json_encode($arr));

}else{
    $arr=['result'=>'fail'];
    die(json_encode($arr));
}

?>