<?php

require_once 'Form.php';
require_once 'Button.php';
require_once 'TextBox.php';

$form = new Form('Cadastro Clientes');

$form->add(new Button('Incluir'));
$form->add(new Button('Consultar'));
$form->add(new TextBox('Nome'));
$form->add(new TextBox('Fone'));

$form->display();

$form->remove(new Button('Consultar'));

$form->display();
