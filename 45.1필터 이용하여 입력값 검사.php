<?php 
$i = 100;
// $i = "a";

$j = filter_var($i,FILTER_VALIDATE_INT); //INT(정수)
// $j = filter_var($i,FILTER_VALIDATE_FLOAT); //FLOAT(실수)
//filter_var (변수,검증 필터의 종류)

// echo $j;

if($j){
    echo $i."제대로된 정수입니다";
}else{
    echo $i."제대로 된 정수가 아닙니다.";
}
echo "<br>";
echo "<hr>";

$ip = '127.0.0.1';
$d = filter_var($ip,FILTER_VALIDATE_IP);

if($d){
    echo $ip."제대로된 IP입니다";
}else{
    echo $ip."제대로된 IP가 아닙니다";
}

echo "<br>";
echo "<hr>";

$email = 'aaaa@bbbb.com';
$email_check = filter_var($email,FILTER_VALIDATE_EMAIL);

if($email_check){
    echo $email."제대로된 이메일 입니다";
}else{
    echo $email."제대로된 이메일이 아닙니다";
}

echo "<br>";
echo "<hr>";

$url = 'https://dakistore.co.kr/';
$url_check = filter_var($url,FILTER_VALIDATE_URL);

if($url_check){
    echo $url."제대로된 URL 입니다";
}else{
    echo $url."제대로된 URL이 아닙니다";
}

echo "<br>";
echo "<hr>";

$int = 133;
$min =1;
$max = 200;

if(filter_var($int,FILTER_VALIDATE_INT, array('options' => array('min_range' =>$min, "max_range" => $max)))=== false){
    echo "범위를 벗어납니다.";
}else {
    echo "범위 안에 들어와 있습니다.";
}
echo "<br>";

echo "<h2>IPv6 주소 확인</h2>";
echo "<h2>ipv4가 고갈되어 6준비해야함</h2>";
$ipv6 ="2001:0db8:85a3:08d3:1319:8a2e:0370:7334";
$ipv4 ="127.0.0.1";
if(filter_var($ipv6,FILTER_VALIDATE_IP, FILTER_FLAG_IPV6)===false){
    echo "잘못된 IPV6.";
}else {
    echo "정상적인 IPV6 입니다.";
}

echo "<br>";
echo "<hr>";


$url2 = 'http://daum.net/?a=dasdassda';

if(!filter_var($url2,FILTER_VALIDATE_URL, FILTER_FLAG_QUERY_REQUIRED)===false){
    echo "쿼리가 존재합니다.";
}else {
    echo "쿼리가 존재하지 않습니다.";
}

?>