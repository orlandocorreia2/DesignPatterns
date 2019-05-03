<?php
require_once 'Person.php';

class Employee extends Person
{
  public function working()
  {
    $this->name = $this->name ?? 'Trabalhador';
    echo $this->name . ' is working...';
  }
}