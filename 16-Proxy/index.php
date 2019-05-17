<?php

require_once 'CalcProxy.php';

$calc = new CalcProxy();

$r = $calc->sum(3, 5);

echo $r;