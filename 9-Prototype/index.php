<?php

require_once 'Book.php';
require_once 'DVD.php';


$product1 = new Book(1, 'Design Patterns', 20);
$product2 = $product1->clone();
echo $product2->getDescription() . '<br/>';

$product3 = new DVD(2, 'POO', 30);
$product4 = $product3->clone();
echo $product4->getDescription() . '<br/>';