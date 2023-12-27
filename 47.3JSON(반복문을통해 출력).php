<?php 

$age = [
    'Peter' => 35 , 
    "Ben" => 37, 
    "Joe" => 20
];

$json = '{"Peter":35, "Ben":37, "Joe":20}';
$arr = json_decode($json,true); 
foreach($arr as $key => $value){
    echo $key . "는" .$value. "살 입니다.<br>";
}





?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h2>foreach($arr as $key => $value) <br>
        as: 배열의 각 요소를 변수에 할당하기 위한 키워드입니다.</h2>
</body>

</html>