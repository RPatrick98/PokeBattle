<?php 


class Charmander extends Pokemon{
    public function __construct($name, $hitPoints, $health, $attacks){
        parent::__construct($name,$hitPoints,$health);
        $this->energyType = $energyType;
        $this->weakness = $weakness;
        $this->resistance = $resistance;
        $this->attacks = $attacks;
    }