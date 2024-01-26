<?php 

class car{
    private static $count = 0;
    private static $carList = [];
    private $name;

    //__construct 클래스 생성자
    function __construct($name){
        $this->name =$name;
        //생성자가 생성 되었을때 카운트 시작
        // $this->count = $this->count+1;

        //static 추가후 문법
        self::$count = self::$count +1;

        array_push(self::$carList,$name) ;
    }

    function message(){
        echo "<p>".$this->name."가 생산되었습니다.</p>";

        //static 추가후 문법
        echo "<p>[생산번호: ".self::$count."].</p>";

        // echo "<p>[생산번호: ".$this->count."].</p>";
    }

   public static function getCarList(){
     return self::$carList;
    }
}
//인스턴스 생성
$p1 = new car(name:"볼보");
//메소드 호출
$p1->message();

//인스턴스 생성
$p2 = new car(name:"아우디");
//메소드 호출
$p2->message();

//인스턴스 생성
$p3 = new car(name:"현대");
//메소드 호출
$p3->message();

//implode() 배열을 담은걸 구분자를 통해서 합쳐진걸 문자열로 만들어줌
$a = implode(',', car::getCarList());

echo "<p>".$a."</p>";

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
    <h2>static 정적 메소드</h2>

    <p>$p1 에서 사용하는 인스턴스 $p2에서 사용하는 인스턴스 카운터는 각각 매겨진다 그래서 생산번호가 둘다 1로 출력됨 <br>
        <strong>만약 $count 값을 공유하고 싶을경우 static을 사용</strong>
    </p>
    <p>array_push() 배열을 담을때 사용</p>
    <p>implode() 배열을 담은걸 구분자를 통해서 합쳐진걸 문자열로 만들어줌</p>

    <h2>
        <p>static 문법</p>

        <ul>private static $count = 0;

            <li>$this->count = $this->count+1;(X)</li>
            <li>self::$count = self::$count +1;(O)</li>
        </ul>
    </h2>
</body>


</html>