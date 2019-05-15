<?php

require_once 'Component.php';

//Composite
class Form extends Component
{
    private $children = [];

    public function __construct($name)
    {
        parent::__construct($name);
    }

    public function add($component)
    {
        $this->children[] = $component;
    }

    public function remove($component)
    {
        if ($this->children && count($this->children)) {
            foreach ($this->children as $key => $child) {
                if ($child == $component) {
                    unset($this->children[$key]);
                }
            }
        }
    }

    public function display()
    {
        echo $this->name.'<br/>';

        if ($this->children && count($this->children)) {
            foreach ($this->children as $child) {
                echo $child->display().'<br/>';
            }
        }

        echo '______________________________________________________________<br/>';
    }
}