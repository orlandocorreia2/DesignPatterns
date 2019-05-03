<?php

require 'Notebook.php';
require 'IPhone.php';
require 'Mouse.php';
require 'Keyboard.php';

$notebook = new Notebook('Dell');

$notebook->port1 = new Iphone('5s');
$notebook->port2 = new Mouse();
$notebook->port3 = new Keyboard();

echo $notebook->getName();