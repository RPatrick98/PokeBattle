<?php 

require 'pokemon.php';

$pickachu = new pokemon('Pickahu', 60, 60, [array("name" => "Electric Ring", "blow" => 50),
array("name" => "Pika Punch", "blow" => 20)]);

$charmander = new pokemon('Charmander', 60, 60, [array("name" => "Head Butt", "blow" => 10), 
array("name" => "Flare", "blow" => 30)]);


print("Pickachu has". $pickachu->hitPoints ."hp" );
echo("</br>");
echo("Charmander has". $charmander->hitPoints. "hp");
echo("</br>");


print("Pickachu attacks Charmeleon with Electric Ring");
echo("</br>");

$pickachu->attack($pickachu->attacks[0], $charmander);
print("Charmeleon Has". $charmander->hitPoints. "/" . $charmander->health . "hp");
echo("</br>");

print("Charmeleon attacks Pickachu with Flare attack");
echo("</br>");

$charmander->attack($charmander->attacks[1], $pickachu);
print("Pickachu has" . $pickachu->hitPoints . "/" . $pickachu->health . "hp</br>");

