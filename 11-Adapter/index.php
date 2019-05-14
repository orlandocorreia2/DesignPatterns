<?php
//Padrão comportamental

require_once 'Adapter.php';

$target = new Adapter();
$target->request();