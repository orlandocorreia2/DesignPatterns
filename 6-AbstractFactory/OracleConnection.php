<?php

require_once 'DBConnection.php';

//Concrete Product
class OracleConnection extends DBConnection
{
    public function open()
    {
        echo 'Abrindo Oracle connection<br/>';
    }
}