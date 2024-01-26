<?php 
session_start();
//$_SESSION['ss_id'] = $id; 
//$_SESSION['ss_id']가 세팅이 안되어있거나 또는 비어있을 경우 $_SESSION['ss_id']가 true
if(!isset($_SESSION['ss_id']) || $_SESSION['ss_id'] == ''){
    echo "
    <script>
    alert('회원 전용 페이지 입니다.'); 
    self.location.href ='44.1Session활용로그인,로그아웃구현.php';
    
    </script>";

    //history.go(-1); , self.location.href ='44.1Session활용로그인,로그아웃구현.php';을 통해 이전페이지 또는 로그인페이지로이동시켜야함
    exit;
}

?>
<p>회원 전용 페이지</p>

<a href="44.4로그아웃.php">로그아웃</a>