<?php

echo "<h2 style='font-size:50px;'>배열 정렬 내장 함수</h2>";
echo "<p style='font-size:30px;'>sort() - 배열을 오름차순으로 정렬 (가나다 순서)</p>";
echo "<p style='font-size:30px;'>rsort() - 배열을 내림차순으로 정렬 (가나다 역순)</p>";
echo "<p style='font-size:30px;'>asort() - <span style='color:blue; font-weight:bold;'>값에 따라 연관</span> 배열을 오름차순으로 정렬</p>";
echo "<p style='font-size:30px;'>ksort() - <span style='color:blue; font-weight:bold;'>키에 따라 연관</span> 배열을 오름차순으로 정렬</p>";
echo "<p style='font-size:30px;'>arsort() - <span style='color:red; font-weight:bold;'>값에 따라 연관</span> 배열을 내림차순으로 정렬 (가나다 역순)</p>";
echo "<p style='font-size:30px;'>krsort() - <span style='color:red; font-weight:bold;'>키에 따라 연관</span> 배열을 내림차순으로 정렬 (가나다 역순)</p>";


echo "<p style='font-size:30px;'>배열 순서['사과','배','귤','수박','토마토']</p>";

echo "<br>";
echo "<hr>";

echo "<h2 style='font-size:50px;'>배열 정렬 내장 함수</h2>";
echo "<p style='font-size:30px;'>sort() - 배열을 오름차순으로 정렬</p>";

$fruits=["사과","배","귤","수박","토마토"];

sort($fruits);

print_r($fruits);

echo "<br>";
echo "<hr>";

echo "<h2 style='font-size:50px;'>배열 정렬 내장 함수</h2>";
echo "<p style='font-size:30px;'>rsort() - 배열을 내림차순으로 정렬 (가나다 역순)</p>";

$fruits=["사과","배","귤","수박","토마토"];
rsort($fruits);

print_r($fruits);

echo "<br>";
echo "<hr>";

echo "<h2 style='font-size:50px;'>배열 정렬 내장 함수</h2>";
echo "<p style='font-size:30px;'>asort() - <span style='color:blue; font-weight:bold;'>값에 따라 연관</span> 배열을 오름차순으로 정렬</p>";

$age = [
"김길수"=> 25,
"이창원" => 30,
"홍길동" => 15,
"박영식" => 35,
];

asort($age);

print_r($age);

echo "<br>";
echo "<hr>";

echo "<h2 style='font-size:50px;'>배열 정렬 내장 함수</h2>";
echo "<p style='font-size:30px;'>ksort() - <span style='color:blue; font-weight:bold;'>키에 따라 연관</span> 배열을 오름차순으로 정렬</p>";

$age = [
"김길수"=> 25,
"이창원" => 30,
"홍길동" => 15,
"박영식" => 35,
];

ksort($age);

print_r($age);

echo "<br>";
echo "<hr>";

echo "<h2 style='font-size:50px;'>배열 정렬 내장 함수</h2>";
echo "<p style='font-size:30px;'>arsort() - <span style='color:red; font-weight:bold;'>값에 따라 연관</span> 배열을 내림차순으로 정렬(가나다 역순)</p>";

$age = [
"김길수"=> 25,
"이창원" => 30,
"홍길동" => 15,
"박영식" => 35,
];

arsort($age);

print_r($age);

echo "<br>";
echo "<hr>";

echo "<h2 style='font-size:50px;'>배열 정렬 내장 함수</h2>";
echo "<p style='font-size:30px;'>krsort() - <span style='color:red; font-weight:bold;'>키에 따라 연관</span> 배열을 내림차순으로 정렬 (가나다 역순)</p>";

$age = [
"김길수"=> 25,
"이창원" => 30,
"홍길동" => 15,
"박영식" => 35,
];

krsort($age);

print_r($age);
?>