<?php 
$id= (isset($_POST['id']) && $_POST['id'] != '') ? $_POST['id']:'';
// 만약 $_POST['id']가 있는지 확인을 해준다.  $_POST['id'] != ''아이디 값이 비어있지 않으면  $_POST['id'] :''; 아이디값을 받겠다.

$pw= (isset($_POST['pw']) && $_POST['pw'] != '') ? $_POST['pw']:'';

if($id ==''){
    echo "
    <script>
    alert('아이디를 입력해주세요');
    history.go(-1);
    </script>
    ";
    exit;
}


if($pw ==''){
    echo "
    <script>
    alert('비밀번호를 입력을해주세요');
    history.go(-1);
    </script>
    ";
    exit;
}

if($id=='guest' && $pw== '1234'){
    session_start();

    $_SESSION['ss_id'] = $id;

    echo" 
    <script>
    alert('로그인 성공했습니다');
    self.location.href='44.3회원전용페이지.php'; //회원전용 페이지 이동
    </script>";
}else{
    echo" 
    <script>
    alert('로그인 실패했습니다.');
    self.location.href='44.1Session활용로그인,로그아웃구현.php'; //회원전용 페이지 이동
    </script>";
}

?>