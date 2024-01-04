<?php
include '73.다이렉트센드 예제 key값이 있다는 전제하.php';

define('DIRECTSEND_SMSURL','메뉴얼(예제)나와있는 링크주소');


// 휴대폰 문자에 날라가는 메세지며 계속 값이 변함 
$message = "가입을 축하드립니다.";
$sender = DIRECTSEND_SENDER; // 다이렉트센드 등록한 발신자 번호
$username = DIRECTSEND_USERNAME; //다이렉트센드 id
$api_key  = DIRECTSEND_APIKEY; //발급받은 API KEY

//수신자 번호
$r_array = [];
$r_array[] = ['mobile' =>''];
/* 여러개가 있을 경우 
$r_array[] = ['mobile' =>''];
$r_array[] = ['mobile' =>''];
$r_array[] = ['mobile' =>''];
*/

/* 전송 보낼때는 json 타입으로 보내야함 */
$receiver = json_encode($r_array);


// 제이슨 타입 -> [{'mobile' : '01022222222},{'mobile' : '0105455555555}]

/* curl에서 POST VALUES에 넣는 것들을 담아 한번에 보내는걸 배열 형태로 구성 */
$postarr =[
    "message" => $message,
    "sender" => $sender,
    "receiver" => $receiver,
    "api_key" => $api_key
];


$postvars = json_encode($postarr);

$headers = [];
$headers [] = "cache-control:no-cache";
$headers [] = "content-type:application/json; charset:utf-8";

//curl 초기화
$ch = curl_init();
//시작
curl_setopt($ch, CURLOPT_URL, DIRECTSEND_SMSURL);

//전송방식
curl_setopt($ch , CURLOPT_POST,true);

/* json 배열 변수 넣어주기 */
curl_setopt($ch , CURLOPT_POSTFIELDS,$postvars);


curl_setopt($ch , CURLOPT_RETURNTRANSFER,true);

/* 접속하는 시간 */
curl_setopt($ch , CURLOPT_CONNECTTIMEOUT,3);

/* 접속하고 나서 타임아웃 하는 시간 60초 */
curl_setopt($ch , CURLOPT_TIMEOUT,60);


curl_setopt($ch , CURLOPT_HEADER,$headers);

/* 정상적으로 출력이 되었는지 if문으로 체크 */
if(curl_errno($ch)){
    echo "CURL error :".curl_error($ch);
    $arr =['result'=> 'fail'];
    echo json_encode($arr); 
} else{
    $arr=['result'=> 'success'];
    echo json_encode($arr);
}

/* 출력 */
$response =curl_exec($ch);


//종료
curl_close($ch);
?>