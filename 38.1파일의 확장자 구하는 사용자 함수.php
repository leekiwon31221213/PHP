<?php 

echo "<h2 style='font-size:50px;'>explode() 함수 자주 사용하기 때문에 꼭 알아둘 필요가 있음 </h2>";
echo "<p style='font-size:30px;'>지정된 문자로 문자열을 잘라서 배열을 만들게 도와줌</p>";

$str = "a,b,c,d";

$array = explode(',',$str);
print_r($array);

echo "<p style='font-size:30px;'>&#36;array = explode(' , ' , &#36;str)는 <br> 
&#36;array = ['a','b','c','d'] 로 해석된다</p>";



echo "<br>";
echo "<hr>";


echo "<h2 style='font-size:50px;'>count()함수</h2>";
echo "<p style='font-size:30px;'>배열의 크기를 구해주는 함수</p>";

echo count($array); 

echo "<p style='font-size:30px;'>['a','b','c','d'] 총 4개라 4가 출력</p>";


echo "<br>";
echo "<hr>";

echo "<h2 style='font-size:50px;'>end()함수</h2>";
echo "<p style='font-size:30px;'>배열의 마지막 값을 리턴 , 구해줌</p>";

echo end($array);

echo "<p style='font-size:30px;'>['a','b','c','d']  4개중 마지막 d가 출력</p>";


echo "<br>";
echo "<hr>";

echo "<h2 style='font-size:50px;'>예제</h2>";


$file_name = 'test.jpg'; //.을 기준으로 쪼갤 경우

$array2 =  explode('.',$file_name); //.을 기준으로 file_name을 쪼갠다

echo "<p style='font-size:30px;'>&#36;array2 = explode('.',&#36;file_name); 을 해석하면 <br> 
&#36;array2 = ['test','jpg'];가 된다

</p>";

$ext = end($array2);
echo $ext; 

echo "<p style='font-size:30px;'>['test','jpg'] end()함수 때문에 jpg가 리턴되어 출력됨</p>";

echo "<br>";
echo "<hr>";


echo "<h2 style='font-size:30px;'>
&#36;file_name = 'test.jpg';
<br>
&#36;array2 =  explode('.',&#36;file_name);
<br>
&#36;ext = end(&#36;array2);
<br>
echo &#36;ext;  를 end() 함수로 만들기
</h2>";

function 확장자구하기($file_name){
    $array2 =  explode('.',$file_name);
    $ext = end($array2);
    return $ext;  //return 밖으로 던져주는 역할 야구로 따지면 투수
};


$file_name = 'photo.png';
$ext = 확장자구하기($file_name); //return 값을 받음 포수 역할

echo $ext;


echo "<br>";
echo "<hr>";

echo "<h2 style='font-size:30px;'>
&#36;file_name2 = 'test.jpg';
<br>
&#36;array3 =  explode('.',&#36;file_name2);
<br>
&#36;ext2 = end(&#36;array3);
<br>
echo &#36;ext2;  를 count() 함수로 만들기
</h2>";


$file_name2 = 'aaa.ccc.jpg';
$array3 =  explode('.',$file_name2);

$array_size = count($array3); // 3
$ext2 = $array3[$array_size - 1 ];

print_r($array3);
echo "<br>";
echo $ext2;
echo "<p style='font-size:30px;'>size 값이 3이 담기지만 가져오는 값은 2가 가져와짐(3에서 1뺀 값) 왜냐하면 index 0부터 시작이니까 0 1 2 </p>";



?>