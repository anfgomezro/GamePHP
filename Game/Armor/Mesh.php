<?php
namespace Game\Armor;
use Game\Armor\Armor as Armor;
class Mesh extends Armor{
    public function __construct()
    {
        $this->setProtection(7);
        $this->setWeight(5);
    }
}
