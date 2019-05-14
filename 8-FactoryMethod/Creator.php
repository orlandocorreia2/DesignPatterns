<?php

//Create - define o Factory Method Abstrato
abstract class Creator
{
    public abstract  function createInstance(): Authentication;
}