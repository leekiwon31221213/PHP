<?php 

class Fruit{
    public $name;
    public $color;
//생성자 __construct
    function __construct($name,$color){
    $this -> name = $name;
    $this -> color = $color;
    }
    function get_name(){
      return $this -> name;  
    }

    function get_color(){
        return $this -> color;  
      }
}

$apple = new Fruit(name:"사과",color:"빨강");
$banana = new Fruit(name:'바나나',color:"노랑");

echo "이 과일의 이름은 " .$apple -> get_name();
echo "고 색깔은 " .$apple -> get_color();
echo "입니다. <br>";

echo "이 과일의 이름은 " .$banana -> get_name();
echo "고 색깔은 " .$banana -> get_color();
echo "입니다. <br>";

?>

<br>
<hr>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewp
    ort" content="width=device-width, initial-scale=1.0">
    <title>클래스 생성자</title>
</head>

<body>
    <h2>__construct() 클래스 생성자</h2>
    <p>생성자는 클래스를 이용하여 인스턴트를 만들때 인스턴트가 생성될때 자동으로 호출되는 메소드</p>
    <p>ex-이사를 가게되면 필수적으로 따라오는것들 도배,장판,청소 그런 개념 <strong style="font-size:20px;">어떤일을 할때 자동적으로 처리해야할것을 생성자에 넣음</strong>
    </p>

    <h3>50강의 클래스 만들기에서는 set_name을 통해서 한번 더 호출하는 형태로 넣었다면</h3>
    <h2>__construct() 클래스 생성자는 한번 생략해줌</h2>

</body>

</html>