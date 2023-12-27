<?php
echo "<h2>절대값,루트,반올림,난수 </h2>";
//abs() 절대값
$a = -33;
$b = abs($a);
echo $b;


echo "<br>";
//sqrt() 루트를 구하는 함수
$c = sqrt(4);
echo $c;


echo "<br>";
//sqrt() 반올림 해주는 함수
$d= -3.75;
$d = round($d);
echo $d;

echo "<br>";
//rand() 난수 생성 함수
$e = rand(1, 10); #(범위,범위)
echo $e;

echo "<br>";
echo "<hr>";

echo "<h2>상수 define()</h2>";

/* 상수는 변경할 수 없는 값 */
define("Greeting","안녕하세요");
// Greeting =333; Parse error
// define("Greeting","수고하세요"); Notice
echo Greeting;

?>