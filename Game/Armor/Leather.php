<?php
namespace Game\Armor;
use Game\Armor\Armor as Armor;

class Leather extends Armor{
    public function __construct()
    {
        $this->setProtection(2);
        $this->setWeight(10);
    }
}
