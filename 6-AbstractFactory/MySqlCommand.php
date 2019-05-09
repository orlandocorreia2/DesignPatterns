<?php

require_once 'DBCommand.php';

//Concrete Product
class MySqlCommand extends DBCommand
{
    public function execute()
    {
        echo 'Executando o comando MySql<br/>';
    }
}