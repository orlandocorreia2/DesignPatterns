<?php

require_once 'Adaptee.php';
require_once 'Target.php';

//Transforma Adaptee num target
class Adapter extends Target
{
    private $adaptee;

    public function __construct()
    {
        $this->adaptee = new Adaptee();
    }

    public function request()
    {
        $this->adaptee->specificRequest();
    }
}