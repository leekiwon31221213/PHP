<?php 

class car{
    public $name; //자동차 이름
    public $color; //자동차 색상
    public $barnd; //자동차 브랜드
//생성자
    function __construct($name,$color,$brand){
        $this ->name=$name;
        $this ->color=$color;
        $this ->brand=$brand;

        echo "<h2>자동차가 생산되었습니다.</h2>";
        echo "<p>이름 : $this->name</p>";
        echo "<p>색상 : $this->color</p>";
        echo "<p>브랜드 : $this->brand</p>";
    }


    //소멸자 끝나는 시점에 호출
    function __destruct(){
        echo "<h2>자동차가 폐차 되었습니다.</h2>";
        echo "<p>차량등록말소사실명증명서가 발급되었습니다.</p>";
    }

}
//인스턴스 생성
$car1 = new car(name:"자동차1", color:"검은색", brand:"볼보");


//강제 소멸자 소환 unset()
unset($car1);
?>

<br>
<hr>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewp
    ort" content="width=device-width, initial-scale=1.0">
    <title>클래스 소멸자</title>
</head>

<body>
    <h2>__destruct() 클래스 소멸자</h2>
    <p>소멸자는 객체가 생성된 후 소멸할때 호출되는 메소드</p>
    <p>생성자가 호출되는 시점은 인스턴스 생성 후 </p>
    <p>소멸자는 스크립트가 끝나는 시점에 호출 <br>
        body 끝난 후 실행이 아닌 unset($car1);$car1 끝난 시점에 호출가능
    </p>

</body>

</html>