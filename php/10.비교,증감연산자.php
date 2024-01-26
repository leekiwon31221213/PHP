<?php
echo "<h2>비교 연산자</h2>";

$a = 10;
$b = 11;

// = 대입용도 == 느슨비교연산자 === 꼼꼼비교연산자
if($a == $b){
    echo "a와 b는 같다";
}else{
    echo "a와 b는 다르다 ";
}

var_dump($a == $b);
echo "<br>";

$c = 20;
$d = 21;

if($c < $d){
    echo "c는 d보다 크다";
}else{
    echo "c는 d보다 작다 ";
}

//>= 크거나 같다 <= 작거나 같다
var_dump($c < $d);

echo "<br>";
echo "<hr>";

echo "<h2>증감 연산자</h2>";

$e = 10;
// $e++;
// $e--;
echo $e;

echo "<br>";
$f = $e++;
echo "e = $e, f=$f";

?>