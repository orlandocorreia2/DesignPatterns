<?php

require_once 'DBCommand.php';

//Concrete Product
class SqlCommand extends DBCommand
{
    public function execute()
    {
        echo 'Executando o comando SQL<br/>';
    }
}