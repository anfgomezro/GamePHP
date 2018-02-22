<?php

/**
 * Created by IntelliJ IDEA.
 * User: fgomez
 * Date: 2/15/2018
 * Time: 11:15 AM
 */

abstract class Weapon
{
 private $quality;
 private $damage;

    /**
     * @return mixed
     */
    public function getQuality()
    {
        return $this->quality;
    }

    /**
     * @param mixed $quality
     */
    public function setQuality($quality)
    {
        $this->quality = $quality;
    }

    /**
     * @return mixed
     */
    public function getDamage()
    {
        return $this->damage;
    }

    /**
     * @param mixed $damage
     */
    public function setDamage($damage)
    {
        $this->damage = $damage;
    }

}
