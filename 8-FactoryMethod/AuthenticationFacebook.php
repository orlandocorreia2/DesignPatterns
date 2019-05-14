<?php

require_once 'Authentication.php';

//Concrete Product
class AuthenticationFacebook extends Authentication
{
    public function authenticate()
    {
        echo "Autenticado via facebook <br/>";
    }
}