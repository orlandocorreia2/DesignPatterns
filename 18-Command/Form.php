<?php

require_once 'Command.php';

// Invoker
class Form
{
    private $command;

    public function __construct(Command $command)
    {
        $this->command = $command;
    }


    public function validate()
    {
        echo 'Invoker: Validando o usuário<br/>';
        $this->command->exec();
    }
}