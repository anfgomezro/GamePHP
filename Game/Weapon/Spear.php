<?php
namespace Game\Weapon;
use Game\Weapon\Weapon as Weapon;
class Spear extends Weapon{
    public function __construct()
    {
        $this->setDamage(4);
        $this->setQuality(6);
    }
}
