<?php

require_once 'DBCommand.php';

//Concrete Product
class OracleCommand extends DBCommand
{
    public function execute()
    {
        echo 'Executando o comando Oracle<br/>';
    }
}