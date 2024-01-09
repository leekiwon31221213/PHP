<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>아이디 중복체크 AJAX</title>
</head>

<body>
    <h2>아이디 중복체크 AJAX 준비 재료
        <ol>
            <li>사용할 db table 생성 - member, insert</li>
            <li>아이디 중복 체크 페이지 작성 html, js, ajax</li>
            <li>아이디 중복 처리 php 모듈 작성</li>
        </ol>
    </h2>
    <br>
    <hr>
    <h2>아이디 중복체크 테이블 세팅 값 (sqlyog 사용)</h2>
    <ol>
        <li>
            CREATE TABLE MEMBER(
            <br>idx INTEGER UNSIGNED NOT NULL AUTO_INCREMENT,
            <br>user_id VARCHAR(50) DEFAULT '' ,
            <br>user_pw VARCHAR(30) DEFAULT '' ,
            <br>rdate DATETIME,
            <br>PRIMARY KEY (idx)
            <br> );
        </li>
        <li>INSERT INTO `member` (user_id, rdate) VALUES
            ('kiwon',NOW());</li>

        <li>SELECT *FROM `member`; 테이블에 데이터 들어갔는지 확인</li>
    </ol>

</body>

</html>