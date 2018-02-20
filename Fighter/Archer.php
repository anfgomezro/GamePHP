<?php
/**
 * Created by IntelliJ IDEA.
 * User: fgomez
 * Date: 2/15/2018
 * Time: 2:17 PM
 */

class Archer extends Fighter
{
    public function __construct(Weapon $weapon,Armor $armor)
    {
        parent::__construct($weapon,$armor);
        $this->setAgility(300 + $armor->getWeight()*2 + $weapon->getQuality()*3);
        $this->setAttack(100 + $weapon->getDamage()*3);
        $this->setDefense(200 + $armor->getProtection()*4);
        $this->setLife(6000 + $this->getAgility()*rand(1,5));
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
      return "Archer";
    }
}
