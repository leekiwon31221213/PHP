<?php

echo "<h2 style='font-size:50px;'>&#36;_SERVER</h2>";


// print_r($_SERVER);

echo $_SERVER['PHP_SELF'];

# 활용 방법  
/* <a href="<?= $_SERVER['PHP_SELF']; ?>?a=b">b의 값을 가져오기</a> */

echo "<br>";
echo "
<hr>";

echo "<h2 style='font-size:50px;'>&#36;_SERVER['HTTP_USER_AGENT'];</h2>";
echo "<p>".$_SERVER['HTTP_USER_AGENT']."</p>"; //HTTP_USER_AGENT 브라우저 환경 보기

$server = $_SERVER['HTTP_USER_AGENT'];

# 활용 방법
if(strpos($server, 'Chrome')){
echo "크롬유저 입니다";
}else{
echo '크롬유저가 아니네요';
}

echo "<br>";
echo "
<hr>";

echo "<h2 style='font-size:50px;'>&#36;_SERVER['REMOTE_ADDR'] 제일중요;</h2>";
echo "<p style='font-size:30px;'>&#36;_SERVER['REMOTE_ADDR'] <strong>방문한 사람의 IP정보를 알 수 있음</strong></p>";

echo "당신의 IP는".$_SERVER['REMOTE_ADDR']."입니다";


?>