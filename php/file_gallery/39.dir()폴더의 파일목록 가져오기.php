<?php 

echo "<h2 style='font-size:50px;'>dir() 파일목록 가져오기</h2>";
echo "<p style='font-size:30px;'></p>";


$dir_name = "./upload";

/* 1 */
$d = dir($dir_name); //dir()이라는 붕어빵 틀에 &#36;d 붕어빵을 만들어준다 //인스턴스를 만들어 준다. 




/* 2 */
echo "<p style='font-size:30px;'>. , ..(부모의 폴더) 이 나오는 이유는 자기자신을 가르킴 나 밑에 업로드 폴더다 <br>
<strong>현) .은 자신폴더 ..(부모의 폴더)</strong></p>";
$file_name = $d->read(); // read() 메소드 파일 딱 하나 읽어옴
echo $file_name ."<br>";

$file_name = $d->read(); 
echo $file_name ."<br>";

$file_name = $d->read(); 
echo $file_name ."<br>";

$file_name = $d->read(); 
echo $file_name ."<br>";


//http://localhost/file_gallery/39.1dir().php

echo "<br>";
echo "<hr>";

echo "<h2 style='font-size:50px;'>1. 반복문을 통해 반복 줄이기 복잡한 코드</h2>";

$d = dir($dir_name);
$file_name = $d->read();

while(($file_name = $d->read()) !== false){
    if($file_name == '.' || $file_name == '..'){
        continue;
    }
    //echo $file_name ."<br>"; //파일 이름만호출
    echo'<img src="upload/'. $file_name. '" width= "500px">';
}


echo "<br>";
echo "<hr>";
echo "<h2 style='font-size:50px;'>2.반복문을 통해 반복 줄이기 조금 단순한 코드</h2>";
$d = dir($dir_name);
$file_name = $d->read();

while(($file_name = $d->read()) !== false){
    if($file_name == '.' || $file_name == '..'){
        continue;
    }
    
    echo "<img src='upload/{$file_name}' width='300px'>";
}

/* 3 */
$d->close();  // 열었던 폴더를 닫아줌

?>