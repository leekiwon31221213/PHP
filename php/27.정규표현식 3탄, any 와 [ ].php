<style>
span {
    color: #fff;
    background-color: #333;
}

* {
    line-height: 3;
}

h3 {
    color: royalblue;
    font-size: 30px;
}
</style>
<?php 

echo "<h2 style='font-size:80px;'>any .</h2>";


echo "<h2 style='font-size:50px;'>/^R./예제1</h2>";
echo "<p style='font-size:30px;'>/^R./을 사용하게되면 /^Re/로 안찾아도됨</p>";
$string = "Reqular expressions"; //target string
$pattern ='/^R./'; //R 시작하는 문자열 찾아주고 . E까지 찾아줌



echo "<h3>before:</h3>";
echo $string;
echo "<h3>after:</h3>";

$replacement = "<span>=</span>";

echo preg_replace($pattern, $replacement ,$string) ; 

echo "<br>";

echo "<h2 style='font-size:50px;'>/...../ 예제2</h2>";
$string2 = "Reqular expressions"; //target string
echo "<p style='font-size:30px;'>/./는 공백 포함 문자열을 찾아줌</p>";
$pattern2 ='/...../'; 

// $pattern ='/...../';는 공백 포함해 5개 문자열을 찾아줌


echo "<h3>before:</h3>";
echo $string2;
echo "<h3>after:</h3>";

echo "<p style='font-size:30px;'> Requl , ar ex , press , ions는 4글자 변경없음</p>";

$replacement2 = "<span>=</span>";

echo preg_replace($pattern2, $replacement2 ,$string2) ; 
echo "<br>";

echo "<h2 style='font-size:50px;'> 예제3</h2>";
$string3 = "OK.OK"; //target string
echo "<p style='font-size:30px;'>OK뒤에 .만 찾아줌</p>";
$pattern3 ='/\./';

echo "<h3>before:</h3>";
echo $string3;
echo "<h3>after:</h3>";

echo "<p style='font-size:30px;'></p>";

$replacement3 = "<span>=</span>";

echo preg_replace($pattern3, $replacement3 ,$string3) ; 

echo "<br>";
echo "<hr>";

echo "<h2 style='font-size:80px;'>[]</h2>";


$string4 = "How do you do?"; //target string
echo "<p style='font-size:30px;'>[oyu] []안에 oyu를 찾아줌 [ ]<이렇게 띄워주면 공백을 찾아달라는말</p>";
$pattern4 ='/[oyu][yow]/';

echo "<h3>before:</h3>";
echo $string4;
echo "<h3>after:</h3>";

echo "<p style='font-size:30px;'></p>";

$replacement4 = "<span>!</span>";

echo preg_replace($pattern4, $replacement4 ,$string4) ; 
?>