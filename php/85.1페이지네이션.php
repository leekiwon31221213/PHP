<?php 

$content_total = 312; //게시물의 총 갯수

$limit = 10; //한 화면에 출력되는 갯수 첫번째 페이지 0~9, 두번째 페이지10~19

//출력 페이지수 << 1 2 3 4 5 >>
$page_limit =5;
$data = range(1, $content_total); //게시물

$page = isset($_GET['page']) && $_GET['page'] != '' && is_numeric($_GET['page'])? $_GET['page'] : 1 ;

//게시물 출력시 몇번째 부터 출력할건지에 대한 내용
$start = ($page - 1) * $limit;


// data 출력
for($i=$start; $i < ($start + $limit); $i++){
    if(isset($data[$i])){
        echo $data[$i]. "번 게시글 <br>";
    }
}

//총 페이지수

# 만약 101페이지 같은 경우 소숫점이 따라 오기때문에 반올림 해줘야함 ceil() 
$total_page = ceil($content_total/$limit);


#첫번째 페이지
echo "<a href='85.1페이지네이션.php?page=1'>첫번째 페이지</a>";



//스타트 페이지 
$start_page = ((floor(($page - 1) / $page_limit)) * $page_limit) + 1;

#이전 페이지
$prev_page = $start_page -1;
if($prev_page > 1 ){
    echo "<a href='85.1페이지네이션.php?page=".$prev_page."'>  이전 페이지 버튼  </a>";
}

//1페이지 일때 1(스타트페이지)~5
//2페이지 일때 1~5
//3페이지 일때 1~5
//4페이지 일때 1~5
//5페이지 일때 1~5
//6페이지 일때 6(스타트페이지)~10
//7페이지 일때 6~10
//8페이지 일때 6~10
//9페이지 일때 6~10
//10페이지 일때 6~10


/* 스타트 페이지를 알아야함  
스타트 페이지 + $page_limit -> $total_page만 넘지 않으면 됨
*/

//엔드 페이지
$end_page = $start_page + $page_limit -1;
if($end_page > $total_page){
    $end_page = $total_page;
}

for($i=$start_page; $i <= $end_page; $i++){
    if($page == $i){
    echo $i.' ';
}else{
    echo "<a href='85.1페이지네이션.php?page=" .$i. "'>" .$i. "</a> ";
}
}

#이전 페이지
$next_page = $end_page + 1;
if($next_page <= $total_page ){
    echo "<a href='85.1페이지네이션.php?page=" .$next_page. "'>  다음 페이지 버튼  </a> ";
}

#마지막 페이지
echo "<a href='85.1페이지네이션.php?page=".$total_page."'>마지막 페이지</a>";