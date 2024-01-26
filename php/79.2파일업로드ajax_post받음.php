<?php

// print_r($_FILES['photo']);
copy($_FILES['photo']['tmp_name'],'79upload/' .$_FILES['photo']['name']);

//성공 했으면 파일위치를 알려줘야함
$arr = ['result' => 'success','img' =>'79upload/' .$_FILES['photo']['name']];


//echo exsit 찍을 필요 없이 die하면 끝남
die (json_encode($arr));


/* 받아서 처리를 하는건 79.3파일업로드ajax post 전송에서 */
?>