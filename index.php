<?php
/**
 * Created by IntelliJ IDEA.
 * User: fgomez
 * Date: 2/15/2018
 * Time: 11:53 AM
 */

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


echo "Player 1";
echo "<p style='color:#353cff'>".$player1." Life : ".$fighter1->getLife()."</p>";
echo "<p style='color:#353cff'> Weapon : ".$player1Weapon."</p>";
echo "<p style='color:#353cff'> Armor : ".$player1Armor."</p>";
echo "Player 2";
echo "<p style='color:#353cff'>".$player2." Life : ".$fighter2->getLife()."</p>";
echo "<p style='color:#353cff'> Weapon : ".$player2Weapon."</p>";
echo "<p style='color:#353cff'> Armor : ".$player2Armor."</p>";

$finished = true;
$winner =0;
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

echo "Final life player1    ";
echo "<p>".$fighter1->getLife()."</p>";
echo "Final Life player2    ";
echo "<p>".$fighter2->getLife()."</p>";

if($winner == 1){
  echo "Winner Player 1";
  echo "<p style='color:#ff5a69'>".$fighter1->whoAmI()."</p>";
} else {
  echo "Winner player 2";
  echo "<p style='color:#ff5a69'>".$fighter2->whoAmI()."</p>";
}

echo "<form action='index.html'>";
echo "<input type='submit' value='Other match'>";
echo "</form>";
