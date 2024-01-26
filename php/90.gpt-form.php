<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>ChatGPT Form</title>
</head>

<body>
    <form action="90.gpt-run.php" method="post" target="result">
        <div>
            <div><label for="prompt">질문을 입력해주세요</label></div>
            <textarea id="prompt" name="prompt" cols="40" rows="3" required></textarea>
        </div>
        <div>
            <input type="submit" value="Submit">
        </div>
    </form>
    <!-- 결과는 iframe 처리 -->
    <iframe frameborder="0" style="width:400px; height:400px;" name='result'></iframe>
    <script>

    </script>
</body>

</html>