<?php 

echo "<h2 style='font-size:50px;'>while 반복문</h2>";
$a = 2;
while($a < 10){
    echo " <h3>$a 반복문이 출력됩니다</h3>";
    $a++;
}
// 2부터 시작해서 3이 되어 실행 
// while 문은 조건문이 만족하는 동안 반복실행


echo "<br>";
echo "<hr>";

echo "<h2 style='font-size:50px;'>do while 반복문</h2>";
$b = 2;
do{
    echo " <h3>$b 반복문이 출력됩니다</h3>";
    $b++;
} while($b < 10);

/* while문과 do while문의 차이점 */
//while문은 조건이 만족하는 경우에 계속 출력 조건을 하나라도 만족하지 않으면 출력하지 않음
//do while문은 조건이 만족하지 않더라도 조건에 관계없이 한번은 출력함


?>