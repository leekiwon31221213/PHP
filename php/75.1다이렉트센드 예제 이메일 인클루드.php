<!-- 다양한 옵션 이메일 함수 
https://www.youtube.com/watch?v=m3R0bxPCyDU&list=PLTb3qGCzYjS3YhVLi9C-RQ5emvrTYBgzm&index=75
-->
<?php
include '75.0다이렉트센드 예제 이메일.php';

//초키화
$ch = curl_init();
$subject ='가입 환영합니다';
$body = '메일본문';
$sender = DIRECTSEND_SENDER; // 다이렉트센드 등록한 발신자 번호
$sender_name = DIRECTSEND_SENDERNAME;
$username = DIRECTSEND_USERNAME; //다이렉트센드 id
$api_key  = DIRECTSEND_APIKEY; //발급받은 API KEY

//발송
$array = [];
$array[] = ['email' =>'a@a.com'];
/* 여러개가 있을 경우 
$array[] = ['email' =>''];
$array[] = ['email' =>''];
$array[] = ['email' =>''];
*/
/* 전송 보낼때는 json 타입으로 보내야함 */
$receiver = json_encode($array);

$postarr =[
    "subject" => $subject,
    "body" => $body,
    "sender" => $sender,
    "sender_name" => $sender_name,
    "username" => $username,
    "api_key" => $api_key,
    "receiver" => $receiver
];
$postvars = json_encode($postarr);

//url 
$url = "API 호출url ";

//헤더 정보
$headers = [];
$headers [] = "cache-control:no-cache";
$headers [] = "content-type:application/json; charset:utf-8";


//시작
curl_setopt($ch, CURLOPT_URL, $url);

//전송방식
curl_setopt($ch , CURLOPT_POST, true);

/* json 배열 변수 넣어주기 */
curl_setopt($ch , CURLOPT_POSTFIELDS,$postvars);


curl_setopt($ch , CURLOPT_RETURNTRANSFER,true); //JSON 데이터

/* 접속하는 시간 */
curl_setopt($ch , CURLOPT_CONNECTTIMEOUT,3);

/* 접속하고 나서 타임아웃 하는 시간 60초 */
curl_setopt($ch , CURLOPT_TIMEOUT,60);


curl_setopt($ch , CURLOPT_HEADER,$headers);

/* 출력 */
$response =curl_exec($ch);

/* 정상적으로 출력이 되었는지 if문으로 체크 */
if(curl_errno($ch)){
    $arr =['result'=> 'fail'];
    echo json_encode($arr); 
} else{
    $arr=['result'=> 'success'];
    echo json_encode($arr);
}

//종료
curl_close($ch);
?>