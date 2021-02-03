<?php 
declare(strict_types =1);
include "../controller/controller.php";

$oper = $_POST["oper"];
$num1 = $_POST["num1"];
$num2 = $_POST["num2"];

$results = new Calc( $oper,(int)$num1,(int)$num2 );

try {
echo $results->Calculator();
} catch (\TypeError $th) {
echo "Error!: ". $th->getMessage();
}