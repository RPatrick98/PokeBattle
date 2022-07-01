<?php

class attack{
    private $name;
    private $damage;

    public function __construct($name, $damage){
        $this->name = $name;
        $this->damage = $damage;
    }
         //Als de weaknes energytpe gelijk is aan het energietype van de aanvallende pokemon, is de schade x de vermenigvuldiger aangericht.
    public function multiplyDamage($Multiplier)
    {
        $this->damage = $this->damage * $Multiplier;
    }

    //Als het resistance gelijk is aan het energietype van de aanvallende pokemon, is de schade - resistance aangericht.
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