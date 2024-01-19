<?php 
include '85.페이지네이션db.php';
include '87.2페이지네이션함수.php'; 


$limit = 10;
$page_limit =5;
$page = isset($_GET['page']) && $_GET['page'] != '' && is_numeric($_GET['page'])? $_GET['page'] : 1 ;

/* 게시물 카운트해서 페이징 하는곳 */
$sql = "SELECT COUNT(*) cnt FROM 83pagination";
$stmt = $conn->prepare($sql);
$stmt->setFetchMode(PDO::FETCH_ASSOC);
$stmt->execute();

/* 값이 하나만 출력 되면 되기에 ALL X */
$row = $stmt->fetch();
$content_total = $row['cnt']; //총 게시물 수 
// print_r($row);
// exit;
/*  */

$start = $limit *($page -1);
//1 ~ 0 , 10
//2 ~ 10 , 10
//3 ~ 20 , 10
/*  0 * 10 -1 */

$sql = "SELECT idx, subject,author,rdate FROM 83pagination LIMIT {$start},{$limit}";
/* $sql = "SELECT idx, subject,author,rdate FROM 83pagination LIMIT 0,10"; 0일때 1페이지 / 10 2페이지 
{$start} 값을 계속 변화 시켜줘야함 
얼마 만큼 변해지면 {$limit} 숫자만큼의 (곱샘)
*/
$stmt = $conn->prepare($sql);
$stmt->setFetchMode(PDO::FETCH_ASSOC);
$stmt->execute();
$rs = $stmt->fetchALL();

?>
<!DOCTYPE html>
<html lang="ko">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>부트스트랩 사용 페이지네이션 스타일 적용</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" />
    <link rel="canonical" href="https://getbootstrap.kr/docs/5.3/examples/sign-in/" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@docsearch/css@3" />
</head>

<body>
    <div class="container">
        <?php

echo "<table class='table table-hover'>
<tr>
<th>번호</th>
<th>제목</th>
<th>작성자</th>
<th>날짜</th>
</tr>

";



    foreach($rs AS $row){
    // print_r($row);
    // exit;

    echo "<tr>
        <td>".$row['idx']."</td>
        <td>".$row['subject']."</td>
        <td>".$row['author']."</td>
        <td>".$row['rdate']."</td>
    </tr>
    ";
    }


    echo "</table>";

/* 85.2페이지네이션DB연동 시작*/
// $content_total=101;





/* 만든 함수는 3번 페이지로 이동 */


/* INSERT INTO `83pagination`(SUBJECT,content,author,rdate)
VALUES('오늘 날씨 좋아요','내용1','홍길동',NOW()),
('오늘 날씨 좋아요2','내용2','홍길동',NOW()),
('오늘 날씨 좋아요3','내용3','나미리',NOW()),
('오늘 날씨 좋아요4','내용4','봉미선',NOW()); */

$rs_str = pagination($content_total,$limit,$page_limit,$page);

echo $rs_str;

?>

    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>