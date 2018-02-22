<?php

function selectWeapon($playerW){
  switch ($playerW) {
    case 'Sword':
    $Weapon = new Sword();
      break;
    case "Wand":
      $Weapon = new Wand();
    break;
    case "Bow":
      $Weapon = new Bow();
    break;
    case 'Axe':
      $Weapon = new Axe();
    break;
    case "Crosier":
      $Weapon = new Crosier();
    break;
    case "Spear":
      $Weapon = new Spear();
    break;
    default:
      echo "paila";
    break;
  }
  return $Weapon;
}

function selectArmor($playerA){
  switch ($playerA) {
    case 'Shield':
      $Armor = new Shield();
    break;
    case "Leather":
      $Armor = new Leather();
    break;
    case "Mesh":
      $Armor = new Mesh();
    break;
    case 'Plaque':
      $Armor = new Plaque();
    break;
    case "Robe":
      $Armor = new Robe();
    break;
    case "Scutum":
      $Armor = new Scutum();
    break;
    default:
      echo "paila";;
    break;
  }
  return $Armor;
}

function echoEvent(Fighter $attacker, Fighter $defender, $match_stage){
  if($match_stage == "first"){
    echo "<p class='logs'>".$attacker->whoAmI(). ' is attacking '.$defender->whoAmI(). ' with life: '. $defender->getLife()."</p>";
  }
  else{
        echo "<p class='logs'>".$defender->whoAmI()." has now ".$defender->getLife().' life points'."</p>";
    }

}

function fight(Fighter $attacker, Fighter $defender ){
    echoEvent($attacker, $defender, "first");
    $global = $attacker->attackProduce() - $defender->defenseRating();
    if ($global > 0){
        $defender->setLife($defender->getLife()-$global);
    }elseif($global < 0){
        $attacker->setLife($attacker->getLife()+($global/2));
    } else {
        $attacker->setLife($attacker->getLife() - 100);
        $defender->setLife($defender->getLife() - 100);    }
    echoEvent($attacker, $defender, "last");
}

function selectPlayer($player,$weapon,$armor){

  switch ($player) {
    case 'Soldier':
      $fighter = new Soldier(selectWeapon($weapon),selectArmor($armor));
    break;
    case "Archer":
      $fighter = new Archer(selectWeapon($weapon),selectArmor($armor));
    break;
    case "Wizard":
      $fighter = new Wizard(selectWeapon($weapon),selectArmor($armor));
    break;
    default:
      echo "paila";
    break;
  }

  return $fighter;
}
?>
