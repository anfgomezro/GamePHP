<?php
namespace Game\Weapon;
use Game\Weapon\Weapon as Weapon;

class Crosier extends Weapon{

    public function __construct()
    {
        $this->setDamage(3);
        $this->setQuality(7);
    }
}
