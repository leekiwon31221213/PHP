<?php 
// phpinfo();
// exit;

echo "<h2>객체지향</h2>";
// MYSQLi OOP 방식 객체지향
$servername ="localhost"; 
$username = "root";
$password = "";

//DB연결 
//인스턴스 생성 mysqli(서버아이디,유저네임,패스워드)
$conn = new mysqli($servername, $username, $password);


// 만약 $conn을 연결을 했는데 에러 값이 존재를 하면 DB연결 실패
if($conn->connect_error){
    echo "DB 연결에 실패했습니다.";
    exit;
}

echo "DB 연결에 성공 했습니다.";



echo "<br>";

//MySQLi 절차지향 방식
echo "<h2>절차지향</h2>";

$servername2 ="localhost"; 
$username2 = "root";
$password2 = "";

$conn2 = mysqli_connect($servername2, $username2, $password2);
if(!$conn2){
    // echo "DB연결에 실패했습니다.";
    // exit;    

    /*  echo "DB연결에 실패했습니다." exit; 안찍고 die()함수를 사용하면 exit까지 같이 가능  */
    die("DB연결에 실패했습니다.");
}
echo "DB 연결에 성공 했습니다.";

echo "<br>";

//PDO 방식
echo "<h2>PDO</h2>";
echo "<h4>에러가 안난다면 db연결에 성공</h4>";

$servername3 ="localhost"; 
$username3 = "root";
$password3 = "";

//PDO 방식은 클래스 방식임 mysqli 대신 PDO사용
$conn3 = new PDO("mysql:host=$servername3",$username3,$password3); 

if(!$conn3){
    die("DB연결에 실패했습니다.");
}
echo "DB 연결에 성공 했습니다.";

echo "<br>";


//에러가 났을 경우 try / catch 문으로 체크
echo "<h2>PDO는 에러가 난다면 try/ catch 문으로 에러 체크를 해줘야함</h2>";


$servername4 ="localhost"; 
$username4 = "root";
$password4 = "";

try{
$conn4 = new PDO("mysql:host=$servername4",$username4,$password4); 
echo "DB 연결 성공";
} catch(PDOException $e){
    echo "DB 연결 실패";
}


?>


<br>
<hr>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MySQL 연동방법</title>
</head>

<body>
    <h2>MySQL 연동방법
        <ul>
            <li>MySQLi(OOP객체지향)</li>
            <li>MySQLi(절차지향)</li>
            <li>PDO</li>
        </ul>
    </h2>
    <p>PDO에서 에러 나서 에러를 확인 하고 싶을때 <br>
        echo $e ->getMessage();</p>

    <br>
    <p>PDO를 사용할려면 PDO가 깔려 있어야 하며 <br>
        phpinfo(); <br>
        exit;
        pdo검색
    </p>


</body>

</html>