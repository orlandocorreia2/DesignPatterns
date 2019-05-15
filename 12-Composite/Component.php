<?php

//Component
abstract class Component
{
    protected $name;

    public function __construct($name)
    {
        $this->name = $name;
    }

    public abstract function add($component);
    public abstract function remove($component);
    public abstract function display();
}