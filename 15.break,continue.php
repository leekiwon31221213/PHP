<?php

echo "<h2 style='font-size:50px;'>break 반복문 중단</h2>";

for($i = 0; $i < 10; $i++){
    if($i == 4){
        break;
    }
    echo "이 숫자는 $i 입니다<br>";
}

//break는 루프를 탈출



echo "<br>";
echo "<hr>";

echo "<h2 style='font-size:50px;'>continue반복문 계속</h2>";
for($i2 = 0; $i2 < 10; $i2++){
    if($i2 == 4){
        continue;
    }
    echo "이 숫자는 $i2 입니다<br>";
}

//continue는 다시 올라가서 증감식이++되기때문에 9까지 증가

?>