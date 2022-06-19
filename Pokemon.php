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
		self::$pokemonAliveCounter++;
	}

	public function __toString() {
		return json_encode($this);
	}



	public function attack($attack, $guardian) {

		if($this->energyType == $guardian->weakness) {
			$guardian->hitPoints -= $attack['blow'] * 1.5;
		}
		else if($this->energyType == $guardian->resistance) {
			$guardian->hitPoints -= $attack['blow'] * 0.5;
		}
		else {
			$guardian->hitPoints -= $attack['blow'];
		}

	}

}