<?php

class attack{
    private $name;
    private $damage;

    public function __construct($name, $damage){
        $this->name = $name;
        $this->damage = $damage;
    }
         //If the weakness energytpe is equal to the energy type of the attacking pokemon, the damage x the multiplier is done.
    public function multiplyDamage($Multiplier)
    {
        $this->damage = $this->damage * $Multiplier;
    }

    //If the resistance energy type is equal to the energy type of the attacking pokemon, the damage - resistance is done.
    public function reduceDamage($resistance)
    {
        $this->damage = $this->damage - $resistance;
    }

    //Return name
    public function getAttackName()
    {
        return $this->name;
    }

    //Return damage
    public function getAttackDamage()
    {
        return $this->damage;
    }
}