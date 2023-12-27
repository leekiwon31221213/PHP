<!DOCTYPE html>
<html lang="ko">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>폼 입력을 통해 구구단 출력</title>
</head>

<body>
    <form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
        <label for="">출력하고자 하는 단을 입력
            <input type="text" name="dan" class="dan">
            <button class="dan_btn">구구단 출력</button>
        </label>
    </form>
    <?php 

    
// 만약  $_POST['dan']이 있는지 체크후 있다면 그리고(&&) $_POST['dna']이 != 비어있지 않다면
// 텍스트로 "구구단 출력을 해야함."
    if(isset($_POST['dan']) && $_POST['dan'] != ''){
        if(is_numeric($_POST['dan'])){
            //is_numeric 숫자인지 판별해주는 함수
            for($i = 1;  $i<=9; $i++){
                // echo "구구단 출력을 해야함.";
                echo $_POST['dan'] .'x'. $i . '=' . $_POST['dan'] * $i .'<br>';
            }
        } else{
            echo"숫자를 입력해야 구구단 출력이 가능합니다.";
        }
    }

    ?>

    <script>
    const submit_btn = document.querySelector('.dan_btn');

    submit_btn.addEventListener("click", (e) => ) {
        e.preventDefault();
        const dan = document.querySelector('.dan');
        if (dan.value == '') {
            alert('입력값이 비었습니다.');
        }
        consloe.log(dan)
    }
    </script>


</body>

</html>