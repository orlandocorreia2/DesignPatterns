<?php
require 'Calculator.php';

$num1 = 10;
$num2 = 22;

$calculator = new Calculator();

$result = $calculator->sum($num1, $num2);

echo $result;