<?php

require_once 'VehicleBuilder.php';

//Director
class Director
{
    public  function __construct(VehicleBuilder $vehicleBuilder)
    {
        $vehicleBuilder->buildEngine();
        $vehicleBuilder->buildDoors();
        $vehicleBuilder->buildTires();
    }
}