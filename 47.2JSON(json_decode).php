<?php 
// $age = array('Peter' => 35 , "Ben" => 37, "Joe" => 20);

$json = '{"Peter":35, "Ben":37, "Joe":20}';


// var_dump( json_decode($json));

$obj = json_decode($json,false); //($json,false) 기본값  false인 경우 객체타입
//var_dump($obj);  접근 방식이 object
echo $obj->Peter; //오브젝트 출력법

/* ($json,true) true인 경우 배열타입으로 변경
$array = json_decode($json,true);  
var_dump($array); 접근 방식이 array

echo $array["Peter"]; 배열 출력법 

*/
?>