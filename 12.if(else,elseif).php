<?php 
#if문
echo "<h2 style='font-size:50px;'>if문, else if , else 조건문 </h2>";
// if(조건문){
// 만족할때 처리
//}else{
    //만족 하지 않을때 처리
    //}

    $a = 10;
    if($a > 5){
        echo $a ."는 5보다 큽니다.";
    }else{
        echo $a ."는 5보다 크지않습니다.";
    }
    
echo "<br>";
echo "<br>";

    $b = 79;
    if($b >= 90){
        echo "당신은 B입니다.";
    }else if($b >=80){
        echo "당신은 C입니다.";
    } else{
        echo "당신은 D이하 입니다";
    }

echo "<br>";
echo "<br>";

$c='응';

if($c =='여자'){
    echo "저는 여자입니다";
}else if($c =='남자'){
    echo '저는 남자입니다';
}else{
    echo '저는 바람입니다.';
}

echo "<br>";
echo "<hr>";


?>