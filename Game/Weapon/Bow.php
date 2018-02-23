<?php
namespace Game\Weapon;
use Game\Weapon\Weapon as Weapon;
class Bow extends Weapon {

  public function __construct(){
    $this->setDamage(6);
    $this->setQuality(4);
  }
}
 ?>
