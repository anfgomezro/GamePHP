<?php
namespace Game\Fighter;

/**
 * Created by IntelliJ IDEA.
 * User: fgomez
 * Date: 2/15/2018
 * Time: 11:10 AM
 */

abstract class Fighter
{

 private $life;
 private $attack;
 private $defense;
 private $agility;
 private $weapon;
 private $armor;

 abstract function attackProduce();
 abstract function defenseRating();
 abstract function whoAmI();



 public function __construct($weapon,$armor)
 {
    $this->weapon = $weapon;
    $this->armor = $armor;
 }
    /**
     * @return mixed
     */

    public function getLife()
    {
        return $this->life;
    }

    /**
     * @param mixed $life
     */
    public function setLife($life)
    {
        $this->life = $life;
    }

    /**
     * @return mixed
     */
    public function getAttack()
    {
        return $this->attack;
    }

    /**
     * @param mixed $attack
     */
    public function setAttack($attack)
    {
        $this->attack = $attack;
    }

    /**
     * @return mixed
     */
    public function getDefense()
    {
        return $this->defense;
    }

    /**
     * @param mixed $defense
     */
    public function setDefense($defense)
    {
        $this->defense = $defense;
    }

    /**
     * @return mixed
     */
    public function getAgility()
    {
        return $this->agility;
    }

    /**
     * @param mixed $agility
     */
    public function setAgility($agility)
    {
        $this->agility = $agility;
    }


}
