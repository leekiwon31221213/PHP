<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP MySQL Prepared Statements</title>
</head>

<body>
    <h2>Mysql PDO, Prepared 로 SQL 인젝션 공격을 막을 수 있음
        <ol>
            <li>Query 구문 분석을 1회만 수행</li>
            <li>매개 변수만 전달하기 때문에 서버 대역폭 최소화</li>
            <li>SQL Injection 공격을 막아줌</li>
        </ol>

        <p>인젝션은 공격자가 신뢰할 수 없는 입력을 프로그램에 주입하도록 하는 공격을 의미 <br>
            이를 통해 해당 프로그램의 실행 과정의 변경을 유도하거나 공격자의 변경 질의를 통해 결과값을 다르게 나오도록 할 수 있음 </p>
        <p>DESC 테이블명; 테이블의 구조보는 명령어</p>
    </h2>

    <br>
    <hr>
    <h2>prepare()을 사용하지 않으면?
        <p>쿼리구문이 전체적으로 다 한번씩 서버에 전송이 되고 <br>
            매번 해당 구문이 mySQL에서 해석을 해서 처리가됨</p>
    </h2>

    <h2>prepare()을 사용하면?
        <p>한번 구문을 해석을 하고 바인딩만 하면 매개변수만 전송하면 계속 처리가됨</p>
    </h2>
</body>

</html>