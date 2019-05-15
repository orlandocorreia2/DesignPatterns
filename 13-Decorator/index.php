<?php

//Permite adicionar funcionalidades novas a uma classe já existente sem alterar a mesma
//de forma indireta

require_once 'DataSet.php';
require_once 'DataSetConcreteDecorator.php';

$ds = new DataSet();
$d = new DataSetConcreteDecorator();
$d->setDataSetBase($ds);
$d->writeXML();
$ds->write();