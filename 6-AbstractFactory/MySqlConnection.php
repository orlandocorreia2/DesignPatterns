<?php

require_once 'DBConnection.php';

//Concrete Product
class MySqlConnection extends DBConnection
{
    public function open()
    {
        echo 'Abrindo MySql connection<br/>';
    }
}