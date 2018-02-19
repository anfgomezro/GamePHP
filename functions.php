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

 ?>
