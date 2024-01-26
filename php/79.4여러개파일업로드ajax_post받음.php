<?php

//is_array()배열인지 아닌지를 체크해주는 함수
if(is_array($_FILES['photo']['tmp_name'])){

    //몇개가 넘어오는지 파악하기 위해 배열의 크기를 파악
    $cnt = count($_FILES['photo']['tmp_name']);

    //   $rs_arr = []; 만든이유 이미지를 한꺼번에 던지기 위함
    $rs_arr = [];

    for($i=0; $i < $cnt; $i++){
        copy($_FILES['photo']['tmp_name'][$i],'79upload/'.$_FILES['photo']['name'][$i]);
        $rs_arr[] = '79upload/'.$_FILES['photo']['name'][$i];
    }

    $arr = ['result'=>'success','img' => implode('|',$rs_arr )];
    // 79upload/1.확장자 | 79upload/2.확장자

   die(json_encode($arr));


}else{
    /* 배열이(multiple) 아닌경우 한개 파일업로드 코드 사용 */
    copy($_FILES['photo']['tmp_name'],'79upload/'.$_FILES['photo']['name']);

    //성공 했으면 파일위치를 알려줘야함
    $arr = ['result' => 'success','img'=>'79upload/'.$_FILES['photo']['name']];


    //echo exsit 찍을 필요 없이 die하면 끝남
    die (json_encode($arr));
}
?>