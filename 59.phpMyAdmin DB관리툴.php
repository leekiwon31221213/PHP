<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>phpMyAdmin DB관리툴</title>
</head>

<body>
    <h2>
        챕터1
        <ol>
            <li>XAMPP 기준 MYSQL 액션탭에서 admin 버튼 클릭</li>
            <li>DB생성은 NEW(왼쪽 패널) 클릭</li>
            <li>데이트베이스명에 입력 후 create</li>
            <li>club이라는 db가 생성</li>
            <li>회원 관리 테이블 생성 member creat 클릭</li>
            <li>첫번째 칸 idx(기본적으로 관리되는 key ) AI 는 자동으로 숫자가 증가 </li>
            <li>두번째 칸 id Type(VARCHAR)</li>
            <li>세번째 칸 name Type(VARCHAR)</li>
            <li>네번째 칸 rdate(가입일) Type(Date)</li>
            <li>저장 하면 테이블 생성 완료</li>
        </ol>
    </h2>

    <h2>
        챕터2
        <ol>
            <li>왼쪽 패널에서 member 클릭후 insert(삽입)클릭</li>
            <li>value 값을 채워야함 idx 벨류값은 공백 id(aaa) name(홍길동) data(now) 클릭</li>
            <li>빨간 색 배경의 창에 1열이 삽입 되었다 뜨면 browse(보기) 클릭</li>
            <li>입력한 데이터의 테이블 생성 완료</li>
        </ol>

        <p>rdate (가입일) 함수에 NOW는 오늘 가입일</p>
    </h2>

    <h2>
        챕터3 쿼리문을 통해 입력
        <ol>
            <li>상단 메뉴 SQL클릭</li>
            <li>INSERT into member (id,name, rdate) values('bbb','김영희',now());</li>
            <li>go 클릭 하면 테이블 추가</li>
        </ol>
        <br>
        <p>쿼리문을 통해 챕터2에서 만든 홍길동을 홍길순으로 수정 및 삭제</p>
        <ol>
            <li>update member SET name="홍길순" WHERE id='aaa'; 쿼리문으로 수정</li>
            <li>delete from member where name='홍길순'; 쿼리문으로 삭제</li>

        </ol>
    </h2>
</body>

</html>