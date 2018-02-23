<?php
namespace Game\Armor;
use Game\Armor\Armor as Armor;

class Plaque extends Armor{
    public function __construct()
    {
        $this->setProtection(8);
        $this->setWeight(4);
    }
}
