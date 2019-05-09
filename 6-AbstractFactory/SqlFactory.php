<?php

require_once 'DBFactory.php';
require_once 'SqlConnection.php';
require_once 'SqlCommand.php';

//Concrete Product
class SqlFactory extends DBFactory
{
    public function createConnection(): SqlConnection
    {
        return new SqlConnection();
    }

    public function createCommand(): SqlCommand
    {
        return new SqlCommand();
    }
}