<?php

require '83.ToDoListdb.php';

// 정렬순서 order by idx desc 최근 등록한것들이 위쪽이 나오게하겠다
$sql = "SELECT * FROM todolist order by idx desc";
$stmt = $conn->prepare($sql);
$stmt->setFetchMode(PDO::FETCH_ASSOC); //필드명 순으로
$stmt->execute();
$rs = $stmt->fetchALL(); //목록 전체가 나옴
// print_r($rs);
// exit;
?>

<!DOCTYPE html>
<html lang="ko">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>할일 관리</title>
</head>

<body>
    <form name="todoform" action="83.2ToDoList_ok.php" autocomplete="off" method="post">
        <input type="hidden" name='mode' value='input'>
        할일 : <input type="text" name="subject" id="subject">
        <input type="button" class='btn' value="등록">
    </form>

    <table border="1" width="600px">
        <?php 
        foreach($rs AS $row){
            // print_r($row)
            if($row['status']==1){
                $class = "style='background-color:royalblue; color:#fff;'";
                $btn ="<button onclick='todoUnCheck(".$row['idx'].")'>취소</button>";
            }else{
                $class =""; 
                $btn = "<button onclick='todoCheck(".$row['idx'].")'>확인</button>";
            }
            echo"
            <tr>
                <td $class>".$row['subject']."</td>
                <td>".$btn."</td>
                <td><button onclick='todoDel(".$row['idx'].")'>삭제</button></td>
            </tr>
            ";
            /* 
            꼭 확인하기
            onclick='check("몇번째 확인버튼인지 알아야하기에 idx값이 필요")'
            페이지 소스 보기를 눌렀을때 check() idx값이 들어간걸 확인 할 수 있음 */
        }
        ?>
    </table>

    <!-- ajax가 아닌 옛날방식인 폼사용해서 보내기 -->
    <!-- 공용폼으로 사용 -->
    <form method="POST" id='multiform' action='83.2ToDoList_ok.php'>
        <input type="hidden" name='idx' value=''>
        <input type="hidden" name='mode'>
    </form>



    <h2>공용폼으로 사용 폼을 보면 액션이 똑같은걸 볼 수 있음
        이럴 경우 83.ToDoList_ok.php에서 보는거와 같이 if문을 사용하여 모드를 체크하고 모드에 따라 폼 사용이 변경됨
    </h2>
    <script>
    const btn = document.querySelector('.btn');

    btn.addEventListener('click', () => {
        const subject = document.querySelector('#subject');
        if (subject.value == '') {
            alert('할일을 입력해주세요');
            subject.focus();
            return false;
        }
        document.todoform.submit();
    });


    function todoCheck(idx) {
        const multiform = document.querySelector('#multiform');
        multiform.mode.value = 'done';
        multiform.idx.value = idx;
        multiform.submit();
    }

    function todoUnCheck(idx) {
        const multiform = document.querySelector('#multiform');
        multiform.mode.value = 'undone';
        multiform.idx.value = idx;
        multiform.submit();
    }

    function todoDel(idx) {
        if (confirm('삭제하시겠습니까?')) {
            const multiform = document.querySelector('#multiform');
            multiform.mode.value = 'del';
            multiform.idx.value = idx;
            multiform.submit();
        }
    }
    </script>
</body>

</html>