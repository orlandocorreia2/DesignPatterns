<?php

require 'Engine.php';
require 'Battery.php';

/**
 * Class Car
 */
class Car
{
    /**
     * @var Engine
     */
    private $engine;

    /**
     * @var Battery
     */
    private $battery;

    /**
     * @var
     */
    public $num_tires;

    /**
     * @var string
     */
    private $name;

    /**
     * Car constructor.
     */
    public function __construct(string $name = '-')
    {
        $this->engine = new Engine();
        $this->battery = new Battery();
        $this->name = $name;
    }

    public function setName(string $name)
    {
        $this->name = $name;
    }

    public function getName():string
    {
        return $this->name;
    }

    public function on()
    {
        echo 'Ligando o carro<br/>';
        $this->ignition();
    }

    private function ignition()
    {
        echo 'Foi dada a ignição<br/>';
    }

    public function move()
    {
        echo 'Movendo o carro<br/>';
    }

    public function fuel()
    {
        echo 'Abastecendo o carro<br/>';
    }

    public function getNumTires():int
    {
        return 4;
    }
}