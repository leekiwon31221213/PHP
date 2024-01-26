<?php 
include "66.1lastInsertId()DB.php";

// 쿼리를 해서 가져와야함
// 해당 게시물을 보여지기위해서는 게시판 번호를 가져와야함

$idx = $_GET["idx"];

// echo $idx; 게시판번호 확인

$sql = "SELECT * FROM board WHERE idx={$idx}";
$stmt = $conn->prepare($sql); //준비과정
$stmt->execute();
$row = $stmt->fetch(PDO::FETCH_ASSOC); //담아짐

//array 확인
// echo "<pre>";
// print_r($row);
// echo "</pre>";

?>

<!DOCTYPE html>
<html lang="ko">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?php echo $row['subject'];?>
    </title>
</head>

<body>
    <p>제목 : <?php echo nl2br($row['subject']);?></p>
    <p><?php echo nl2br($row['content']);?></p>
</body>

</html>