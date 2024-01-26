<?php 
//isset으로 값이 셋팅 되어있는지 확인
$vote = (isset($_GET['vote'])&& $_GET['vote'] != '')? $_GET['vote']:'';

if($vote == ''){
    die();
}

/* 1.파일생성 */
$filename = '80.data/80.2ajax투표프로그램.txt';

if(!file_exists($filename)){
    file_put_contents($filename,"0,0");
    /* file_put_contents() (1번 위치 , 2번의 내용을 1번위치에 기록함)  */
}

/* 2.파일생성 값을 읽어와야함 */

$content = file_get_contents($filename);
list($yes,$no) = explode(',', $content);

// echo "yes:".$yes. "<br>";
// echo "no:".$no. "<br>";

/* 3.파일생성 값을 증가시켜야함*/
if($vote == 0){
    $yes ++;
}else if($vote == 1){
    $no ++;
}

$yes_width = round(($yes / ($yes + $no)) *100);
$no_width = round(($no / ($yes + $no)) *100);

file_put_contents($filename,"$yes,$no");
// echo $yes. ''. $no;
// echo $yes_width. ''. $no_width;
?>
<h2> 투표결과 :</h2>
<table>
    <tr>
        <td>예</td>
        <td style="width:100px"><img src='https://www.w3schools.com/php/poll.gif'
                style="width:<?= $yes_width ?>%; height:20px;"></td>
        <td><?= $yes_width ?>%</td>
    </tr>

    <tr>
        <td>아니오</td>
        <td><img src='https://www.w3schools.com/php/poll.gif' style="width:<?= $no_width ?>%; height:20px;"></td>
        <td><?= $no_width ?>%</td>
    </tr>

    </tr>

</table>