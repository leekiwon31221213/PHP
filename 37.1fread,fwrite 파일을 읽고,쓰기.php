<?php 

echo "<h2 style='font-size:70px;'>파일을 읽어주는 fread()</h2>";
echo "<p style='font-size:30px;'>읽기 전용으로 파일을 열것이냐 </p>";

echo "<p style='font-size:30px;'>fopen()</p>";

$file = '37.2.imsi.txt';
$pf = fopen($file, 'r');   // (파일 변수 , 'r') -> 'r'읽기모드
$fz = filesize($file);
$fr = fread($pf , $fz);
echo $fr;

echo "<br>";

echo "<p style='font-size:50px;'>에러 체크 file_exists()함수</p>";

$file2 = '37.3.imsi.txt'; //존재하지 않는 파일
if(file_exists($file2)){
$pf2 = fopen($file2, 'r');   // (파일 변수 , 'r') -> 'r'읽기모드
$fz2 = filesize($file2);
$fr2 = fread($pf2 , $fz2);
echo $fr2;
} else{
    echo "존재하지 않은 파일입니다";
}

echo "<br>";
echo "<p style='font-size:50px;'>파일을 열었을때 어떤 이유에선지 열리지 않을때</p>";
echo "<p style='font-size:50px;'>파일을 다 읽은 후 반드시 해지 해줘야함 fclose() </p>";

$file3 = '37.2.imsi.txt';  //파일이 있는지 체크 1
if(file_exists($file3)){
$pf3 = fopen($file3, 'r');   // 파일을 읽기 모드로 파일을 연다 3
if($pf3){
$fz3 = filesize($file3);
$fr3 = fread($pf3 , $fz3);
if($fr3){ //파일을 읽기에 성공 했으면 5
    echo $fr3; // 출력을하고 6
    fclose($pf3); //파일을 다 읽은후 해지를 해줘야함 해지 안해주면 메모리가 누수가 발생 가능
} else{ //읽기를 실패 했으면 7
    echo"파일 읽기에 실패 했습니다.";
}
} else{ // 파일 열기에 실패했으면 4
    echo "파일 열기에 실패 했습니다."; 
}
} else{ //파일이 없으면 2
    echo "존재하지 않은 파일입니다";
}


echo "<br>";
echo "<hr>";

echo "<h2 style='font-size:70px;'>파일을 쓰는 fwrite()</h2>";
echo "<p style='font-size:30px;'>쓰기 전용으로 파일을 열것이냐</p>";

$file4 = '37.3.imsi.txt';

$pf4 = fopen($file4, 'a'); //'w' 글쓰다 'a' 추가하다
fwrite($pf4, PHP_EOL."뽀글뽀글"); //한줄로 나오는게 불편하다면 PHP_EOL 작성해주면 줄바꿈이 됨
fclose($pf4);


?>