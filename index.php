<?php 

require 'pokemon.php';

$pickachu = new pokemon('Pickahu', 60 60, [array("name" => "Electric Ring", "blow" => 50),
array("name" => "Pika Punch", "blow" => 20)]);

$charmander = new pokemon('Charmander', 60, 60, [array("name" => "Head Butt", "blow" => 10), 
array("name" => "Flare", "blow" => 30)]);