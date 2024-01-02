<?php
//2번 input 폼 내용을 받는 파일
include "66.1lastInsertId()DB.php";

$subject =$_POST['subject'];
$content = $_POST['content'];

try{
    $sql = "INSERT INTO board(subject,content,rdate)
    VALUES('{$subject}','{$content}',NOW())";

    $conn->exec($sql);
    echo "<p>게시물 등록에 성공했습니다.</p>";

    // 해당 게시물로 이동 (해당 게시물로 이동하기 위해서는 key 값이 필요)
    $last_id = $conn->lastInsertId();

    echo "<p>게시물 번호는 {$last_id}입니다.";

    //해당 게시물로 이동 스크립트 처리

    echo "<script>
    self.location.href='66.4lastInsertId()inputView.php?idx=".$last_id."';
    </script>";

}catch(PDOException $e){
    echo $e->getMessage();
}

//DB종료
$conn =null;

?>


<!-- 
66practice DB 에 테이블 생성 

create table board(
    idx integer unsigned not null auto_increment, 
    subject varchar(255) default '' comment '게시물제목',
    content text comment '게시물내용',
    rdate datetime,
    primary key(idx)
)

-->