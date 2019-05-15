<?php

require_once 'DataSetBase.php';

class DataSetDecorator extends DataSetBase
{
    protected $data_set_base;

    public function setDataSetBase(DataSetBase $data_set_base)
    {
        $this->data_set_base = $data_set_base;
    }

    public function write()
    {
        $this->data_set_base->write();
    }

}