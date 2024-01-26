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

echo "<h2 style='font-size:80px;'>NOT [^문자]</h2>";
echo "<h2 style='font-size:50px;'>[]안에 ^ =[^] 을 사용하게 되면 -> 문자가 아닌</h2>";
echo "<p style='font-size:30px;'>ex)abcd -> [^a] -> a가 아닌 문자열 bcd가됨</p>";
echo "<p style='font-size:30px;'>^A(캐럿)만 사용하게 되면  A로 시작하는</p>";
$string = "ABCDEFGHIJKLMNOPQRSTUVWXYZ
abcdefghijklmnopqrstuvwxyz0123456789"; //target string
  // $pattern ='/[^C]/';대문자 C가 아닌 문자열 ( 대문자 C 빼고 모든 문자열 )
  $pattern ='/[^C0-9]/';

echo "<p style='font-size:30px;'></p>";
echo "<p style='font-size:30px;'></p>";

echo "<h3>before:</h3>";
echo $string;
echo "<h3>after:</h3>";
$replacement = "<span>=</span>";
// $replacement = "<span>=</span>";  대문자 C가 아니면 문자열을 = 다 변경

echo preg_replace($pattern, $replacement ,$string) ; 

echo "<br>";
echo "<hr>";

echo "<h2 style='font-size:80px;'>서브패턴(aa|bb) (|) 버티컬 바</h2>";

$string2 = "Monday Tuesday Friday"; //target string
$pattern2 ='/(on|ues|rida)/'; 

// $pattern2 ='/(Mon|Tues|Fri)day/'; day 는 공통
// $pattern2 ='/..(id)ay/'; Fr(id)ay 를 찾아 ..은 Fr을 찾음 (id)찾고 ay를 찾는다
// $pattern2 ='/..(id|esd|nd)ay/'; 

echo "<p style='font-size:30px;'>on 또는 use 또는 rida를 찾아 = 으로 변경한다</p>";



echo "<h3>before:</h3>";
echo $string2;
echo "<h3>after:</h3>";

$replacement2 = "<span>=</span>"; // =변경한다

echo preg_replace($pattern2, $replacement2 ,$string2) ; 


?>