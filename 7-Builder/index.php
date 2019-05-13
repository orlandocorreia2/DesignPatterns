<?php

require_once 'CarBuilder.php';
require_once 'MotoBuilder.php';
require_once 'Director.php';

$vehicleBuilder = new CarBuilder();
$director = new Director($vehicleBuilder);
$vehicleBuilder->getVehicle()->show();

$vehicleBuilder2 = new MotoBuilder();
$director2 = new Director($vehicleBuilder2);
$vehicleBuilder2->getVehicle()->show();






