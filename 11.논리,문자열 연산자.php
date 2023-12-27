<?php
echo "<h1>논리 연산자</h1>";
echo "<h2>&& AND 연산자는 bool 값이 둘 중 하나만 true면 값은 false</h2>";
$a = true;
$b = false;

// 논리곱 AND &&
echo "true true = true";
echo "<br>";

echo "true false = false";
echo "<br>";

echo "false true = false";
echo "<br>";

echo"false false = false";
echo "<br>";

var_dump($a && $b);  // 1 * 1 =1

echo "<br>";

echo "<h2>|| OR 연산자는 bool 값이 둘 중 하나만 true면 true</h2>";

$c = true;
$d = false;

// 논리합 OR ||
echo "true true = true";
echo "<br>";

echo "true false = true";
echo "<br>";

echo "false true = true";
echo "<br>";

echo"false false = false";
echo "<br>";

var_dump($c || $d);

echo "<br>";

echo "<h2>! 부정문</h2>";
$e = false;
echo "var_dump(!$e)"; 
echo "<br>";
var_dump(!$e);// 변수e가 !거짓이 아니면 -> 참 

echo "<br>";
echo "<hr>";

echo "<h1>문자열 연산자</h1>";
echo "<h2>.  .</h2>";

$f = "저는";
$g = $f ."화가나요";
echo $g;
?>