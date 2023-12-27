<?php
echo "<h2 style='font-size:50px;'></h2>";
echo "<p style='font-size:30px;'>html에서 form의 method의 default 값은 get이기 때문에 주의할 것</p>";
echo "<br>";
echo "<p style='font-size:30px;'>회원가입,로그인,상품구매 등등 대부분의 작업들은 POST 검색같은 것들은 get방식</p>";
echo "<p style='font-size:30px;'>autocomplete 자동완성기능 form, input</p>";

print_r($_POST);

echo "<br>";
echo "<hr>";
?>

제목 : <?php echo $_POST['subject']; ?> <br>
암호 : <?php echo $_POST['password']; ?> <br>
글내용 : <?php echo nl2br($_POST['content']); ?>

<!-- nl2br() 내장함수  개행이 되어있는걸 br로 변경-->
<!-- button default값 submit -->