<?php

echo "<h2 style='font-size:50px;'>수퍼 전역 &#36;GLOBALS</h2>";
echo "<p style='font-size:30px;'></p>";


echo "<p style='font-size:30px;'>첫번째 방법</p>";
$GLOBALS['aaa']= '안녕';
echo $aaa;

$GLOBALS['bbb']= '안녕은 반말이야';
function aabb(){
    echo "<p>".$GLOBALS['bbb']."</p>";
}
aabb();

echo "<br>";
echo "<hr>";

echo "<p style='font-size:30px;'>두번째 방법</p>";

function aabbcc(){
   $GLOBALS['ccc']='값';}
aabbcc();

echo $GLOBALS['ccc'];

echo "<br>";
echo "<hr>";

echo "<p style='font-size:30px;'>세번째 방법</p>";

function aabbccdd(){
   $GLOBALS['ddd']='값이올라~';}
aabbccdd();

echo $ddd;
?>