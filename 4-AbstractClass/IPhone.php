<?php

require_once 'USB.php';

class IPhone extends USB
{ 
  protected $name;
  public function __construct($name)
  {
    $this->name = $name;
  }
  public function FunctionName()
  {
    echo 'test';
  }
}