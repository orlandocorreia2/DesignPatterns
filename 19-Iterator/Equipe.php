<?php

class Equipe implements AggregateInterface
{
    private $items = [];
    private $count;


    /**
     * @return int
     */
    public function getCount()
    {
        return count($this->items);
    }

    public function getThis($index)
    {
        return $this->items[$index];
    }

    public function setThis($index, $value)
    {
        $this->items[$index] = $value;
    }
}
