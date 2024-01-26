<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Excel 파일업로드 후 DB 테이블에 insert 하는 방법</title>
</head>

<body>
    <h2>Excel 파일업로드 후 DB 테이블에 insert 하는 방법
        <p>Excel 데이터를 DB Table에 넣기</p>

        <ol>
            <li>Excel CSV 저장</li>
            <li>데이터 베이스 생성(skip 가능) -> 데이터 베이스가 있으면 스킵해도됨</li>
            <li>테이블 생성(skip 가능) -> 테이블가 있으면 스킵해도됨</li>
            <li>업로드 form 화면 구성</li>
            <li>처리 부분 코딩</li>
            <li>확인</li>
        </ol>
    </h2>

    <br>
    <hr>
    <h2>67.1CSV파일 Form 업로드셋팅
        <p>파일 업로드를 하는거기 때문에 form 태그에
            <br>
            method="post" enctype="multipart/form-data" 꼭 들어가야함
        </p>
    </h2>

    <br>
    <hr>

    <h2>fgetcsv(); csv파일 불러오는 함수
        <p>테이블 데이터가 많아지면 성능 이슈가 생기게 됨 <br>지금은while 문을 사용하여 하나씩 넣지만
            이것을 한번에 밀어 넣는 방법이 $conn-><strong>beginTransaction(); <br>

                while 문 밖에 $conn->commit(); 사용
            </strong>
        </p>
    </h2>

    <br>
    <hr>

    <h2>테이블 데이터 지우는 법

        <p>TRUNCATE TABLE 테이블명</p>
    </h2>


</body>

</html>