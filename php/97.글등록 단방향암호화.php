<?php 
/* 제목 */
$title = (isset($_POST['title'])&& $_POST['title'] != '') ? /* 참일때 */ $_POST['title']: /* 거짓 */'';
//$title = $_POST['title']; 참일때
//$title = '';

/* 본문 */
$content = (isset($_POST['content'])&& $_POST['content'] != '') ? /* 참일때 */ $_POST['content']: /* 거짓 */'';


/* 작성자 */
$name = (isset($_POST['name'])&& $_POST['name'] != '') ? /* 참일때 */ $_POST['name']: /* 거짓 */'';


/* 비밀번호 */
$pw = (isset($_POST['pw'])&& $_POST['pw'] != '') ? /* 참일때 */ $_POST['pw']: /* 거짓 */'';

/* 코드 */
$code = (isset($_POST['code'])&& $_POST['code'] != '') ? /* 참일때 */ $_POST['code']: /* 거짓 */'';


// 비밀번호 단방향 암호화
$pwd_hash = password_hash($pw,PASSWORD_BCRYPT);
// echo $pwd_hash;
?>