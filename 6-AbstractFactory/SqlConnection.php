<?php

require_once 'DBConnection.php';

//Concrete Product
class SqlConnection extends DBConnection
{
    public function open()
    {
        echo 'Abrindo SQL connection<br/>';
    }
}