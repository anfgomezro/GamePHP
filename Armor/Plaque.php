<?php

class Plaque extends Armor{
    public function __construct()
    {
        $this->setProtection(30);
        $this->setWeight(5);
    }
}
