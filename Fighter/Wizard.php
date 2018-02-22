<?php

/**
 * Created by IntelliJ IDEA.
 * User: fgomez
 * Date: 2/15/2018
 * Time: 2:01 PM
 */

class Wizard extends Fighter
{
    public function __construct(Weapon $weapon,Armor $armor)
    {
        parent::__construct($weapon,$armor);
        $this->setAgility(40 + $armor->getWeight()*2 + $weapon->getQuality()*3);
        $this->setAttack(60 + $weapon->getDamage()*3);
        $this->setDefense(20 + $armor->getProtection()*2);
        $this->setLife(1000 + $this->getAgility()*rand(1,5));
    }

    function attackProduce()
    {
        $damage = $this->getAttack() + $this->getAgility()*rand(1,3);
        return $damage;
    }

    function defenseRating()
    {
        $protection = $this->getDefense() + $this->getAgility()*rand(1,3);
        return $protection;
    }

    function whoAmI(){
      return "Wizard";
    }

}
