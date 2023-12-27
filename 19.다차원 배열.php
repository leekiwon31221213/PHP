<?php

echo "<h2 style='font-size:50px;'>다차원 배열</h2>";
echo "<p style='font-size:30px;'>여러차원에 걸쳐서 배열을 만듬 배열속에 배열이 있음</p>";

#2차원 배열(다차원배열)

$car = [
["볼보", 22 ,10], //index 0, 0~2
["산타페", 25 ,4],  //index 1, 0~2
["아우디", 12 ,11],  //index 2 , 0~2
];
print_r($car);
echo $car[1][0]."의 제고는".$car[1][1];


echo "<br>";

$car2 = array (
    array("볼보", 22 ,10),
    array("산타페", 25 ,4),
    array("아우디", 12 ,11),
    );
print_r($car2);


echo "<br>";
echo "<hr>";


echo '<table border="2">
<tr>
<th>차종</th>
<th>재고량</th>
<th>판매량</th>
</tr>
';

for($row = 0; $row <3; $row++){
    echo "<tr>";
        for($col=0; $col <3; $col++){
            echo "<td>".$car[$row][$col]."</td>";
    }
    echo "</tr>";
    }

echo '</table>';
?>