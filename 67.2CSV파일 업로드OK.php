<?php 
include '67.CSV파일 DB생성.php';

//csv 파일 불러오기

// fgetcsv();

/* $arr = []; //배열 */


$file = fopen($_FILES['csv']['tmp_name'],'r');
$conn->beginTransaction();
while(($line = fgetcsv($file))!== FALSE){
    // array_push($arr,$line);

    $sql = "INSERT INTO csvmember(csv_name,csv_email) VALUES('".$line[0]."','".$line[1]."');";

    $conn->exec($sql);

}


$conn->commit();
fclose($file);

$conn = null;

// print_r($arr);

?>