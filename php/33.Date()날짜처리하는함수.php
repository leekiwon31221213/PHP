<?php 

echo "<h2 style='font-size:50px;'>Date() 날짜를 처리하는 함수</h2>";


echo date("Y");
echo "<p style='font-size:30px;'>대문자 'Y'는 년도를 4자리로 표현</p>";

echo date("y");
echo "<p style='font-size:30px;'>소문자 'y'는 년도를 2자리로 표현</p>";

echo date("M");
echo "<p style='font-size:30px;'>대문자 'M'는 영어로 월을 3자리 표현 ex) Dec </p>";

echo date("m");
echo "<p style='font-size:30px;'>소문자 'm'는 숫자로 월을 표현 ex) 12</p>";

echo date("n");
echo "<p style='font-size:30px;'>소문자 'n'는 숫자로 월을 표현하는데 01~09 까지의 0을 뺴줌 ex) 1~9</p>";

echo date("D");
echo "<p style='font-size:30px;'>대문자 'D'는 영어로 요일을 3자리 표현 ex) Fri 금요일</p>";

echo date("d");
echo "<p style='font-size:30px;'>소문자 'd'는 숫자로 몇 일을 표현 ex) 01</p>";

echo date("j");
echo "<p style='font-size:30px;'>소문자 'j'는 숫자로 몇 일을 표현 하는데 0을 뺴줌 ex) 1~9</p>";

echo date("N");
echo "<p style='font-size:30px;'>대문자 'N'는 몇번째 요일 인지 알려줌 ex ) 금요일 5번째 요일이니까 5가 출력 </p>";

echo "<br>";
echo "<hr>";

echo "<h2 style='font-size:50px;'>년 월 일 시간 </h2>";
echo date("Y년 m월 d일 H시 i분 s초");
echo "<p style='font-size:30px;'> Y-m-d H:i:s ->2023-12-01 08:03:36</p>";

echo "<br>";
echo "<hr>";
echo "<h2 style='font-size:50px;'>실전 활용</h2>";


echo "<h2 style='font-size:50px;'>switch문</h2>";
switch(date("N")){
    case 1: $yoil = '월요일'; break;
    case 2: $yoil = '화요일'; break;
    case 3: $yoil = '수요일'; break;
    case 4: $yoil = '목요일'; break;
    case 5: $yoil = '금요일'; break;
    case 6: $yoil = '토요일'; break;
    case 7: $yoil = '일요일'; break;    
}
echo "오늘은 $yoil 입니다.";

echo "<h2 style='font-size:50px;'>if문</h2>";
$dayOfWeek = date("N");

if ($dayOfWeek == 1) {
    $yoil = '월요일';
} elseif ($dayOfWeek == 2) {
    $yoil = '화요일';
} elseif ($dayOfWeek == 3)  {
    $yoil = '수요일';
} elseif ($dayOfWeek == 4) {
    $yoil = '목요일';
} elseif ($dayOfWeek == 5) {
    $yoil = '금요일';
} elseif ($dayOfWeek == 6) {
    $yoil = '토요일';
} elseif ($dayOfWeek == 7) {
    $yoil = '일요일';
}
echo "오늘은 $yoil 입니다.";
?>