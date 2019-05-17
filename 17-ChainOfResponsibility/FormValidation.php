<?php

require_once 'IValidation.php';

//Concrete Handler
class FormValidation extends IValidation
{
    public function validateUser($name, $password):bool
    {
        //Validação de interface gráfica
        if ($name && $password) {
            echo 'Validação feita no Form ok <br/>';
            //Encadeia a chamada
            if ($this->successor) {
                return $this->successor->validateUser($name, $password);
            }

            return true;
        }

        echo 'Validação feita no Form error <br/>';
        return false;
    }
}