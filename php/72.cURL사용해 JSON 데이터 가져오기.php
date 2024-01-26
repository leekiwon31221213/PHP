<?php 
echo "<p>날씨 출력</p>";

$ch = curl_init();
curl_setopt($ch,CURLOPT_URL,'http://echo.jsontest.com/temerature/-9.3/humidity/0.40/wind/3');
//키값 추가로 더 넣기 사이에
//
curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);

$response = curl_exec($ch);
curl_close($ch);

// echo $response;

/* json 데이터를 배열로 변경 */
$arr = json_decode($response);
// print_r($arr);

// echo $arr->wind;

foreach($arr AS $key => $var){
    echo $key .':'. $var;
    echo "<br>";
}

?>

<table border='1' width="200">
    <tr>
        <td>온도</td>
        <td>
            <?= $arr->temerature; ?>
        </td>
    </tr>

    <tr>
        <td>습도</td>
        <td>
            <?= $arr->humidity; ?>
        </td>
    </tr>

    <tr>
        <td>풍속</td>
        <td>
            <?= $arr->wind; ?> m/s
        </td>
    </tr>
</table>