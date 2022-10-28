<?php

namespace Models;

class Tickets extends Payable
{

    private string $reference;
    private int $price;

    public function __construct(string $ref, int $price) {
        $this->reference = $ref;
        $this->price = $price;
    }

    /**
     * Get the value of reference
     */ 
    public function getReference()
    {
        return $this->reference;
    }

    /**
     * Get the value of price
     */ 
    public function getPrice()
    {
        return $this->price;
    }
}
