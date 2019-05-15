<?php

require_once 'DataSetDecorator.php';

class DataSetConcreteDecorator extends DataSetDecorator
{
    //Decorando com novas funcionalidades
    public function writeXML()
    {
        echo 'O método writeXML foi invocado<br/>';
    }
}