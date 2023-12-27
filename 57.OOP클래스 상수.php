<?php 
    class base{
        const AGE = 21;
        public $mustOlderThan = 21;

        public static function display(){
            //echo $this->mustOlderThan; 일반 프로퍼티

            echo self::AGE;  //self::를 사용
        }
    }

    
    // echo base::AGE;
    base::display();
 
?>
<br>
<hr>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>정적메소드 static</title>
</head>

<body>
    <h2>클래스 상수</h2>

    <p> class상수는 const며 class 상수는 $를 안붙임</p>

    <p> class상수는 인스턴스 생성 없이 바로 접근이 가능</p>
    <p> echo base::AGE; 문법</p>

    <h2>클래스상수는 클래스 내에 접근방식에도 차이가 있음</h2>



</body>


</html>