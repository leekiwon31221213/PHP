<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>lastInsertId() 마지막key값알아내기</title>
</head>

<body>
    <h2>마지막 등록된 글의 key 활용하기
        <ol>
            <li>DB 생성 ( 되어 있으면 skip )</li>
            <li>Table 생성 ( 되어 있으면 skip )</li>
            <li>Insert Into</li>
            <li>해당 글 보여주기</li>
        </ol>
        <p>SHOW DATABASES; 해당 서버에 만들어진 DB 다 보여짐</p>
        <p>SHOW TABLES; 해당 DB에 만들어진 테이블 확인
            <br>
            DESC 게시판이름; 하면 테이블의 구조를 확인 할 수 있음
        </p>

        <p>idx는 게시판 번호라 생각하면됨 auto_increment 게시판이 증가하면 번호가 자동적으로 1씩 증가</p>

        <p>alter table '테이블명' add column 필드명 타입 default ''; 필드 추가</p>
        <p>alter table '테이블명' DROP column 필드명; 필드 삭제</p>
    </h2>

    <br>
    <hr>

    <h2>input 폼
        <ol>
            <li> 66.2번 input에 폼을 입력하면 66.3번 inputOK에서 받음</li>
            <li></li>
        </ol>
    </h2>


</body>

</html>