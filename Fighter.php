<?php
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

 abstract protected function attackProduce();
 abstract  protected  function defenseRating();
 function updateLife($hurt){
     $reduceFatFat= 0;
     if($this->getDefense() < $hurt ){
        $reduceFatFat = 100;
     }elseif ($this->getDefense() > $hurt){
        $reduceFatFat = 100 + ($this->getDefense()-$hurt);
     }else{

     }
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

