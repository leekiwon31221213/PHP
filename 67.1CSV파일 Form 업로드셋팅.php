<!DOCTYPE html>
<html lang="ko">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>67.1CSV파일 업로드셋팅</title>
</head>

<body>
    <form method="post" name="upload_form" enctype="multipart/form-data" action="67.2CSV파일 업로드OK.php">
        <label for="">CSV 파일을 업로드 해주세요.</label> <br>
        <input type="file" name="csv" class="file-input">
        <button class="file-btn">파일등록</button>
    </form>
    <!-- 파일을 선택 안했을때 방지 -->
    <script>
    const btn = document.querySelector('.file-btn');

    btn.addEventListener('click', function(e) {
        e.preventDefault();
        const csv_input = document.querySelector('.file-input');
        if (csv_input.value == '') {
            alert('파일을 등록해 주세요.');
            return false;
        }

        document.upload_form.submit();
    });
    </script>
</body>

</html>