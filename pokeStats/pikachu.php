<?php 


class Pickachu extends Pokemon{
    public function __construct($name, $hitpoints, $health, $attacks){
        parent::__construct($name,$hitPoints,$health);
        $this->energyType = $energyType;
        $this->weakness = $weakness;
        $this->resistance = $resistance;
        $this->attacks = $attacks;
    }
