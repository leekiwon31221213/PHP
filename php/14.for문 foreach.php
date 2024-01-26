<?php

echo "<h2 style='font-size:50px;'>for문</h2>";

#for문

//for(시작값; 조건; 증감식){}

for($i=1; $i<10; $i++){
    echo "<h2>$i i는 10보다 작을때 ++된다</h2>";
}
echo "<br>";
echo "<hr>";

echo "<h2 style='font-size:50px;'>foreach문</h2>";
#foreach문 배열
//for of , for in 

// $arr = array('사과','바나나','딸기','오렌지');
$arr = ['사과','바나나','딸기','오렌지'];
foreach($arr AS $fruit){
    echo "<h2>$fruit</h2>";
}

// $arr = array(
//     1 =>'사과',
//     2 =>'바나나',
//     3 =>'딸기',
//     4 =>'오렌지'
// );

// foreach($arr AS $key => $val){
//     // echo "<h2>$val</h2>";
//     echo "<h2>$arr[$key]</h2>";
// }

?>