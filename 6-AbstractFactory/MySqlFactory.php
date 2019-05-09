<?php

require_once 'DBFactory.php';
require_once 'MySqlConnection.php';
require_once 'MySqlCommand.php';

//Concrete Product
class MySqlFactory extends DBFactory
{
    public function createConnection(): MySqlConnection
    {
        return new MySqlConnection();
    }

    public function createCommand(): MySqlCommand
    {
        return new MySqlCommand();
    }
}