<?php

echo "<h2 style='font-size:50px;'>연관 배열</h2>";
echo "<p style='font-size:30px;'>key : value  -> json 방식과 비슷함</p>";

#첫번째 방법
$age =  [
    "아빠" => 40,
    "엄마" => 36,
    "나" => 12,
    "동생" => 8,
];
// print_r($age);

echo "엄마는".$age["엄마"]."살입니다";

/* foreach */
foreach($age AS $key => $val){
    echo "<h2>".$key. "는 ".$val. "</h2>";
}

echo "<br>";

$age2 = array(
    "아빠" => " 40 ",
    "엄마" => " 36 ",
    "나" => " 12 ",
    "동생" => " 8 ",
);
// print_r($age2);

echo "<br>";

#두번째 방법
$fruits = array();

$fruits["사과"] = "브라질산";
$fruits["배"] = "국산";
$fruits["딸기"] = "미국산";
$fruits["포도"] = "칠레산";

// print_r($fruits);

echo "<br>";
echo "<hr>";




?>