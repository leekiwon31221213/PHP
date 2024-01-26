<!DOCTYPE html>
<html lang="ko">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>이미지 업로드</title>
</head>

<body>
    <?php include_once 'menu.html';?>


    <form method="post" name="upload_form" enctype="multipart/form-data" action="40.2gallery_upload_form_ok.php">
        <!-- enctype="multipart/form-data"은 파일이 포함된 폼을 전송할 때 사용. -->
        <!-- 폼데이터가 여러 부분으로 나뉘어 서버로 전송되는 것을 의미 -->

        이미지 업로드1 : <input type="file" name="photo">
        <!-- 이미지 업로드2 : <input type="file" name="photo2"> -->
        <button class="upload_btn">업로드 확인</button>
        <!-- 버튼은 기본적으로 폼을 보내는 속성이 있기에 js로 폼을 보내는 이벤트 제거해야함 -->

    </form>

    <script src="upload.js"></script>
</body>

</html>
<?php 
echo "<br>";
echo "<hr>";

echo "<h2 style='font-size:30px;'>파일 없이 업로드 할경우 print_r(_files)로 에러 번호 또는 사이즈로 체크해야함 </h2>";
echo "<p style='font-size:30px;'>백에서 처리 해줄 수 있지만 미리 프론트엔드에서 처리해주는게 낭비가 덜 함</p>";
?>