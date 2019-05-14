<?php

require_once 'FacebookCreator.php';
require_once 'GoogleCreator.php';

$creators = [];

$creators[0] = new FacebookCreator();
$creators[1] = new GoogleCreator();

foreach ($creators as $creator) {
    $authentication = $creator->createInstance();
    $authentication->authenticate();
}

