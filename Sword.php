<?php
/**
 * Created by IntelliJ IDEA.
 * User: fgomez
 * Date: 2/15/2018
 * Time: 11:45 AM
 */

class Sword extends Weapon
{

    /**
     * Sword constructor.
     */
    public function __construct()
    {
        $this->setDamage(50);
        $this->setQuality(12);
    }
}