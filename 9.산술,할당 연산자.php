<?php
echo "<h2>산술 연산자</h2>";
# 더하기
$a = 5+7;
echo $a;

echo "<br>";
# 곱하기
$b = 5*7;
echo $b;

echo "<br>";
# 나누기
$c = 5 / 7;
echo $c;

echo "<br>";
# 나머지
$c = 7 % 5;
echo $c;

echo "<br>";
# 제곱 2x2x2
$c = 4 ** 3;
echo $c;

echo "<br>";
echo "<hr>";

echo "<h2>할당 연산자</h2>";

$e = 7; // 7을 변수 e에 할당한다
$f = $e; // 변수 e를 변수f에 할당한다
$e--; //변수e를 -- 뺴준다
echo $e;

echo "<br>";

$g = 10;
$h = 5;
$g **= $h; //$g = $g+ $h;
/*
$g *= $h; $g = $g * $h;
$g /= $h; $g = $g / $h; 
$g %= $h; $g = $g % $h;
$g **= $h; $g = $g ** $h;
*/
echo $g;


?>