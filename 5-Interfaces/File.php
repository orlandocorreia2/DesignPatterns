<?php

abstract class File
{
  protected $description;
  protected $size;

  public function __construct($description = '', $size = '')
  {
    $this->description = $description;
    $this->size = $size;
  }
  
  public function open()
  {
    echo 'Abrindo o arquivo ' . $this->description . '<br/>';
  }
}