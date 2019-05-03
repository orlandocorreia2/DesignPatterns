<?php

class Notebook
{
  private $name;
  public $port1;
  public $port2;
  public $port3;
  public $port4;

  public function __construct($name)
  {
    $this->name = $name;
  }

  public function getName()
  {
    return $this->name;
  }
}
