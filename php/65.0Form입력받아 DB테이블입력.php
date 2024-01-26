<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form입력받아 DB테이블입력</title>
</head>

<body>
    <h2>Form입력받아 DB테이블입력

        <ol>
            <li>데이터베이스 생성</li>
            <li>테이블 생성</li>
            <li>폼 화면 작업</li>
            <li>
                <ol>
                    <li>DB 접속 모듈 작성</li>
                    <li>DB 등록 프로그래밍</li>
                </ol>
            </li>
        </ol>
    </h2>

    <br>
    <hr>

    <h2>데이터 베이스 생성 Query</h2>
    <h4>65.sql.txt확인할것</h4>
    <ul>
        <li>create database 데이터 베이스 이름 </li>
        <li>create table 테이블 이름(
            <br>idx integer unsigned not null auto_increment,
            <br>(게시물 번호(idx), 타입(integer unsigned) 음수는 사용 안함 , 필수 값이
            들어가야함(not null), auto_increment(자동으로 값이 들어갈때마다 증가함)<br>
            <br>
            <hr>

            subject varchar(255) default '' comment '게시물제목', <br>
            게시몰 제목을 작성(subject) 빈값으로라도 채우겠다(default '')<br>
            <br>
            <hr>
            content text comment '게시물내용', 텍스트 자료형은 6만5천535바이트 까지 넣을 수 있는 매우 큰 자료형

            <br>
            <hr>
            rdate datetime, 날짜 datetime(년,월,일,시,분,초) date(년,월,일)

            <br>
            <hr>

            primary key(idx) 필수적으로 하나는 지정해야함(대표 키)

            <br>)
        </li>

        <p>위에 내용을 실행하면 테이블이 생성이 됨</p>
    </ul>
    <br>
    <hr>

    <h2>DB관련 프로그램 실행 (위의 내용을 기반)</h2>
    <ul>
        <li>SQLyog 실행 데이터베이스 생성 database_create</li>
    </ul>
</body>

</html>