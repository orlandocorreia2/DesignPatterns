<?php

require_once 'File.php';

class MP3 extends File
{
  public function open()
  {
      parent::open();
      echo  'Implementação do mp3<br/>';
  }
}