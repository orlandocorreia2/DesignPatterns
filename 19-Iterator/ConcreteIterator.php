<?php

class ConcreteIterator implements IteratorInterface
{
    private $aggregate = [];
    private $current;

    public function __construct(Equipe $aggregate)
    {
        $this->aggregate = $aggregate;
    }

    public function first()
    {
        return $this->aggregate->getThis(0);
    }

    public function next()
    {
        if ($this->current < $this->aggregate->getCount() - 1) {
            return $this->aggregate->getThis(++$this->current);
        }

        return null;
    }

    public function isDone()
    {
        return $this->current >= $this->aggregate->getCount();
    }

    public function currentItem()
    {
        $this->aggregate->getThis($this->current);
    }
}