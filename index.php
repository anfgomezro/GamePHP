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

$sword = new Sword();
$shield = new Shield();
$andres = new Soldier($sword,$shield);
$kadgar = new Wizard($sword,$shield);

echo $andres->attackProduce();
echo "\n";
echo $andres->defenseRating();
echo "\n";
echo $kadgar->attackProduce();
echo "\n";
echo $kadgar->defenseRating();
