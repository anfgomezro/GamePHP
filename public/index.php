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
<body background="img/<?php echo  lcfirst($_POST["player1"]).".jpg" ?>" >

<?php
include ("../vendor/autoload.php");

use Game\CharacterBuilder as CharacterBuilder;
use Game\Events as Events;


$player1 = $_POST["player1"];
$player1Armor = $_POST["player1Armor"];
$player1Weapon = $_POST["player1Weapon"];
$player2 = $_POST["player2"];
$player2Armor = $_POST["player2Armor"];
$player2Weapon = $_POST["player2Weapon"];

// $characterFactory = new CharacterFactory();
// $events = new Events();
$fighter1 = CharacterBuilder::getPlayer($player1,$player1Weapon,$player1Armor);
$fighter2 = CharacterBuilder::getPlayer($player2,$player2Weapon,$player2Armor);

echo "<section class='container'>";
echo "<section class='distance'>";
echo "<section class='box2' style='font-size:3px'>";
echo "<p class='subtitle'>Player 1</p>";
echo "<p class='subtitle'>".$player1." Life : ".$fighter1->getLife()."</p>";
echo "<p class='subtitle'> Weapon : ".$player1Weapon."</p>";
echo "<p class='subtitle'> Armor : ".$player1Armor."</p>";
echo "</section>";
echo "</section>";
echo "<section class='distance'>";
echo "<section class='box2' style='font-size:35px'>";
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
echo "<p style='color:darkred; background-color:gainsboro; width:100px; float:left'>Final Life Player 1</p>";
echo "<p style='color:greenyellow; font-size:27px'>".$fighter1->getLife()."</p>";
echo "</section>";
echo "</section>";
echo "<section class='box2'>";
echo "<section class='distance'>";
echo "<p style='color:darkblue; background-color:gainsboro; width:100px; float:right'>Final Life Player 2</p>";
echo "<p style='color:greenyellow; font-size:27px'>".$fighter2->getLife()."</p>";
echo "</section>";
echo "</section>";
echo "</section>";

echo "<section class='distance'>";
if($winner == 1){
  echo "<p class='subtitle' style='font-size:30px'>Winner Player 1</p>";
  echo "<p class='subtitle'>".$fighter1->whoAmI()."</p>";
} else {
  echo "<p class='subtitle' style='font-size:30px'>Winner Player 2</p>";
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
<div class="bg_player_2" style="background-image: url('img/<?php echo  lcfirst($_POST["player2"]).".jpg" ?>')" ></div>
  </body>

</html>
