<?php

require_once 'FormValidation.php';
require_once 'Server.php';
require_once 'BD.php';

$val_form = new FormValidation();
$val_server = new Server();
$val_bd = new BD();

$val_form->setSuccessor($val_server);
$val_server->setSuccessor($val_bd);

$val_form->validateUser('Orlando', '123');



