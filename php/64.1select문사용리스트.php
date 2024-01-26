<?php 

include "64.2select문사용DB연결.php";


$sql = "SELECT * FROM myguests";

$stmt = $conn->prepare($sql);
$stmt->execute(); //쿼리실행
$rs = $stmt->fetchALL(PDO::FETCH_ASSOC);


//PDO::FETCH_BOTH  디폴트
//PDO::FETCH_NUM  번호로 순서대로 가져옴
//PDO::FETCH_ASSOC  필드이름 기준으로 순서를 매겨줌
// var_dump($rs);

echo "<table border='1'>
<tr>
<th>FirstName</th>
<th>LastName</th>
<th>Email</th>
</tr>";


echo "<table border='1'>";
foreach ($rs AS $row){
    echo "<tr>
    <td>".$row['firstname']."</td>
    <td>".$row['lastname']."</td>
    <td>".$row['email']."</td>
    </tr>";
}
echo "</table>";