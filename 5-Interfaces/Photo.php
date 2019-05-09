<?php

require_once 'File.php';
require_once 'IEditable.php';
require_once 'IPrintable.php';

class Photo extends File implements IEditable,  IPrintable
{
    public function open()
    {
        parent::open();
        echo  'Implementação da foto<br/>';
    }

    public function edit()
    {
        echo 'Editando a foto<br/>';
    }

    public function print()
    {
        echo 'Imprimindo a foto<br/>';
    }
}