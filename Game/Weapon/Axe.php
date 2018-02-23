<?php
namespace Game\Weapon;
use Game\Weapon\Weapon as Weapon;
class Axe extends Weapon {

  public function __construct(){
    $this->setDamage(5);
    $this->setQuality(5);
  }

}
 ?>
