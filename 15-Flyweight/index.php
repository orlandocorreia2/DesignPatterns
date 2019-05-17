<?php

require_once 'FlyweightFactory.php';
require_once 'UnsharedConcreteFlyweight.php';

//Externo não é compartilhado
$ext = 10;

$flyweightFactor = new FlyweightFactory();
$f1 = $flyweightFactor->getFlyweight('A');
$f1->operation($ext++);
$f2 = $flyweightFactor->getFlyweight('B');
$f2->operation($ext++);
$f3 = $flyweightFactor->getFlyweight('C');
$f3->operation($ext++);
$f4 = $flyweightFactor->getFlyweight('A');
$f4->operation($ext++);

$f5 = new UnsharedConcreteFlyweight();
$f5->operation($ext++);
