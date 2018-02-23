<?php
namespace Game;
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

class CharacterBuilder{

  public static function getArmor($armor){
      switch ($armor) {
        case 'Shield':
          $playerArmor = new Shield();
        break;
        case "Leather":
          $playerArmor = new Leather();
        break;
        case "Mesh":
          $playerArmor = new Mesh();
        break;
        case 'Plaque':
          $playerArmor = new Plaque();
        break;
        case "Robe":
          $playerArmor = new Robe();
        break;
        case "Scutum":
          $playerArmor = new Scutum();
        break;
        default:
          echo "invalid armor parameter";;
        break;
      }
      return $playerArmor;
  }

  public static function getWeapon($weapon){
      switch ($weapon) {
        case 'Axe':
          $playerWeapon = new Axe();
        break;
        case "Bow":
          $playerWeapon = new Bow();
        break;
        case "Crosier":
          $playerWeapon = new Crosier();
        break;
        case 'Spear':
          $playerWeapon = new Spear();
        break;
        case "Sword":
          $playerWeapon = new Sword();
        break;
        case "Wand":
          $playerWeapon = new Wand();
        break;
        default:
          echo "invalid weapon parameter";;
        break;
      }
      return $playerWeapon;
  }

  public static function getPlayer($player,$weapon,$armor){

    switch ($player) {
      case 'Soldier':
        $fighter = new Soldier(self::getWeapon($weapon), self::getArmor($armor));
      break;
      case "Archer":
        $fighter = new Archer(self::getWeapon($weapon), self::getArmor($armor));
      break;
      case "Wizard":
        $fighter = new Wizard(self::getWeapon($weapon), self::getArmor($armor));
      break;
      default:
        echo "paila";
      break;
    }

    return $fighter;
  }
}

 ?>
