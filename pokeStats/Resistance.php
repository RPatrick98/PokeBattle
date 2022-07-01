<?php

class resistance{

    private $energyType;
    private $value;
    
    public function __construct($energyType, $value){
        $this->energyType = $energyType;
        $this->value = $value;
    }

    public function getresistanceType()
    {
        return $this->energyType;
    }
    public function getresistanceValue()
    {
        return $this->value;
    }
}