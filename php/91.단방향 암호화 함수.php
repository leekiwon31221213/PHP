<?php


$password ='1234';

//단방향 암호화 함수
$new_password= password_hash($password,PASSWORD_DEFAULT);


// echo $new_password;
$wrong_password = '1111';

// password_verify()는 $password 값과 해쉬로 암화 된 $new_password를 비교하여 동일한 값인지 아닌지 확인해주는 함수
if(password_verify($password,$new_password)){
    echo '비밀번호 일치';
}else{
 echo '비밀번호 오류';
}

?>

<!DOCTYPE html>
<html lang="ko">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <ol>단방향 암호화 함수
        <li>복구화가 안되는 암호와의 방식 <br>
            A를 넣어서 B가 나왔는데 / B를 다시 A로 나타지 못하게
        </li>
    </ol>

    <ol> 단방향 암호를 사용해야하는이유
        <li>MySql에서 옛 버전에서는 password라는 함수를 제공을 해서 암호화 해서 저장하는 방법을 제공을 했으나 <br> 버전이 올라 가면서 제공을 안함</li>
        <li><strong>PHP에서 비밀번호,주민번호+중요한 정보를 암호화 해서 저장해야할 필요가 있음</strong></li>

    </ol>
</body>

</html>