<?php

require_once 'DBFactory.php';
require_once 'OracleConnection.php';
require_once 'OracleCommand.php';

//Concrete Product
class OracleFactory extends DBFactory
{
    public function createConnection(): OracleConnection
    {
        return new OracleConnection();
    }

    public function createCommand(): OracleCommand
    {
        return new OracleCommand();
    }
}