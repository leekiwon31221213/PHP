<?php 
$servername = "localhost";
$username = "root";
$password = "";



try{
$conn = new PDO("mysql:host=$servername", $username, $password);
$conn ->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION); //에러가 발생했을때 어떻게 처리할 것인지에 대한 처리방식

echo "<p>DataBase에 연결했습니다.</p>";
} catch(PDOException $e){
    echo $e->getMessage();
    exit;
}

//DB 생성 SQL 구문
try{
$sql = "CREATE DATABASE firstdb1"; // 데이터 베이스 생성
// $sql = "DROP DATABASE firstdb1"; 데이터 베이스 삭제
$conn->exec($sql);
echo "<p>firstdb 가 생성되었습니다.</p>";

}catch(PDOException $e){
    echo $e ->getMessage();
}

//DB연결 사용을 다했으면 반납
$conn =null;
?>


<br>
<hr>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MySQL PDO, DB생성,삭제</title>
</head>

<body>
    <h2>
        DB 생성
        <ul>
            <li>sql 구문</li>
            <li> $sql = "CREATE DATABASE firstdb";
                <br>CREATE DATABASE 데이터베이스 이름
            </li>

            <li>$conn->exec($sql); <br>
                exec 메소드를 사용해 수행 -> 수행이 안될때는 try/catch 문 사용
            </li>

            <li>쿼리문은 $sql 또는 $query 이름을 지정함</li>
        </ul>

        DB 삭제
        <ul>
            <li>$sql = "DROP DATABASE firstdb1";</li>
        </ul>

        DB연결 사용을 다했으면 반납
        $conn =null;
    </h2>

</body>

</html>