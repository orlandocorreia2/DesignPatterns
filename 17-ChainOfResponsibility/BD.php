<?php

require_once 'IValidation.php';

//Concrete Handler
class BD extends IValidation
{
    public function validateUser($name, $password): bool
    {
        //Validação de interface gráfica
        if ($name && $password == '123') {
            echo 'Validação feita no BD ok <br/>';
            //Encadeia a chamada
            if ($this->successor) {
                return $this->successor->validateUser($name, $password);
            }

            return true;
        }

        echo 'Validação feita no BD erro <br/>';

        return false;
    }
}