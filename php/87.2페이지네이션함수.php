<?php

//$content_total - 게시물의 총갯수
//$limit - 한 화면에 출력되는 갯수 첫번째 페이지 0~9, 두번째 페이지 10~19
//$page_limit - 출력 페이지 수
//$page - 현재 페이지
function pagination($content_total,$limit,$page_limit,$page){
$content_total = 312; //게시물의 총 갯수

$limit = 10; //한 화면에 출력되는 갯수 첫번째 페이지 0~9, 두번째 페이지10~19

//출력 페이지수 << 1 2 3 4 5>>
  $page_limit =5;
  

    /* 2강 부터는 해당 부분은 받아서 처리하기 때문에 필요가 없음
    $page = isset($_GET['page']) && $_GET['page'] != '' && is_numeric($_GET['page'])? $_GET['page'] : 1 ; */

    




    //총 페이지수

    # 만약 101페이지 같은 경우 소숫점이 따라 오기때문에 반올림 해줘야함 ceil()
    $total_page = ceil($content_total / $limit);


/* <nav aria-label="Page navigation example">
  <ul class="pagination justify-content-center">
    <li class="page-item disabled">
      <a class="page-link">Previous</a>
    </li>
    <li class="page-item"><a class="page-link" href="#">1</a></li>
    <li class="page-item"><a class="page-link" href="#">2</a></li>
    <li class="page-item"><a class="page-link" href="#">3</a></li>
    <li class="page-item">
      <a class="page-link" href="#">Next</a>
    </li>
  </ul>
</nav> */


$rs_str= '<nav>
<ul class="pagination">';


  #첫번째 페이지
  $rs_str .= '<li class="page-item"><a class="page-link" href="'.$_SERVER['PHP_SELF'].'?page=1">첫번째 페이지</a></li>';

    //스타트 페이지
    $start_page = ((floor(($page - 1) / $page_limit)) * $page_limit) + 1;

    #이전 페이지
    $prev_page = $start_page -1;
    if($prev_page > 1 ){
    $rs_str .= '<li class="page-item"><a class="page-link" href="'.$_SERVER['PHP_SELF'].'?page='.$prev_page.'">이전 페이지</a></li>';
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
        if($page==$i){ 
            
            $rs_str.= '<li class="page-item active" aria-current="page"><a class="page-link" href="#">'.$i.'</a></li>';
}else{
    
    $rs_str.= '<li class="page-item"><a class="page-link" href="'.$_SERVER['PHP_SELF'].'?page='.$i.'">'.$i.'</a></li>';
}
}

#이전 페이지
$next_page = $end_page + 1;
if($next_page <= $total_page ){
  $rs_str .= '<li class="page-item"><a class="page-link" href="'.$_SERVER['PHP_SELF'].'?page='.$next_page.'">다음 페이지</a></li>';
}

#마지막 페이지
$rs_str .= '<li class="page-item"><a class="page-link" href="'.$_SERVER['PHP_SELF'].'?page='.$total_page.'">마지막 페이지</a></li>';


$rs_str .= '</ul></nav>';
return $rs_str;
}
?>