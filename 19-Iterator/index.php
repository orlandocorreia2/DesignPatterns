<?php
require_once 'AggregateInterface.php';
require_once 'IteratorInterface.php';
require_once 'Equipe.php';
require_once 'ConcreteIterator.php';

//Concrete Aggregate
$equipe = new Equipe;

$equipe->setThis(0, 'Orlando');
$equipe->setThis(1, 'Matheus');
$equipe->setThis(2, 'Arthur');

//Concrete Iterator
$i = new ConcreteIterator($equipe);

//Iterar pela coleção
echo 'Listando membros da equipe...<br/>';
$item = $i->first();

while ($item != null) {
    echo $item . '<br/>';
    $item = $i->next();
}
