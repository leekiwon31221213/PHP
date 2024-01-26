<?php
echo "<h2>echo, print 동일 출력문</h2>";
echo "1";
print "2";

echo ("3");
print ("4");

echo "<br>";
echo "<hr>";

print "<h2>echo, print 마크업이 같이 사용 가능</h2>";
echo "<h2>안녕하세요 PHP</h2>";

echo "<br>";
echo "<hr>";


echo "<h2>echo문은 변수와 사용이 가능</h2>";
$text1 = "Learn PHP";
$x = 5;
$y = 10;
# .~~~. ..은 문자열 연결 연산자
echo "<h2>".$text1."</h2>";

echo $x + $y;

echo "<br>";
echo "<hr>";


echo "<h2>PHP var_dump 정수 실수 문자</h2>";
$xx = 3333; //int 정수
$yy = 3333.555; //float 실수
$string = "한글"; // string 문자열 bytes로 반환   bytes는 문자의길이

$string_length = strlen("문자열길이"); // strlen() 문자열을 bytes로 반환 ex) int(16)

var_dump($xx, $yy, $string, $string_length);
//->변수형, 즉 변수가 int인지, float인지 array 등등 인지 출력해준다.

echo "<br>";

echo str_word_count("Hello World see bal");//단어수 세기 영어만 가능

echo "<br>";

echo strrev("Hello World see bal");//문자열 뒤집는 함수

echo "<br>";

$text_search = strpos("Hello World see bal","see bal");
// 띄어쓰기 포함해서 0부터 see bal이 몇번째에 있는지 찾아줌
// 실무에서 이메일에서 많이 사용됨 @ 을 포함하고 있는지 
echo $text_search;

echo "<br>";

#strpos() 실무예시
$email = "aaa@nate.com";

if(strpos($email, "@") ){
    echo "이메일 형식에 맞음";
}else{
    echo "이메일 형식이 잘못됨";
}


?>