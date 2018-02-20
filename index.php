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

require "Fighter/Fighter.php";
require "Armor/Armor.php";
require "Weapon/Weapon.php";
require "Fighter/Soldier.php";
require "Fighter/Wizard.php";
require "Fighter/Archer.php";
require "Weapon/Sword.php";
require "Weapon/Wand.php";
require "Weapon/Bow.php";
require "Weapon/Axe.php";
require "Weapon/Spear.php";
require "Weapon/Crosier.php";
require "Armor/Shield.php";
require "Armor/Leather.php";
require "Armor/Plaque.php";
require "Armor/Mesh.php";
require "Armor/Robe.php";
require "Armor/Scutum.php";
require 'functions.php';

$player1 = $_POST["player1"];
$player1Armor = $_POST["player1Armor"];
$player1Weapon = $_POST["player1Weapon"];
$player2 = $_POST["player2"];
$player2Armor = $_POST["player2Armor"];
$player2Weapon = $_POST["player2Weapon"];


switch ($player1) {
  case 'Soldier':
    $fighter1 = new Soldier(selectWeapon($player1Weapon),selectArmor($player1Armor));
  break;
  case "Archer":
    $fighter1 = new Archer(selectWeapon($player1Weapon),selectArmor($player1Armor));
  break;
  case "Wizard":
    $fighter1 = new Wizard(selectWeapon($player1Weapon),selectArmor($player1Armor));
  break;
  default:
    echo "paila";
  break;
}

switch ($player2) {
  case 'Soldier':
    $fighter2 = new Soldier(selectWeapon($player2Weapon),selectArmor($player2Armor));
  break;
  case "Archer":
    $fighter2 = new Archer(selectWeapon($player2Weapon),selectArmor($player2Armor));
  break;
  case "Wizard":
    $fighter2 = new Wizard(selectWeapon($player2Weapon),selectArmor($player2Armor));
  break;
  default:
    echo "paila";
  break;
}

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
$finished = true;
$winner =0;

echo "<div class='container'>";
echo "<div class='scroll'>";
while($finished){
  if($fighter1->getLife()<0 || $fighter2->getLife()<0){
      $finished= false;
      if($fighter1->getLife()>$fighter2->getLife()){
        $winner = 1;
      } else {
        $winner = 2;
      }
      break;
  }
    fight($fighter1,$fighter2);
    fight($fighter2,$fighter1);
}
echo "</div>";
echo "</div>";

echo "<section class='container'>";
echo "<section class='box2'>";
echo "<section class='distance'>";
echo "<p class='subtitle'>Final Life Player 2</p>";
echo "<p class='subtitle'>".$fighter1->getLife()."</p>";
echo "</section>";
echo "</section>";
echo "<section class='box2'>";
echo "<section class='distance'>";
echo "<p class='subtitle'>Final Life Player 2</p>";
echo "<p class='subtitle'>".$fighter2->getLife()."</p>";
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
