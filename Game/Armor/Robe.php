<?php
namespace Game\Armor;
use Game\Armor\Armor as Armor;
class Robe extends Armor{
    public function __construct()
    {
        $this->setProtection(4);
        $this->setWeight(8);
    }
}
