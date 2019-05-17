<?php

//Handler
abstract class IValidation
{
    protected $successor;

    /**
     * @param IValidation $successor
     */
    public function setSuccessor(IValidation $successor)
    {
        $this->successor = $successor;
    }

    public abstract function validateUser($name, $password):bool;
}