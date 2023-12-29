<?php 
$servername = "localhost";
$username = "root";
$password = "";

//DB 연결
try{
$conn = new PDO("mysql:host=$servername; dbname=pdo_table_create", $username, $password);
$conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
echo "<p>DB 연결에 성공</p>";

} catch(PDOException $e){
echo $e->getMessage();
exit;
}

/* db 생성
$sql = "CREATE DABASE 생성할 데이터 베이스이름" */

//Table 생성
try{
$table = "CREATE TABLE DB_TABLE(
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    firstname VARCHAR(30) NOT NULL,
    lastname VARCHAR(30) NOT NULL,
    email VARCHAR(50),
    reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
)";

$conn->exec($table);
} catch(PDOException $e){
    echo $e->getMessage();
    echo "<p>테이블이 생성 되었습니다.</p>";
}

$conn =null;
?>


<br>
<hr>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>mysqlPDO Table 생성</title>
</head>

<body>
    <h2>
        데이터 베이스 생성 해놓은 전제로 수업 시작
    </h2>
    <ul>
        <li>특정한 데이터 베이스까지 접근하려면 dbname=데이터베이스 이름</li>
    </ul>
    <br>
    <p>DB연결 과정은 한번 만들어 놓고 include 처리함</p>

    <br>
    <hr>
    <h2>테이블 생성</h2>
    <p>$table = "CREATE TABLE DB_TABLE( <br>
        테이블 구조를 만들어 줘야함<br>

        id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, <br>
        firstname VARCHAR(30) NOT NULL, <br>
        lastname VARCHAR(30) NOT NULL, <br>
        email VARCHAR(50), <br>
        reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP <br>

        )";</p>
</body>

</html>