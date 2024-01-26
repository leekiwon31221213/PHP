<?php 
echo "<h2 style='font-size:70px;'>파일의 절대위치를 감출때 유용한 readfile 함수</h2>";
echo "<p style='font-size:30px;'>readfile()파일을 읽어와서 출력하는 함수</p>";
echo "<p style='font-size:30px;'>2번 html 파일</p>";
echo "<p style='font-size:30px;'>3번 파일 사이즈 수정 및 파일 출력하기</p>";

// readfile('36.2a.html');
// readfile('24.form(폼)다루기.php');

echo "<br>";
echo "<hr>";
echo "<h2 style='font-size:50px;'>멤버인 경우에 다운로드</h2>";
echo "<p style='font-size:30px;'>// 멤버인 경우에 다운로드   <br> <br>
&#36;is_member = true;
if(&#36;is_member ===true){  <br>
<br>//헤더 설정   <br>
header('Content-Type: application/octet-stream'); <br>
header('Content-Disposition: attachment; filename=&#36;filename'); //다운로드 되는 파일 이름 지정 <br>
header('Content-Transfer-Encoding: binary'); <br>
header('Content-Length: &#36;filesize'); //파일 사이즈 명시 <br>
<br>
ob_clean(); <br>
flush(); //버퍼 비우기 <br>
readfile(&#36;filepath); //파일 읽어서 출력하기<br>  <br>
    }<br>else{
        <br>  echo '회원만 다운로드 가능합니다.'; <br>
    }</p>";

?>