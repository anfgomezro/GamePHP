<?php
namespace Game\Weapon;
use Game\Weapon\Weapon as Weapon;
class Wand extends Weapon {

  public function __construct(){
    $this->setDamage(2);
    $this->setQuality(8);
  }

}
 ?>
