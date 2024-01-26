<?php 
function exclaim($name,$str){
    return $name ."님". $str ."! <br>";
}

function ask($name,$str){
    return $name."님" .$str . "?<br>";
}

function printFormatted($name ,$str, $format){
    echo $format($name, $str); 
}

printFormatted("톰","안녕하세요", "exclaim");
printFormatted("브라이언","어디가세요", "ask");
?>