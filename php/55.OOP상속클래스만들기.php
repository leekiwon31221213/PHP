<?php 

class Fruit{
    public $color;
    public $name;

    public function __construct($name, $color){
        $this->name=$name;
        $this->color=$color;
    }

    public function intro(){
        echo "이 과일 이름은?{$this->name} 고 색깔은 {$this->color}입니다.";
    }
}

//상속을 받는 부분
// extends키워드를 사용해서 상속을 받음 
//Fruit 클래스를 상속을 받는다 Mango로 부터
class Mango extends Fruit{
    public function message(){
    echo "나는 망고입니다.";
    }
}

$mango = new Mango("망고","노랑색");
$mango->message(); 

echo "<br>";

$mango->intro();

/* 
아래 클래스에는 intro라는 메소드가 없는데 상속을 받았기 때문에 intro를 사용할 수 있음
class Mango extends Fruit{
    public function message(){
    echo "나는 망고입니다.";
    }

*/

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>상속클래스만들기</title>
</head>

<body>

</body>

</html>