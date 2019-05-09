<?php

abstract class DBFactory
{
    public abstract function createConnection();
    public abstract function createCommand();
}