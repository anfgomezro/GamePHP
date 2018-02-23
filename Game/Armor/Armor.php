<?php
namespace Game\Armor;

/**
 * Created by IntelliJ IDEA.
 * User: fgomez
 * Date: 2/15/2018
 * Time: 11:17 AM
 */

abstract class Armor
{
    private $protection;
    private $weight;

    /**
     * @return mixed
     */
    public function getProtection()
    {
        return $this->protection;
    }

    /**
     * @param mixed $protection
     */
    public function setProtection($protection)
    {
        $this->protection = $protection;
    }

    /**
     * @return mixed
     */
    public function getWeight()
    {
        return $this->weight;
    }

    /**
     * @param mixed $weight
     */
    public function setWeight($weight)
    {
        $this->weight = $weight;
    }


}
