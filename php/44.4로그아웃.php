<?php
session_start();
session_unset();
session_destroy();
?>

<script>
alert('로그아웃 되었습니다.');
self.location.href = '44.1Session활용로그인,로그아웃구현.php';
</script>