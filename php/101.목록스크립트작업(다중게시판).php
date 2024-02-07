<?php
/* list.html  */
include './92.게시판DB연결.php';  //dbconfig.php
include './100.~페이지네이션함수.php'; //lib.php

/* 101강 다중게시판 추가 */
include './100.~다중게시판.php'; //config


/* 100강 목록 페이지네이션 */

//게시물 뿌려줄 갯수 
$limit = 5;

//게시물 페이징 갯수
$page_limit = 5;

//현재 페이지 위치
$page = (isset($_GET['page'])&& $_GET['page'] != '' && is_numeric($_GET['page']))? $_GET['page']: 1;

//시작값
$start = ($page - 1) * $limit;

//게시물 총 개수 현) 게시판이 하나짜리이지만 code로 분리해서 다중 게시판으로 만들어야함
//code='".$code."' 다중게시판 작업
$sql = "SELECT COUNT(*) cnt FROM m_board WHERE code='".$code."'";
$stmt = $conn->prepare($sql);
$stmt->setFetchMode(PDO::FETCH_ASSOC); 
$stmt->execute(); 
$row = $stmt->fetch(); 
$content_total = $row['cnt']; 


//99강 게시판 목록
//WHERE code='".$code."' 다중게시판 작업
$sql = " SELECT * FROM m_board WHERE code='".$code."' ORDER BY idx DESC LIMIT $start,$limit"; // 시작값, 가져올 갯수 //ORDER BY 출력순서  //최신게시물 DESC 
$stmt = $conn->prepare($sql); 
$stmt->setFetchMode(PDO::FETCH_ASSOC);
$stmt -> execute(); 
$rs = $stmt -> fetchAll(); 
//print_r($rs); 
//$rs값이 정상적으로 웹에 나타났다면 밑에 서 rs값을 출력해야함 
?>
<!DOCTYPE html>
<html lang="ko">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title><?= $board_title; ?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous" />

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous">
    </script>
</head>

<body>
    <div class="container mt-3">
        <h1 class="h1"><?= $board_title; ?></h1>
    </div>
    <div class="container mt-3">
        <table class="table table-bordered table-hover">
            <!-- 테이블 칸 크기 -->
            <colgroup>
                <col width="7%" />
                <col width="63%" />
                <col width="10%" />
                <col width="10%" />
                <col width="10%" />
            </colgroup>
            <!-- 테이블 헤드 -->
            <thead class="table-primary text-center">
                <tr>
                    <th>번호</th>
                    <th>제목</th>
                    <th>작성자</th>
                    <th>등록일</th>
                    <th>조회수</th>
                </tr>
            </thead>
            <!-- $rs값 출력 하는 자리 -->
            <?php 
        foreach($rs AS $row){
        ?>

            <!-- 본문 -->
            <tr class='view_detail' data-idx="<?= $row['idx'];?>" data-code="<?= $code ?>">
                <td class="text-center"><?= $row['idx']; ?></td>
                <td><?= $row['title']; ?></td>
                <td class=" text-center"><?= $row['name']; ?></td>
                <td class="text-center"><?= substr($row['rdate'],0,10,); ?></td>
                <td class="text-center"><?= $row['hit']; ?></td>
            </tr>
            <?php } ?>
        </table>
        <div class='mt-3 d-flex justify-content-between align-items-start'>
            <?php 
            //다중게시판을 $param으로 변수에 담아서 호출 
            //include './100.~페이지네이션함수.php'; 파일에도 $param을 추가해줘야함 
            //파라미터, page= 뒤 확인
    
            $param = '&code='. $code;
                $rs_str = pagination($content_total, $limit, $page_limit, $page, $param);
                
                echo $rs_str;
            ?>


            <button class="btn btn-primary write-btn">글쓰기</button>
        </div>
    </div>

    <script>
    const write_btn = document.querySelector('.write-btn');
    write_btn.addEventListener('click', () => {
        self.location.href = './96.1글쓰기ajax전송.html?code=<?= $code;?>';
    });

    const view_detail = document.querySelectorAll('.view_detail');
    view_detail.forEach((box) => {
        box.addEventListener('click', () => {
            self.location.href = './102,103.목록글보기.php?idx=' + box.dataset.idx + '&code=' + box.dataset
                .code;
        })
    })
    //(box) 각각 tr td영역
    //&앰퍼센드로 연결해줘야함
    </script>
</body>

</html>