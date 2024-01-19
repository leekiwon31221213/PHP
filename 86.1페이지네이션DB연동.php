<?php 
include '85.페이지네이션db.php';
include '86.2페이지네이션함수.php'; 


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



echo "<table>";

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




$return_str = pagination($content_total,$limit,$page_limit,$page);

echo $return_str;


/* 만든 함수는 3번 페이지로 이동 */


/* INSERT INTO `83pagination`(SUBJECT,content,author,rdate)
VALUES('오늘 날씨 좋아요','내용1','홍길동',NOW()),
('오늘 날씨 좋아요2','내용2','홍길동',NOW()),
('오늘 날씨 좋아요3','내용3','나미리',NOW()),
('오늘 날씨 좋아요4','내용4','봉미선',NOW()); */