<?php

namespace Models;

class Item
{

    private string $name;
    private int $price;
    private int $weight;

    public function __construct($name, $price, $weight)
    {
        $this->name = $name;
        $this->price = $price;
        $this->weight = $weight;
    }

    // Affiche le prix en $ car je n'ai pas le cygle euros sur mon clavier
    public function displayInfo()
    {
        echo $this->getName() . ' ' . $this->getWeight() . 'g: ' . $this->getPrice() / 100 . '$<br>';
    }




    /**
     * Get the value of name
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Get the value of price
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * Get the value of weight
     */
    public function getWeight()
    {
        return $this->weight;
    }
}
