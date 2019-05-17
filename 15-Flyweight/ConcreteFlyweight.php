<?php

require_once  'Flyweight.php';

class ConcreteFlyweight extends Flyweight
{

    public function operation($ext)
    {
        echo 'Concrete Flyweight ' . $ext . '<br/>';
    }
}