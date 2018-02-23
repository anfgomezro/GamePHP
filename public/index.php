<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8"/>
    <meta  name="viewport" content="width=device-width,initial scale=1.0"/>
    <meta http-equiv="X-UA_Compatible" content="ie=edge"/>
    <title>AMGame</title>
    <link rel="stylesheet" type="text/css" href="styles.css">
    <link href='https://fonts.googleapis.com/css?family=Alegreya' rel='stylesheet'>
  </head>
<body background="img/wizard.jpg">
<?php
include ("../vendor/autoload.php");

use Game\Fighter\Soldier as Soldier;
use Game\Fighter\Wizard as Wizard;
use Game\Fighter\Archer as Archer;
use Game\Weapon\Axe as Axe;
use Game\Weapon\Bow as Bow;
use Game\Weapon\Crosier as Crosier;
use Game\Weapon\Spear as Spear;
use Game\Weapon\Sword as Sword;
use Game\Weapon\Wand as Wand;
use Game\Armor\Leather as Leather;
use Game\Armor\Mesh as Mesh;
use Game\Armor\Plaque as Plaque;
use Game\Armor\Robe as Robe;
use Game\Armor\Scutum as Scutum;
use Game\Armor\Shield as Shield;
use Game\CharacterFactory as CharacterFactory;
use Game\Events as Events;

$player1 = $_POST["player1"];
$player1Armor = $_POST["player1Armor"];
$player1Weapon = $_POST["player1Weapon"];
$player2 = $_POST["player2"];
$player2Armor = $_POST["player2Armor"];
$player2Weapon = $_POST["player2Weapon"];

// $characterFactory = new CharacterFactory();
// $events = new Events();
$fighter1 = CharacterFactory::getPlayer($player1,$player1Weapon,$player1Armor);
$fighter2 = CharacterFactory::getPlayer($player2,$player2Weapon,$player2Armor);

echo "<section class='container'>";
echo "<section class='distance'>";
echo "<section class='box2'>";
echo "<p class='subtitle'>Player 1</p>";
echo "<p class='subtitle'>".$player1." Life : ".$fighter1->getLife()."</p>";
echo "<p class='subtitle'> Weapon : ".$player1Weapon."</p>";
echo "<p class='subtitle'> Armor : ".$player1Armor."</p>";
echo "</section>";
echo "</section>";
echo "<section class='distance'>";
echo "<section class='box2'>";
echo "<p class='subtitle'>Player 2</p>";
echo "<p class='subtitle'>".$player2." Life : ".$fighter2->getLife()."</p>";
echo "<p class='subtitle'> Weapon : ".$player2Weapon."</p>";
echo "<p class='subtitle'> Armor : ".$player2Armor."</p>";
echo "</section>";
echo "</section>";
echo "</section>";




$fighting = true;
$winner =0;

echo "<div class='container'>";
echo "<div class='scroll'>";
while($fighting){
  if($fighter1->getLife()<0 || $fighter2->getLife()<0){
      $fighting= false;
      break;
  }

  if($fighter1->getLife()>$fighter2->getLife()){
    $winner = 1;
  } else {
    $winner = 2;
  }
    Events::fight($fighter1,$fighter2);
    Events::fight($fighter2,$fighter1);
}
echo "</div>";
echo "</div>";

echo "<section class='container'>";
echo "<section class='box2'>";
echo "<section class='distance'>";
echo "<p style='color:red'>Final Life Player 1</p>";
echo "<p style='color:red'>".$fighter1->getLife()."</p>";
echo "</section>";
echo "</section>";
echo "<section class='box2'>";
echo "<section class='distance'>";
echo "<p style='color:red'>Final Life Player 2</p>";
echo "<p style='color:red'>".$fighter2->getLife()."</p>";
echo "</section>";
echo "</section>";
echo "</section>";

echo "<section class='distance'>";
if($winner == 1){
  echo "<p class='subtitle'>Winner Player 1</p>";
  echo "<p class='subtitle'>".$fighter1->whoAmI()."</p>";
} else {
  echo "<p class='subtitle'>Winner Player 2</p>";
  echo "<p class='subtitle'>".$fighter2->whoAmI()."</p>";
}
echo "</section>";

?>
<section class="distance">
  <section class="subtitle">
  <form action='index.html'>
  <input type='submit' value='Other match'>
  </form>
  </section>
</section>

<footer>
  <p> Copyright (c) 2018 endava/mballen_agomez All Rights Reserved. </p>
</footer>
  </body>
</html>
