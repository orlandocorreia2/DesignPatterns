<?php

require 'Car.php';

$car = new Car('Fiat Uno');
$car->on();
$car->move();
$car->fuel();
$car->move();
//$car->setName('Renaut Sandeiro');
echo $car->getName();