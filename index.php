<?php

require 'pokeStats/Attack.php';
require 'pokeStats/EnergyType.php';
require 'pokeStats/Resistance.php';
require 'pokeStats/Weakness.php';
require 'pokemon.php';



/*heeft een zelf te verzinnen naam
is van het EnergyType "Lightning"
heeft 60 hitpoints
heeft 2 attacks
Electric Ring doet 50 schade
Pika Punch doet 20 schade
heeft een Weakness EnergyType "Fire" met een multiplier van 1,5
heeft een Resistance EnergyType "Fighting" met een waarde van 20*/


$pikachu = new pokemon(
    "Pickachu", 
    new energyType("Lightning"),
    "60",
    [new attack("Electric Ring", 50), new attack("Pika Punch", 20)],
    new weakness("Fire", 1.5),
    new resistance("Fighting", 20)
);

$charmeleon  = new pokemon(
    "Charmeleon",
    new energyType("Fire"),
    "60",
    [new attack("Head Butt", 10), new attack("Flare", 30)],
    new weakness("Water", 2),
    new resistance("Lightning", 10)
);



$pikachu->attack($charmeleon, 0); 
$charmeleon->attack($pikachu, 1);

pokemon::returnPokemonPopulation();
