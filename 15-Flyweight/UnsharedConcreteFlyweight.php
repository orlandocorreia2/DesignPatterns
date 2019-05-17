<?php

require_once 'Flyweight.php';

class UnsharedConcreteFlyweight extends Flyweight
{

    public function operation($ext)
    {
        echo 'UnsharedConcreteFlyweight ' . $ext . '<br/>';
    }
}