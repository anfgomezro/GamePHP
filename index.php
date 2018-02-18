<?php
/**
 * Created by IntelliJ IDEA.
 * User: fgomez
 * Date: 2/15/2018
 * Time: 11:53 AM
 */

require "Fighter.php";
require "Armor.php";
require "Weapon.php";
require "Soldier.php";
require "Sword.php";
require "Shield.php";
require "Wizard.php";
require "Archer.php";
require "Wand.php";
require "Bow.php";
require "Axe.php";
//
//$sword = new Sword();
//$shield = new Shield();
//$andres = new Soldier($sword,$shield);
//$kadgar = new Wizard($sword,$shield);
//
//echo $andres->attackProduce();
//echo "\n";
//echo $andres->defenseRating();
//echo "\n";
//echo $kadgar->attackProduce();
//echo "\n";
//echo $kadgar->defenseRating();

$player1 = $_POST["player1"];
//$player1Armor = $_POST["player1Armor"];
$player1Weapon = $_POST["player1Weapon"];
$player2 = $_POST["player2"];
// echo $player1;
// echo $player1;
//$player2Armor = $_POST["player2Armor"];
$player2Weapon = $_POST["player2Weapon"];

switch ($player1Weapon) {
  case 'Sword':
  $fighter1Weapon = new Sword();
    break;
  case "Wand":
  $fighter1Weapon = new Wand();
  break;
  case "Bow":
  $fighter1Weapon = new Bow();
  break;
  default:
    echo "paila";
    break;
}

switch ($player2Weapon) {
  case 'Sword':
  $fighter2Weapon = new Sword();
    break;
  case "Wand":
  $fighter2Weapon = new Wand();
  break;
  case "Bow":
  $fighter2Weapon = new Bow();
  break;
  default:
    echo "paila";
    break;
}

switch ($player1) {
  case 'Soldier':
  $fighter1 = new Soldier($fighter1Weapon,new Shield());
    break;
  case "Archer":
  $fighter1 = new Archer($fighter1Weapon,new Shield());
  break;
  case "Wizard":
  $fighter1 = new Wizard($fighter1Weapon,new Shield());
  break;
  default:
    echo "paila";
    break;
}

switch ($player2) {
  case 'Soldier':
  $fighter2 = new Soldier($fighter2Weapon,new Shield());
    break;
  case "Archer":
  $fighter2 = new Archer($fighter2Weapon,new Shield());
  break;
  case "Wizard":
  $fighter2 = new Wizard($fighter2Weapon,new Shield());
  break;
  default:
    echo "paila";
    break;
}

// $fighter1 = new Wizard(new Sword(),new Shield());
// $fighter2 = new Wizard(new Sword(),new Shield());
echo "Life p1";
echo "<p style='color:#f00'>".$fighter1->getLife()."</p>";
echo "Life p2    ";
echo "<p>".$fighter2->getLife()."</p>";

function fight(Fighter $attacker, Fighter $defender ){
    $global = $attacker->attackProduce() - $defender->defenseRating();
    if ($global > 0){
        $defender->setLife($defender->getLife()-$global);
    }elseif($global < 0){
        $attacker->setLife($attacker->getLife()+($global/2));
    } else {
        $attacker->setLife($attacker->getLife() - 100);
        $defender->setLife($defender->getLife() - 100);
    }
}

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

echo "Final life p1    ";
echo "<p>".$fighter1->getLife()."</p>";
echo "Final Life p2    ";
echo "<p>".$fighter2->getLife()."</p>";

if($winner == 1){
  echo "Winner Player 1";
} else {
  echo "Winner player 2";
}

echo "<form action='init.php'>";
echo "<input type='submit' value='Other match'>";
echo "</form>";
