<?php

require_once 'Command.php';

// Concrete Command
class ServerCommand implements Command
{
    private $server;

    public function __construct(Server $server)
    {
        $this->server = $server;
    }

    public function exec()
    {
        echo 'Concrete Command: Validando o usuário<br/>';
        $this->server->validateUser();
    }
}