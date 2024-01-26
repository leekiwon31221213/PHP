<?php
echo "<h2>단어 변경/기존 문자 , 바꿔줄 문자, 기존 문장</h2>";

# str_replace("바꿀문자열","바뀐문자열","대상문자열");

$str = "나는 굉장히 짜증난다";

$str1 = str_replace("짜증", "화가",$str); //기존 문자 , 바꿔줄 문자, 기존 문장


$text = '다음 생엔 사람으로 태어날거야';
$str2 = str_replace("사람", "돌맹이", $text); //기존 문자 , 바꿔줄 문자, 기존 문장


echo "<h2 style='font-size:50px' >$str1</h2>";
echo "<h2 style='font-size:50px' >$str2</h2>";

echo "<br>";
echo "<hr>";


echo "<h2>정수 is_int() ,실수 판별 is_float()</h2>";

//is_numeric() 
$x = 3433; //is_int() 변수 유형이 정수인지 판별
$y = 34.33; //is_float() 변수 유형이 실수인지 판별
$str3 = "안녕"; //is_numeric() 변수의 유형이 숫자인지 판별

var_dump(is_int($x));
echo "<br>";

/* 정수 판별문 */
if(is_int($x)){
    
    echo "$x 는정수입니다";
} else{
    echo "$x 는정수가 아닙니다";
}

echo "<br>";

/* 실수 판별문 */
if(is_float($y)){
    
    echo "$y 는 실수입니다";
} else{
    echo "$y 는 실수가 아닙니다";
}

echo "<br>";

if(is_numeric($str3)){
    echo "숫자입니다.";
}else{
    echo "숫자가 아닙니다.";
}

?>