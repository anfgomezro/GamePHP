<?php
namespace Game\Armor;
use Game\Armor\Armor as Armor;
class Scutum extends Armor{
    public function __construct()
    {
        $this->setProtection(5);
        $this->setWeight(7);
    }
}
