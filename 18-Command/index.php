<?php

require_once 'Server.php';
require_once 'ServerCommand.php';
require_once 'Form.php';

//Configura o Receiver
$server = new Server();
//Cria o comando configurando o receiver
$command = new ServerCommand($server);
//Configura o Invoker
$form = new Form($command);

$form->validate();