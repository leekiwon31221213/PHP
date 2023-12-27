<!DOCTYPE html>
<html lang="ko">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>갤러리</title>
</head>

<body>
    <?php include 'menu.html'; ?>
    <div class="wrap">
        <?php
        $d =dir("./upload"); //인스턴트 생성
        while($file = $d ->read()){
            //.자신폴더 , .. 부모폴더 
            if($file == '.' || $file == '..'){
                continue;
            }
            $array = explode(".", $file);
            $ext = end($array);
            if($ext == 'jpg' || $ext == 'JPG' || $ext =='png' || $ext=='PNG'){
                /* 
                //1번 방법
                echo '
                <div class="img_box">
                <img src="upload/'.$file.'"width=500px">
                </div>' ;               
                */
                
                //2번방법
                echo "
                <div class='img_box'>
                <img src='upload/{$file}'width=500px'>
                </div>";
            }
        };
        ?>
    </div>

</body>

</html>