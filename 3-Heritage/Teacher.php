<?php
require_once 'Person.php';

class Teacher extends Person
{
  public function teaching()
  {
    $this->name = $this->name ?? 'Professor';

    echo $this->name . ' is teaching...';
  }
}