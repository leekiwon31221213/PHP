<?php 
 class Fruit{
    public $name;
    public $color;
    public $brand;


    
public function set_name($name){
    $this -> name =$name;
    $this->set_color(color:'노란색'); // protected 내부에서는 오류가 나지 않음
}
protected function set_color($color){
    $this -> color =$color;
}

private function set_brand($brand){
    $this -> brand =$brand;
}

}
//인스턴트 생성
$mango = new Fruit();
$mango->set_name(name:'망고');
/* $mango->set_color(color:'노란색');
$mango->set_brand(brand:'델몬트'); */


/* 접근
Access Modifiers

class Fruit{
public $name;
protected $color;
private $brand;
}

 //인스턴스 생성
$mango = new Fruit();

$mango->name ="망고";
$mango->color ="노란색"; //접근을 못해 오류가 뜸
$mango->brand ="델몬트" */

?>

<br>
<hr>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewp
    ort" content="width=device-width, initial-scale=1.0">
    <title>접근제어자</title>
</head>

<body>
    <h2>Access Modifiers</h2>
    <p>public - 기본값 언제든지 어디서나 접근가능</p>
    <p>protected - 외부 접근 차단 , 내부 접근 , 파생된 클래스, 상속클래스에서 접근가능</p>
    <p>private -외부,파생클래스 접근차단 자체 클래스에서만 접근가능</p>

</body>

</html>