<?php

namespace Models;

class FreshItem extends Item
{
    private string $consumeBefore;

    public function __construct(string $name, int $price, int $weight, string $consumeBefore) {
        $this->consumeBefore = $consumeBefore;
        parent::__construct($name, $price, $weight);
    }

    public function displayInfo()
    {
        echo $this->consumeBefore;
        parent::displayInfo();
    }

    /**
     * Get the value of consumeBefore
     */ 
    public function getConsumeBefore()
    {
        return $this->consumeBefore;
    }
}

