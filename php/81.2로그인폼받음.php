<?php
include "81.3db.php";

$user_id = $_POST['id'];
$user_pw = $_POST['pw'];


//인젝션 공격을 당한 문법
// $sql = "SELECT * FROM study WHERE user_id='{$user_id}' and user_pw = '{$user_pw}'";

//인젝션 공격을 방어하는 문법을 사용후 바인드를 걸어줘야함
$sql = "SELECT * FROM study WHERE user_id=:user_id and user_pw =:user_pw";

//폼입력하고 쿼리문이 실행 됬는지 확인이 필요함
// echo $sql;

$stmt = $conn->prepare($sql);
//바인드를 걸어줘야함
$stmt->bindParam(':user_id', $user_id);
$stmt->bindParam(':user_pw', $user_pw);

$stmt->execute();
$row = $stmt->fetch();


/*  
if($row){
    session_start();
    $_SESSION['id'] = $user_id;
    echo "<script>self.location.href='/member.php';</script>"
}else{
    exit;
}*/
// var_dump($row);




?>