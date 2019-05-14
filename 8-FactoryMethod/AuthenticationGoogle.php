<?php

require_once 'Authentication.php';

//Concrete Product
class AuthenticationGoogle extends Authentication
{
    public function authenticate()
    {
        echo "Autenticado via google <br/>";
    }
}