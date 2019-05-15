<?php

require_once 'Component.php';

//Leaf
class Button extends Component
{
    public function __construct($name)
    {
        parent::__construct($name);
    }

    public function add($component)
    {
        echo 'Não é possível adicionar elementos a este componente';
    }

    public function remove($component)
    {
        echo 'Não é possível remover elemento';
    }

    public function display()
    {
        echo $this->name;
    }
}