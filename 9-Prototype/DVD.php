<?php

require_once 'Item.php';

//Concrete Prototype
class DVD extends Item
{
    public function __construct($id, $description, $price)
    {
        parent::__construct($id, $description, $price);
    }

    public function clone()
    {
        return $this;
    }
}