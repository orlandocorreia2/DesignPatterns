<?php

require_once 'DataSetBase.php';

//Concrete Component
class DataSet extends DataSetBase
{
    public function write()
    {
        echo 'Método do Dataset invocado<br/>';
    }
}