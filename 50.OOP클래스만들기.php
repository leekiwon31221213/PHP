<?php 
echo "<h2> class 과일</h2>";
 class 과일{
    //Porperties
    public $name;
    
    //Methods
    function set_name($name){
        $this -> name = $name;
        //$this 클레스본체(class 과일)를 말함
    }

    function get_name(){
        return $this -> name;
    }
 }

 $apple = new 과일();
 //$apple = 인스턴스 객체가 되고 new 라는 키워드를 통해 인스턴싱을 함

 $banner =new 과일();

 /* 메소드를 호출 */
 $apple ->set_name(name:'Apple');
 $banner ->set_name(name:'Banana');

echo $apple->get_name() ;
echo "<br>";
echo $banner->get_name();
echo "<br>";
echo "<hr>";

echo "<h2> class 색상</h2>";

class 색상{
    //Porperties
    public $color;
    function set_color($color){
        $this -> color = $color;
        //$this는 클레스본체(class 색상)를 말함
    }
    function get_color(){
        return $this -> color;
    }



}

?>

<br>
<hr>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewp
    ort" content="width=device-width, initial-scale=1.0">
    <title>OOP 클래스만들기</title>
</head>

<body>
    <p>
        /* 메소드를 호출 */ <br>
        $apple ->set_name(name:'Apple'); <br>
        $banner ->set_name(name:'Banana');
        <br>
        <br>
        /* 메소드를 출력 */ <br>
        echo $apple->get_name() ;
        echo "<br>";
        echo $banner->get_name();
    </p>

    <h2>
        설정해둔 <br>
        public $name;에 $name 값으로 들어가 출력이 됨
    </h2>

    <h3>public 다이렉트 접근이 됨<br>
        private 다이렉트 접근이 안됨
    </h3>
</body>

</html>