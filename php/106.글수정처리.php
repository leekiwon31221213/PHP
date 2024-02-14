<!-- 강의 edit.html -->

<!-- 104.수정삭제판별로직에서 비밀번호가 맞으면 세션을 생성을 시켜 
edit_idx에 $idx(게시글 번호)를 담아 해당 게시글만 수정이 가능하도록 
결론: 엉뚱한 게시글을 수정 못하게 체크가 필요함

else if($mode == 'edit'){
        session_start();
        $_SESSION['edit_idx'] = $idx; //edit_idx에 idx를 넣어 이 게시글은 수정이 가능하다는걸 세션에 담아 비교 
        $arr =['result' => 'edit_success'];
-->

<!-- 글수정폼에서  아래 코드들 확인 할 것 
    value="<?= $row['title'] ?>" 
    value="<?= $row['name'] ?>"


    썸머노트에서
    get & set Code 부분에서 아래 코드 카피

    var markupStr = 'hello world';
    $('#summernote').summernote('code', markupStr);

-->

<?php
session_start();
/* $edit_idx 셋팅이 되어 있는지 체크 */
$edit_idx =(isset($_SESSION['edit_idx']) && $_SESSION['edit_idx'] != '' && is_numeric($_SESSION['edit_idx'])) ? $_SESSION['edit_idx'] : '' ;


/* $idx 셋팅이 되어 있는지 체크 */
$idx = (isset($_GET['idx']) && $_GET['idx'] != '' && is_numeric($_GET['idx'])) ? $_GET['idx'] : '';

/* $idx 값은 비어있으면 안됨(중요) */
if($idx == ''){
    /* die("<script>alert('게시물 번호가 없습니다.'); history.go(-1); </script>"); */
}


if($edit_idx != $idx){
    /* die("<script>alert('수정권한이 없는 게시물입니다.'); history.go(-1); </script>"); */
}

require './92.게시판DB연결.php';  //dbconfig.php
include './100.~다중게시판.php'; //config

$sql = 'SELECT * FROM m_board WHERE idx=:idx';
$stmt = $conn->prepare($sql);
$stmt->bindParam(':idx', $idx);
$stmt->setFetchMode(PDO::FETCH_ASSOC);
$stmt->execute();
$row = $stmt->fetch();

//print_r($row);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title><?= $board_title ?> 글수정</title>

    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
        integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous">
    </script>
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" />
</head>

<body>
    <div class="container">
        <h2>글 수정</h2>

        <br />
        <br />


        <!-- 제목 -->
        <div>
            <input type="text" name="title" value="<?= $row['title'] ?>" placeholder="제목"
                class="form-control mb-2 w-25 title-input" />
        </div>
        <!-- 본문 -->
        <div id="summernote"></div>

        <div class="mb-2 d-flex gap-2" style="flex-direction: column; margin-top: 50px">
            <!-- 작성자 -->
            <label for="name" class="d-flex">작성자
                <input type="text" name="name" value="<?= $row['name'] ?>" placeholder="작성자" id="name"
                    class="form-control w-25 mb-3 name-input" />
            </label>

            <!-- 패스워드 -->
            <label for="password" class="d-flex">비밀번호<input type="password" name="pw" placeholder="비밀번호" id="password"
                    class="form-control w-25 password-input" /></label>
        </div>

        <div class="btn-box mt-3">
            <button class="btn btn-secondary btn-list">목록</button>
            <button class="btn btn-primary btn-submit">등록</button>
        </div>
        <h3>status 값이 405가 나올떄에는 method 방식이 잘못된거니 참고</h3>
        <p>
            GET방식은 URL에 데이터를 붙여서 보내는 반면, POST방식은 URL에 붙여서 보내지 않고BODY에다가 데이터를 넣어서
            보낸다.
        </p>
    </div>

    <!-- 105강 -->
    <!-- 수정을 하기 위해서는 idx 값이 필요함  두가지 방법으로 글 수정을 할 수 있음
    console.log(LinkCode);찍어보고 -> ['idx', '33', 'code', 'freeboard']-->

    <!-- 첫번째 방법 form태그 -->
    <!-- 주의할점 써머노트는 폼을 사용해서 보내는게 아니기 때문에 아래 스크립트에서 idx를 append해줘야함 
      form1.append('idx',param['idx']);
    -->
    <form action="">
        <input type="hidden" idx="<?= $idx ?>">
    </form>

    <!-- 106강 -->
    <script>
    /* form1.append('code', code);에 대한 코드 */
    const LinkCode = window.location.search.replace('?', '').split(
        /[=?&]/); //.replace('?', '') '?'앞에 A값을 , ''B값으로 바꾸고 .split([=?&])?& 잘라버린다
    //console.log(LinkCode); ?code=notice&b=dddd 로 값이 넘어온다 가정했을떄 변수 LinkCode에 추가적인 핸들링이 가능함
    console.log(LinkCode);
    let param = {};
    //?code=notice&b=dddd 의 형태가
    //.replace('?', '').split(/[=?&]/); 로 인해  ['code', 'notice', 'b', 'dddd'] 형태로 변경되고

    for (let i = 0; i < LinkCode.length; i++) {
        param[LinkCode[i]] = LinkCode[++i]; //param[LinkCode[0]] -> param[LinkCode[code]]
    }
    const code = param['code'];

    const btn_list = document.querySelector('.btn-list');
    btn_list.addEventListener('click', function() {
        self.location.href = './101.목록스크립트작업(다중게시판).php?code=' + code;
    });
    </script>


    <script>
    const SubMitBtn = document.querySelector('.btn-submit');
    SubMitBtn.addEventListener('click', function(e) {
        e.preventDefault;
        const TitleInput = document.querySelector('.title-input');
        const NameInput = document.querySelector('.name-input');
        const PassWordInput = document.querySelector('.password-input');
        if (TitleInput.value == '') {
            alert('제목을 입력해 주세요');
            TitleInput.focus();
            /* return false;를 하는이유는 등록 버튼을 클릭했을때 서브밋되는걸 방지 해주기 위함 */
            return false;
        } else if (NameInput.value == '') {
            alert('작성자 입력해 주세요');
            NameInput.focus();
            return false;
        }

        /* 글 수정부분에서는 비밀번호를 체크할 필요가 없음
          else if (PassWordInput.value == '') {
          alert('비밀번호를 입력해 주세요');
          PassWordInput.focus();
          return false;
        } */


        //썸머 노트는 썸머노트만의 독특한 접근 방식이 있다
        const markupStr = $('#summernote').summernote('code');
        //써머 노트 에디터 기능중 코드 뷰 본후 텍스트가 어떤식으로 보내지는지 확인을 하고 아래 문법을 작성해야함
        // console.log(markupStr);
        if (markupStr == '<p><br></p>') {
            alert('내용을 입력하세요');
            return false;
        }



        /* 폼작성이 끝났을 경우 폼을 전송해야함  */
        const form1 = new FormData();

        form1.append('name', NameInput.value);
        form1.append('pw', PassWordInput.value);
        form1.append('title', TitleInput.value);
        form1.append('content', markupStr);
        form1.append('code', code);
        form1.append('idx', param['idx']);
        /* form1.append('code', '<?= $code ?>'); <<방식도 있고 */

        const xhr = new XMLHttpRequest();

        xhr.open('POST', './101,103,104.수정폼받는곳.php', 'true');
        xhr.send(form1);
        SubMitBtn.disabled = true;
        xhr.onload = () => {
            if (xhr.status == 200) {
                // alert('통신성공'); 통신이 되었는지 체크
                // alert('글이 성공적으로 등록 되었습니다.');
                const data = JSON.parse(xhr.responseText);
                if (data.result == 'success') {
                    alert('글이 성공적으로 수정 되었습니다.');
                    self.location.href = './101.목록스크립트작업(다중게시판).php?code=' + code;
                } else {
                    alert('글 수정이 실패했습니다.');
                }
            } else {
                alert('통신에 실패했습니다');
            }
        };
    });
    </script>

    <script>
    /* 써머리 폼  */
    $('#summernote').summernote({
        placeholder: '플레이스 홀더',
        tabsize: 2,
        width: 500 /* 게시판 가로값 */ ,
        height: 200 /* 게시판 세로값 */ ,
        toolbar: [
            ['style', ['style']],
            ['font', ['bold', 'underline', 'clear']],
            ['color', ['color']],
            ['para', ['ul', 'ol', 'paragraph']],
            //   ['table', ['table']],
            //   ['insert', ['link', 'picture', 'video']],
            ['insert', ['picture']],
            ['view', ['codeview']],
            //   ['view', ['fullscreen', 'codeview', 'help']],
        ],
    });

    /* 지금 은 이미지 파일이 안들어가서 더블 쿼트가 문제가 없지만
    이미지 첨부를 했을경우 더블코트가 중복 될 수 있기에 백틱을 사용하는게 좋음 */
    const markupStr = `<?= $row['content'] ?>`;
    $('#summernote').summernote('code', markupStr);
    </script>
</body>

</html>