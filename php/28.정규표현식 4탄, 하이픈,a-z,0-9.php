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

echo "<h2 style='font-size:80px;'>- 하이픈</h2>";
echo "<h2 style='font-size:50px;'>-하이픈은 ~에서 ~까지 </h2>";
echo "<p style='font-size:30px;'></p>";
$string = "ABCDEFGHIJKLMNOPQRSTUVWXYZ
abcdefghijklmnopqrstuvwxyz0123456789"; //target string
$pattern ='/[A-Cf-i-3-8]/';  //

echo "<p style='font-size:30px;'>휴대폰번호 확인할때 /[0-9]/</p>";
echo "<p style='font-size:30px;'>영문 이름 확인할때 /[a-zA-z]/</p>";





echo "<h3>before:</h3>";
echo $string;
echo "<h3>after:</h3>";

$replacement = "<span>=</span>";

echo preg_replace($pattern, $replacement ,$string) ; 

echo "<br>";
echo "<hr>";


?>