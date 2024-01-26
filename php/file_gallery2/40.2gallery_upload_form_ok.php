<?php

include_once 'menu.html';

print_r($_FILES);  //넘어온 파일 확인

$file_name = $_FILES['photo']['name'];
$array = explode ('.', $file_name); //.을 기준으로 쪼갠다 //$array = ['aaa','jpg'];
$ext = end($array); //jpg를 가져옴

if($ext == 'jpg'|| $ext == 'JPG' || $ext == 'png'|| $ext == 'PNG'){
    copy($_FILES['photo']['tmp_name'],"./upload/".$_FILES['photo']['name']);

echo "
<script> 
alert('정상적으로 업로드 되었습니다.');
self.location.href='./40.3gallery_list.php';
</script>
";
} else{
    echo "이미지 포맷 (png, jpg)만 업로드 가능합니다.";
}

echo "<br>";
echo "<hr>";

echo "<h2 style='font-size:50px;'>파일 없이 업로드 할경우 print_r(_files)로 에러 번호 또는 사이즈로 체크해야함 /h2>";
echo "<p style='font-size:50px;'>백에서 처리 해줄 수 있지만 미리 프론트엔드에서 처리해주는게 낭비가 덜 함/p>";
if($_FILES['photo']['name']==''){
    echo "
<script> 
alert('파일을 선택하지 않으셨습니다.');
self.location.href='./gallery_upload_form.php';
</script>
";
exit;
}

?>