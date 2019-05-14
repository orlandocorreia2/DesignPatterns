<?php

require_once 'ConnectionBD.php';

$con = ConnectionBD::getInstance();
$con->string_connection = 'SQL Server';
$con->open();
$con2 = ConnectionBD::getInstance();
$con2->string_connection = 'MySql Server';
$con2->open();
$con->open();

//Validando a mesma instância
if ($con === $con2) {
    echo '<br/>São a mesma instância';
}