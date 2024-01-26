<?php

echo "<h2 style='font-size:50px;'>index 배열</h2>";

// array() 예약어

$car_brand = ["현대","기아","제네시스","르노"];
$car_brand2 = $car_brand;

foreach($car_brand AS $car){
    echo $car . " ";
}

echo "<br>";

$car_brand2[0] ="BMW";
print_r($car_brand2);
echo "<br>";
print_r($car_brand);




echo "<br>";
echo "<hr>";



?>