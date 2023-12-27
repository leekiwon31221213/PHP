<!DOCTYPE html>
<html lang="ko">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>로그인폼</title>
</head>

<body>
    <h1>로그인</h1>
    <form action="44.2로그인확인.php" method="post" name="login_form" autocomplete="off">
        <label for="">아이디</label>
        <input type="text" name="id" id="id" placeholder="아이디">
        <br>
        <label for="">비밀번호</label>
        <input type="password" name="pw" id="pw" placeholder="비밀번호">
        <br>
        <button class='login_btn'>확인</button>
    </form>

    <a href="44.3회원전용페이지.php">회원전용 페이지</a>

    <script>
    document.addEventListener('DOMContentLoaded', () => {
        const id = document.querySelector('#id');
        const pw = document.querySelector('#pw');
        const btn = document.querySelector('.login_btn');
        btn.addEventListener('click', function(e) {
            e.preventDefault() //폼이 없을때 클릭이 안되게 막아줌

            if (id.value == '') {
                alert('아이디를 입력해주세요');
                id.focus(); //포커징이 아이디란으로
                return false //리턴을 안해주면 submit이 되어버림 return사용해서 if안에서 작동 멈추게
            }

            if (pw.value == '') {
                alert('비밀번호를 입력해주세요');
                pw.focus();
                return false //멈추게
            }

            document.login_form.submit() //  폼내용이 다 찼을때 폼이 전송
        });
    })
    </script>
</body>

</html>