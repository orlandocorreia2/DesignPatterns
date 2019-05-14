<?php

//Prototype
abstract class Item
{
    /**
     * @var
     */
    private $id;

    /**
     * @var
     */
    private $description;

    /**
     * @var
     */
    private $price;

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @param mixed $description
     */
    public function setDescription($description)
    {
        $this->description = $description;
    }

    /**
     * @return mixed
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * @param mixed $price
     */
    public function setPrice($price)
    {
        $this->price = $price;
    }

    /**
     * Item constructor.
     * @param $id
     * @param $description
     * @param $price
     */
    public function __construct($id, $description, $price)
    {
        $this->id = $id;
        $this->description = $description;
        $this->price = $price;
    }

    //Clonar
    public abstract function clone();
}