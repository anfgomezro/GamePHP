<?php
/**
 * Created by IntelliJ IDEA.
 * User: fgomez
 * Date: 2/15/2018
 * Time: 11:47 AM
 */

class Shield extends Armor{
    /**
     * Shield constructor.
     */
    public function __construct()
    {
        $this->setProtection(23);
        $this->setWeight(10);
    }
}
