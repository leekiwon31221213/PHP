<?php
/*강의 view.html */
include './92.게시판DB연결.php';  //dbconfig.php
include './100.~다중게시판.php'; //config



/* 게시물 조회 할려면 그 게시물의 idx값을 체크를 해서 쿼리를 해야함 */
$idx = (isset($_GET['idx']) && $_GET['idx'] != '' && is_numeric($_GET['idx'])) ? $_GET['idx'] :'';

if($idx == ''){
    die('비정상적인 접근을 허용하지 않습니다.');
    //die()는 에코와 exit를 합쳐 놓은거
}


/* 히트 조회수  */
$sql = "UPDATE m_board SET hit=hit+1 WHERE idx=:idx";
$stmt = $conn->prepare($sql); 
$stmt->bindParam(':idx',$idx); 
$stmt->execute(); 

/* 쿼리 */ 
$sql = " SELECT * FROM m_board WHERE idx = :idx"; 
$stmt = $conn->prepare($sql); 
$stmt->bindParam(':idx',$idx); 
$stmt->setFetchMode(PDO::FETCH_ASSOC);
$stmt->execute(); 
/*값을 받아옴 */ 
$row = $stmt->fetch(); 
?>

<!DOCTYPE html>
<html lang="ko">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title><?= $board_title ?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous" />

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous">
    </script>
    <style>
    body {}

    ul,
    li {
        list-style: none;
        padding: 0;
        margin: 0;
    }
    </style>
</head>

<body>
    <div class="container mt-3 w-50">
        <h1 class="h1"><?= $board_title ?></h1>
    </div>
    <div class="container border border-1 w-50 vstack">
        <div>
            <!-- 제목 -->
            <h3><?= $row['title']; ?></h3>
        </div>

        <div>
            <!-- 이름, 조회수,글작성 날짜 -->
            <ul class="d-flex border border-top-0 border-start-0 border-end-0 border-bottom-1">
                <li><?= $row['name']; ?></li>
                <li class="ms-5 me-auto"><?= $row['hit']; ?>회</li>
                <li><?= $row['rdate']; ?></li>
            </ul>
        </div>

        <div>
            내용 :
            <?= $row['content']; ?>
        </div>

        <!-- 103강  -->
        <div class="d-flex gap-2">
            <button class="btn btn-secondary btn_list">목록</button>
            <button class="btn btn-primary ms-auto btn_edit" data-bs-toggle="modal" data-bs-target=".modal">수정</button>
            <button class="btn btn-danger btn_delete" data-bs-toggle="modal" data-bs-target=".modal">삭제</button>
        </div>
    </div>

    <div class="modal" tabindex="-1">
        <div class="modal-dialog">
            <!-- 강의 액션 process.php -->
            <form action="./104.수정삭제판별로직.php" method="POST" name="modal_form" class="modal_form">
                <input type="hidden" name="mode" /><!-- 수정인지 삭제인지 구분하는 구분키가 됨 -->
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">수정</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <input type="password" name="modal_pw" class="modal_pw" placeholder="비밀번호 입력해주세요" />
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">닫기</button>
                        <button type="button" class="btn btn-primary modal_password_chk">확인</button>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <script>
    const params = new URLSearchParams(window.location.search);
    /* 목록 */
    const list_btn = document.querySelector('.btn_list');
    list_btn.addEventListener('click', function() {
        self.location.href = './101.목록스크립트작업(다중게시판).php?code=' + params.get('code');
    });

    /* 103강 스크립트 작업  */

    /* 수정 */
    const edit_btn = document.querySelector('.btn_edit');

    edit_btn.addEventListener('click', function() {
        const modal_title = document.querySelector('.modal-title');
        modal_title.textContent = '수정하기';

        document.modal_form.mode.value = 'edit';
    });
    /* 삭제 */

    const delete_btn = document.querySelector('.btn_delete');

    delete_btn.addEventListener('click', function() {
        const modal_title = document.querySelector('.modal-title');
        modal_title.textContent = '삭제하기';

        document.modal_form.mode.value = 'delete';
    });

    /* 모달창 확인 버튼에 대한 스크립트 */
    const btn_password_chk = document.querySelector('.modal_password_chk');
    btn_password_chk.addEventListener('click', function() {

        const modal_password = document.querySelector('.modal_pw');

        if (modal_password.value == '') {
            alert('비밀번호를 입력해주세요');
            modal_password.focus();
            return false;
        }

        // 비밀번호를 체크하고 값을 넘겨야함(필요:비밀번호, code, 게시물번호 등)

        //console.log(params.get('idx')); idx값이 출력이 되는지 확인을 해야함

        /* ajax 시작 */
        const xhr = new XMLHttpRequest();
        /*  AJAX의 동기 방식과 비동기 방식
        AJAX는 웹페이지를 갱신하기 위해 전체 페이지를 다시 로드하지 않고도 서버로부터 데이터를 받아올 수 있는 기술
        동기 - AJAX에서 동기는 서버에 요청을 보내고, 그 응답이 올 때까지 기다려야함 (false)
        비동기 - 서버에 요청을 보내고, 응답을 기다리는 동안에도 다른 일을 계속할 수 있음 (true)
        */

        /* 강의 process.php */
        xhr.open("POST", "./104.수정삭제판별로직.php", 'true');
        const f1 = new FormData(document.modal_form);
        f1.append('idx', params.get('idx'));
        f1.append('code', params.get('code'));
        // f1.append('mode', 'edit');
        xhr.send(f1);
        xhr.onload = () => {
            if (xhr.status == 200) {
                // alert('통신성공');
                const data = JSON.parse(xhr.responseText);
                if (data.result == 'edit_success') {
                    /* 강의 edit.html */
                    self.location.href =
                        './101,103,104.수정폼받는곳.html?idx=' + params.get('idx') + '&code=' + params.get('code')
                } else if (data.result == 'delete_success') {
                    alert('삭제 되었습니다.');
                    /* 강의 list.html */
                    self.location.href = './101.목록스크립트작업(다중게시판).php?code=' + params.get('code');
                } else if (data.result == 'wrong_password') {
                    alert('비밀번호가 틀렸습니다.')
                    modal_password.value = '';
                    modal_password.focus();
                }

            } else {
                alert("통신오류");
            }
        }
    });
    </script>
</body>

</html>