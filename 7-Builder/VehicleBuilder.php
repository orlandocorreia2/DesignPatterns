<?php

//Builder Abstract
abstract class VehicleBuilder
{
    protected $vehicle;

    public function getVehicle()
    {
        return $this->vehicle;
    }

//    Construct Process
    public abstract function buildEngine();
    public abstract function buildDoors();
    public abstract function buildTires();
}