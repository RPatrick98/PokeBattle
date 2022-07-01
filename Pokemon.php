<?php

class pokemon {
    private $name;
    private $energyType;
    private $hitpoints;
    private $attacks;
    private $weakness;
    private $resistance;
    public static $pokemonAliveCounter = 0;

    public function __construct($name, $energyType, $hitpoints, $attacks, $weakness, $resistance)
    {
        $this->name = $name;
        $this->energyType = $energyType;
        $this->hitpoints = $hitpoints;
        $this->attacks = $attacks;
        $this->weakness = $weakness;
        $this->resistance = $resistance;
        self::$pokemonAliveCounter++;
    }


    //Function die er Pokemons tegen elkaar laat vechten
    public function attack($target, $attack){
        $damage = $this->attacks[$attack]->getAttackDamage();
        print_r($target->name . " Has " . $target->hitpoints . " Health <br> ");

        if ($this->energyType->getname() == $target->weakness->getWeaknessType()) {
            $damage = $damage * $target->weakness->getWeaknessValue();
        }
        if ($this->energyType->getname() == $target->resistance->getResistanceType()) {
            $damage -= $target->resistance->getResistanceValue();
        }
        $target->hitpoints -= $damage;
        if ($target->hitpoints <= 0){
            self::$pokemonAliveCounter--;
        }

        print_r($this->name . " attacks " . $target->name . " with " . $this->attacks[$attack]->getAttackName() . " attack dealing " . $damage . " Damage <br>" );
        print_r($target->name . " Has " . $target->hitpoints . " Health left <br><br> ");
    }


    public function returnPokemonPopulation(){
        print_r("Pokemon's alive at the moment " . self::$pokemonAliveCounter);
    }
}
?>



