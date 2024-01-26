<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DB설정</title>
</head>

<body>
    <ol> SQLyog 셋팅법
        <li>CREATE DATABASE 데이타베이스 이름;</li>
        <li>CREATE TABLE 테이블 이름( <br>
            <!-- 게시판 번호 --> idx int unsigned not null auto_increment,<br>
            <!-- 게시판이 여러개 생길걸 대비해서 게시판 코드를 넣어 진행 --> code varchar(20) default '', <br>
            <!-- 게시판 제목 --> title varchar(255) DEFAULT '',<br>
            <!-- 작성자 --> name varchar(100) DEFAULT '',<br>
            <!-- 본문 --> content mediumtext, <br>
            <!-- 게시물 조회수 --> hit int default 0, <br>
            <!-- 글 등록 날짜 --> rdate DATETIME, <br>
            <!-- 글쓴이 ip 저장 --> ip VARCHAR(100),<br>
            primary key (idx) <br>
            );
        </li>
    </ol>


    <br>
    <hr>

    <ol> 테이블 관련한 함수
        <li>SHOW tables (테이블 리스트 전체보기)</li>
        <li>desc 테이블명 (테이블 구조보기)</li>
        <li>ALTER TABLE 테이블명 ADD COLUMN 추가할테이블명 varchar(255) (필드 추가) default '' <br>
            특정한 테이블 위치에 넣고 싶을 경우 AFTER 밑에 넣을 테이블명 <br>
            예시: ALTER TABLE m_board ADD COLUMN imgList VARCHAR(255) DEFAULT '' AFTER content;
        </li>
    </ol>


    <h1>default '' 값이 비어있는 상태로 하겠다는 의미</h1>
</body>

</html>