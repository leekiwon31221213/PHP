<?php 
echo "<h2 style='font-size:80px;'>File Upload 파일업로드</h2>";
echo "<p style='font-size:30px;'>35.upload_index.php에서 작업</p>";
echo "<p style='font-size:30px;'>파일 업로드는 upload.php에서 처리</p>";
echo "<br>";
echo "<hr>";

echo "<h2 style='font-size:80px;'>35.upload_index.php</h2>";
echo "<p style='font-size:50px; font-weight:bold;'>form 태그에서 꼭 있어야함 enctype='multipart/form-data'</p>";

echo "<br>";
echo "<hr>";

echo "<h2 style='font-size:80px;'>35.upload.php</h2>";
echo "<p style='font-size:50px; font-weight:bold;'>Array확인 할때는 vardump()보단 print_r()을 사용 조금 더 단순하게나옴'</p>";
echo "<p style='font-size:30px; font-weight:bold;'>
echo '파일명은'.&#36;_FILES['ufile']['name']; <br>
echo '이고,'; <br>
echo '파일 용량은'; <br>
echo &#36;_FILES['ufile']['size'].'입니다.';
</p>";

echo "<h2 style='font-size:50px;'>△사용 할 수 있는 위치에다 옮겨주는 작업 필요△</h2>";
echo "<p style='font-size:30px; font-weight:bold;'>tem_name이 실제적인 파일 -> 이걸 원하는 폴더로 옮겨주면 됨</p>";

echo "<br>";
echo "<hr>";
echo "<h2 style='font-size:50px;'>파일 업로드가 안될경우 웹서버 설정을 확인해야함</h2>";
echo "<p style='font-size:30px; font-weight:bold;'>php.ini</p>";

echo "<p style='font-size:30px; font-weight:bold;'>35.4phpinfo.php파일 확인 후 Loaded Configuration File 확인 <br>
file_uploads에 off라 되어있으면 파일 업로드가 되지 않음 <br>
upload_max_filesize는 파일 용량을 확인 할 수 있고 나와 있는 용량 그 이상으로는 파일 업로드가 안됨 <br>
upload_tmp_dir 파일이 업로드 되는 저장 경로 <br>
post_max_size는 post의 총 용량   post_max_size 용량 범위 내에서 파일 업로드 용량도 정해짐
post_max_size 적게 정해져 있으면 upload_max_filesize 용량을 늘려놔도 소용이 없음
</p>";

echo "<br>";
echo "<hr>";

echo "<h2 style='font-size:50px;'>php.ini 찾아 설정 해야함</h2>";
?>