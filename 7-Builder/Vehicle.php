<?php

//Product
class Vehicle
{
    private $type;
    private $parts = [];

    public function __construct($type)
    {
        $this->type = $type;
    }

    public function getPart($key)
    {
        return $this->parts[$key];
    }

    public function setPart($key, $value)
    {
        $this->parts[$key] = $value;
    }

    public function show()
    {
        echo "-------------------------------------<br/>";
        echo "Tipo " . $this->type . "<br/>";
        echo "Engine " . $this->parts['engine'] . "<br/>";
        echo "Tires " . $this->parts['tires'] . "<br/>";
        echo "Doors " . $this->parts['doors'] . "<br/>";
    }
}