<?php

interface AggregateInterface
{
    public function getCount();
    public function getThis($index);
    public function setThis($index, $value);
}