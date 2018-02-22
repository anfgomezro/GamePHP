<?php

/**
 * Created by IntelliJ IDEA.
 * User: fgomez
 * Date: 2/15/2018
 * Time: 11:13 AM
 */

class Soldier extends Fighter
{
    /**
     * Soldier constructor.
     */
    public function __construct(Weapon $weapon,Armor $armor)
    {
        parent::__construct($weapon,$armor);
        $this->setAgility(20 + $armor->getWeight()*2 + $weapon->getQuality()*3);
        $this->setAttack(40 + $weapon->getDamage()*4);
        $this->setDefense(60 + $armor->getProtection()*2);
        $this->setLife(1000 + $this->getAgility()*rand(1,5));
    }

    function attackProduce()
    {
        $damage = $this->getAttack() + $this->getAgility()*rand(3,7);
        return $damage;
    }

    function defenseRating()
    {
        $protection = $this->getDefense() + $this->getAgility()*rand(3,7);
        return $protection;
    }
    function whoAmI(){
      return "Soldier";
    }
}
