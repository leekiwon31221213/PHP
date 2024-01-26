<?php
//어떻게 찍히는지 한번 확인해볼 필요가 있음
// print_r($_POST);

require '83.ToDoListdb.php';

if($_POST['mode']=='input'){
$subject = $_POST['subject'];
$sql = "INSERT INTO todolist (subject) VALUES(:subject)";
$stmt = $conn->prepare($sql);

$stmt->bindparam(":subject", $subject);
$rs = $stmt->execute();

// print_r($rs); 등록이 되었는지 확인 SELECT * FROM todolist;

if($rs){
    echo "
    <script> 
    // alert('정상적으로 등록 되었음')
    self.location.href='./83.1ToDoList.php';
    </script>
    ";
}else{
    echo "
    <script> 
    alert('등록과정에서 오류가 발생)
    history.go(-1);
    </script>
    ";
}

}else if($_POST['mode']== 'done'){
    $idx=$_POST['idx'];
    do_undo($idx,1);
}else if($_POST['mode']== 'undone'){
    $idx=$_POST['idx'];
    do_undo($idx,0);
}
else if($_POST['mode']== 'del'){
    
    $sql = "DELETE FROM `todolist` WHERE `idx` =:idx";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':idx',$_POST['idx']);
    $stmt->execute();
    
    //db에서 status 값이 변경되었으면 프론트쪽을 처리해줘야함
    echo "
    <script> 
    self.location.href='./83.1ToDoList.php';
    </script>
    ";
};

    

/* 구문이 너무 반복되어 status 값을 함수로 빼기 */
function do_undo($idx,$status){
    global $conn;
    $sql = "UPDATE `todolist` SET `status`=:status WHERE `idx` =:idx";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':idx',$idx);
    $stmt->bindparam(':status',$status);
    $stmt->execute();
    
    //db에서 status 값이 변경되었으면 프론트쪽을 처리해줘야함
    echo "
    <script> 
    self.location.href='./83.1ToDoList.php';
    </script>
    ";
    
}
?>