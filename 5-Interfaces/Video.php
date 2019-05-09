<?php

require_once 'File.php';
require_once 'IEditable.php';

class Video extends File implements IEditable
{
    public function open()
    {
        parent::open();
        echo  'Implementação do video<br/>';
    }

    public function edit()
    {
        echo 'Editando o vídeo<br/>';
    }
}