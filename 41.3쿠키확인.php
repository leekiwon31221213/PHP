<?php 

if(isset($_COOKIE['ck_name'])){
//isset() 셋팅이 되어있는지 참 거짓으로 구분하는 함수
echo '이름은 :' .$_COOKIE['ck_name'] . '입니다.<br>';
} else{
    echo '이름을 모르겠습니다.<br>';
}

if(isset($_COOKIE['ck_age'])){
    //isset() 셋팅이 되어있는지 참 거짓으로 구분하는 함수
    echo '나이는 :' .$_COOKIE['ck_age'] . '입니다.<br>';
    } else{
        echo '나이를 모르겠습니다.<br>';
    }
?>

<a href="41.4쿠키삭제.php">쿠키지우기</a>