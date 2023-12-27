<style>
span {
    color: #fff;
    background-color: #333;
}

* {
    line-height: 3;
    margin: 0;
    padding: 0;
}

h3 {
    color: royalblue;
}
</style>
<?php 

echo "<h2 style='font-size:50px;'>특정문자로 시작하는, 특정문자로 끝나는</h2>";
echo "<br>";
echo "<p style='font-size:30px;'>가장 기본적인 형태</p>";
$string = "Hello World";
$pattern ='/Hello/';

preg_match($pattern,$string, $result);
var_dump($result);

echo "<br>";

echo "<h2 style='font-size:50px;'>return이 올 경우</h2>";

$string2 = "Hello World";
$pattern1 ='/hello/i'; //찾았을 경우 1이 출력
$pattern2 ='/Hello1/'; //못찾아서 0이 리턴

//대소문자 구분안하고 i(플래그배치) 찾는거 i 플래그는 필요할떄만 넣기

$cnt = preg_match($pattern1,$string2); 
echo "<p style='font-size:30px;'>문자열을 찾았을 경우 1 못찾았으면 0이 리턴됨</p>";

echo $cnt;

echo "<br>";

echo "<h2 style='font-size:50px;'>제대로된 표현식</h2>";

$string3 = "who is who"; //target string3
$pattern3 ='/^who/';
$cnt2 = preg_match($pattern3,$string3); 

echo "<h3>before:</h3>";
echo $string3;
echo "<h3>after:</h3>";

$replacement = "<span>who</span>";

echo preg_replace($pattern3, $replacement ,$string3); 

echo "<p style='font-size:30px;'>who is who(&#36;string3)에서 &#36;pattern3으로 찾는데 찾으면 &#36;pattern3을 &#36;replacement로 변경해라</p>";
echo "<p style='font-size:30px;'>^who는 who로 시작하는 문자열</p>";

echo "<br>";
echo "<hr>";

$pattern4 ='/^A/';
echo "<p style='font-size:30px;'>^A A로 시작하는 문자열 찾기 $pattern4 </p>";

echo "<br>";

$pattern5 ='/A$/';
echo "<p style='font-size:30px;'>A$ A로 끝나는 문자열 찾기 $pattern5 </p>";  

echo "<br>";
echo "<hr>";

echo "<p style='font-size:30px;'>예제</p>";
echo "<p style='font-size:30px;'>이스케이프 \</p>";
$string4 = "$12$ \-\ $25$";
$pattern6 = '/\$$/';  //뒤에있는 $ 찾기
// $pattern6 = '/^\$/';  앞에있는 $ 찾아줌


echo "<h3>예제before:</h3>";
echo $string4;
echo "<h3>예제after:</h3>";

$replacement2 = "<span>찾음</span>"; //변경

echo preg_replace($pattern6, $replacement2 ,$string4); 

?>