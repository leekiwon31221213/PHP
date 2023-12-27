<?php
print_r($_FILES);

//파일 이름 찍어보기
// echo "파일명은".$_FILES['ufile']['name'];
// echo "이고,";
// echo "파일 용량은";
// echo $_FILES['ufile']['size'].'입니다.';
$tfile = './3upload/abc.png';
move_uploaded_file($_FILES['ufile']['tmp_name'],$tfile);

// tfile은 업로드 폴더 

?>