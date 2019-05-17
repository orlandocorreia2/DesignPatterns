<?php

require_once 'ICalc.php';
require_once 'Calc.php';

//Proxy
class CalcProxy implements ICalc
{
    //Real Subject
    private $calc;

    public function __construct()
    {
        //Instância por demanda(Lazy)
        $this->calc = $this->calc ?? new Calc();
    }

    public function sum($x, $y)
    {
        //Repassando chamada ao RealSubject (Proxy)
        return $this->calc->sum($x, $y);
    }
}