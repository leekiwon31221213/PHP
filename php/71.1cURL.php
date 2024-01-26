<?php 

// echo "curl sample <br>";


//시작
$ch = curl_init();

//필수적으로 사용해야함
/* http */
// curl_setopt($ch,CURLOPT_URL, 'http://cbtti.or.kr'); 

/* https */
curl_setopt($ch,CURLOPT_URL, 'https://www.daum.net/'); 

curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
$response =curl_exec($ch);

//종료
curl_close($ch);

/* 같은 케릭터셋이면 사용할 필요 없음 문자 인코딩이 안될때 사용 
echo iconv('euc-kr','utf-8',$response); 
*/

//출력
echo $response;

?>