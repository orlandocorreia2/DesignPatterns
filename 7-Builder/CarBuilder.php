<?php

require_once  'VehicleBuilder.php';
require_once 'Vehicle.php';

class CarBuilder extends VehicleBuilder
{
    public function __construct()
    {
        $this->vehicle = new Vehicle('Carro de passeio');
    }


    public function buildEngine()
    {
        $this->vehicle->setPart('engine', '127c');
    }

    public function buildDoors()
    {
        $this->vehicle->setPart('doors', '4');
    }

    public function buildTires()
    {
        $this->vehicle->setPart('tires', '4');
    }
}