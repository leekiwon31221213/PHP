<?php

echo "<h2 style='font-size:50px;'>function 함수</h2>";

//내장함수
$money = 3000;
echo number_format($money);

echo "<br>";
echo "<br>";

//사용자 정의함수

function 함수이름(){
echo "구문";
return 3;
}

$a=함수이름();
echo $a;

echo "<br>";
echo "<br>";

function 매개변수($a,$b){
    return $a+$b;
}

echo "<h2>".매개변수(3,5)."</h2>";
echo "<h2>".매개변수(13,5)."</h2>";
echo "<h2>".매개변수(3,55)."</h2>";
echo "<h2>".매개변수(23,5)."</h2>";
echo "<h2>".매개변수(3,15)."</h2>";


echo "<br>";
echo "<hr>";



?>