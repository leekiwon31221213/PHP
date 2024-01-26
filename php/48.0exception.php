<?php 
function divide($dividend, $divisor){
    if($divisor == 0){
        throw new Exception(message:"Divison by zero"); //에러를 던짐
    }
return $dividend / $divisor;
};

try{
//검증할 구문
echo divide(dividend:5, divisor:0);
}catch(Exception $e){
//에러 발생시 catch()구문 실행
echo "Unable to divide.";
}
/* catch (Exception $ex){ 
    $code = $ex ->getCode(); 
    $message = $ex ->getMessage(); 
    $file = $ex ->getFile(); 
    $line = $ex ->getLine(); 
    echo "Exception thrown in $file on line $Line:[Code $code] $message";} */
finally{
//항상 처리해야할 구문은 finally 안에 코드 작성
echo "프로그램을 종료합니다";
}
?>

<!DOCTYPE html>
<html lang="ko">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h2>Exception 예외처리 <br>
        PHP스크립트 또는 예기치 않은 동작을 설명하는 객체</h2>

    <h2>throw new Exception(message:"Divison by zero"); 에러를 던짐</h2>
    <h2>아래 코드 실행 오류가 났기 때문에 catch()구문에서 실행</h2>
    <h2>
        try{ <br>
        검증할 구문 <br>
        echo divide(dividend:5, divisor:0);<br>
        } <br>catch(Exception $e){<br>
        에러 발생시 <br> catch()구문 실행
        echo "Unable to divide.";
        <br>}
        finally{ <br>
        항상 처리해야할 구문은 finally 안에 코드 작성 <br>
        echo "프로그램을 종료합니다";<br>
        }
    </h2>
    <br>
    <h2>getCode(); 에러코드 확인</h2>
    <h2>getMessage(); 메세지를 통해서 어떤 에러인지 확인 </h2>
    <h2>getFile(); 에러가 난 파일을 받아옴 </h2>
    <h2>getLine(); 에러가 라인 번호값 확인 </h2>

    catch (Exception $ex){ <br>
    $code = $ex ->getCode(); <br>
    $message = $ex ->getMessage(); <br>
    $file = $ex ->getFile(); <br>
    $line = $ex ->getLine(); <br>
    echo "Exception thrown in $file on line $Line:[Code $code] $message"
    <br>}
</body>

</html>