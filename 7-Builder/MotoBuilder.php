<?php

require_once  'VehicleBuilder.php';
require_once 'Vehicle.php';

class MotoBuilder extends VehicleBuilder
{
    public function __construct()
    {
        $this->vehicle = new Vehicle('Motocicleta');
    }


    public function buildEngine()
    {
        $this->vehicle->setPart('engine', '50c');
    }

    public function buildDoors()
    {
        $this->vehicle->setPart('doors', '0');
    }

    public function buildTires()
    {
        $this->vehicle->setPart('tires', '2');
    }
}