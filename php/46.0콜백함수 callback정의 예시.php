<?php 

function 나의콜백($item){
return strlen($item);
}
$strings=['사과','오렌지','바나나','배'];

$lengths = array_map('나의콜백',$strings);

print_r($lengths);


echo '<br>';

echo "array_map('콜백함수',배열);";
?>