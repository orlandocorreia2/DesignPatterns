<?php

require_once 'IValidation.php';

//Concrete Handler
class Server extends IValidation
{
    public function validateUser($name, $password): bool
    {
        if ($name && $password == '123') {
            echo 'Validação feita no Server ok <br/>';

            //Encadeia a chamada
            if ($this->successor) {
                return $this->successor->validateUser($name, $password);
            }

            return true;
        }

        echo 'Validação feita no server error <br/>';
        return false;
    }
}