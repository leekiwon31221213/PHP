<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1 style="font-size:50px;">필터를 사용해야하는 이유</h1>
    <p style="font-size:30px;">외부로 부터 들어오는 데이터에 <br> 잘못된 내용이 있으면 보안 문제가 발생하고 <br>웹페이지가
        손상될 수 있기 때문에 항상 외부로 들어오는 데이터에 대해서 검증을 해야함</p>
    <p style="font-size:30px;">이메일이 검증할때 많이 사용됨</p>

    <br>
    <hr>

    <h2>검색 필터의 종류</h2>
    <p style="font-size:30px;">FILTER_VALIDATE_INT 정수필터</p>
    <p style="font-size:30px;">FILTER_VALIDATE_FLOAT 실수필터</p>
    <p style="font-size:30px;">FILTER_VALIDATE_IP IP필터</p>
    <p style="font-size:30px;">FILTER_VALIDATE_EMAIL 이메일 필터</p>
    <p style="font-size:30px;">FILTER_VALIDATE_URL URL 필터 <br>
        https:// 부분은 URL 필터 대상에서 제외된다</p>
    <p style="font-size:30px;">FILTER_FLAG_QUERY_REQUIRED 쿼리스트링 필터 <br>
        http://daum.net/?key='쇼핑몰'; ?key='쇼핑몰'해당부분이 쿼리스트링
    </p>
    <p style="font-size:30px;">filter_var (변수,검증 필터의 종류)</p>

    <br>
    <hr>
    <h2>필터의 고급기능</h2>


</body>

</html>