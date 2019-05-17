<?php

require_once 'ConcreteFlyweight.php';

class FlyweightFactory
{
    private $flyweights = [];

    public function __construct()
    {
        $this->flyweights['A'] = new ConcreteFlyweight();
        $this->flyweights['B'] = new ConcreteFlyweight();
        $this->flyweights['C'] = new ConcreteFlyweight();
    }

    public function getFlyweight($key)
    {
        return $this->flyweights[$key];
    }
}