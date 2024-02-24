<?php 
/* process.php 부분 */
require './db.php';  //dbconfig.php

$mode =     (isset($_POST['mode'    ]) && $_POST['mode'     ] != '')     ? $_POST['mode'] : '';
$idx =      (isset($_POST['idx'     ]) && $_POST['idx'      ] != '' && is_numeric($_POST['idx'])) ? $_POST['idx'] : '';
$password = (isset($_POST['modal_pw']) && $_POST['modal_pw' ] != '') ? $_POST['modal_pw'] : '';
$code =     (isset($_POST['code'    ]) && $_POST['code'     ] != '')     ? $_POST['code'] : '';


if($mode == ''){
    $arr = ['result' => 'empty_mode'];
    die(json_encode($arr)); //{"result : "empty_mode"}
}

if($idx ==''){
    $arr = ['result' => 'empty_idx'];
    die(json_encode($arr)); //{"result : "empty_idx"}
}

if($password ==''){
    $arr = ['result' => 'empty_password'];
    die(json_encode($arr)); //{"result : "empty_password"}
}

$sql = 'SELECT pw, code FROM m_board WHERE idx=:idx';
$stmt = $conn->prepare($sql);
$stmt->bindParam(':idx', $idx);
$stmt->setFetchMode(PDO::FETCH_ASSOC);
$stmt->execute();
$row = $stmt->fetch();

/* 넘어온 $code 일치하는지*/
if($row['code'] != $code){
    $arr =['result' => 'wrong_code'];
    die(json_encode($arr));
}

if(password_verify($password, $row['pw'])){
    
    //비밀번호가 맞을 경우 두 가지 판단을 해야함 수정에서 넘어왔는지 삭제에서 넘어 왔는지.
    if($mode =='delete'){
        $sql = "DELETE FROM m_board WHERE idx = :idx";
        $stmt = $conn->prepare($sql);
        $stmt->bindParam(':idx',$idx);
        $stmt->execute();
        
        $arr =['result' => 'delete_success'];
        
    }else if($mode == 'edit'){
        session_start();
        $_SESSION['edit_idx'] = $idx; //edit_idx에 idx를 넣어 이 게시글은 수정이 가능하다는걸 세션에 담아 비교 
        $arr =['result' => 'edit_success'];

    }else{
        $arr = ['result'=> 'wrong_mode'];
    
    }
    die(json_encode($arr)); //{"result : "wrong_mode"}
    
}else{
    //비밀번호 오류시
    $arr = ['result'=> 'wrong_password'];
    die(json_encode($arr)); //{"result : "wrong_password"}
}

?>