<?php 

class pokemon {
	public $naam;
	public $energyType;
	public $hitPoints;
	public $attacks;
	public $health;
	public $weakness;
	public $resistance;
	public static $pokemonAliveCounter = 0;

	public function __construct($name, $health, $hitPoints) {
		$this->name = $name;
		$this->health = $health;
		$this->hitPoints = $hitPoints;
	}

}