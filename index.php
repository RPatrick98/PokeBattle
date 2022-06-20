<?

require 'Pokemon.php';
// $pickachu = new Pickachu('Pickachu', 60, [array("name" => "Electric Ring", "damage" => 50),array("name" => "Pika Punch", "damage" => 20)], array("type" => "fire", "multiplier" => 1.5), array("type" => "Fighting", "value" => 20));
$pickachu = new Pickachu('Pickachu', 60, 60, [array("name" => "Electric Ring", "damage" => 50),array("name" => "Pika Punch", "damage" => 20)]);
$charmander = new Charmander('Pickachu', 60, 60,[array("name" => "Head Butt", "damage" => 10),array("name" => "Flare", "damage" => 30)]);


echo("Pickachu has ".$pickachu->hitPoints ."hp");
echo("</br>");
echo("Charmander has ".$charmander->hitPoints . "hp");
echo("</br>");

//name, enerytype, hp, weakness, attacks (array), resistance\
echo("Pikachu attacks Charmander with Electric Ring attack ");
echo("</br>");

$pickachu->attack($pickachu->attacks[0],$charmander);
echo("Charmander has " . $charmander->hitPoints . "/" . $charmander->health ."hp left");
echo("</br>");

echo("Pikachu attacks with Flare attack ");
echo("</br>");

 $charmander->attack($charmander->attacks[1],$pickachu);
 echo("Pickachu has " . $pickachu->hitPoints . "/" . $pickachu->health ."hp</br>");


 echo "Alive Pokemons " . Pokemon::getPopulation();
