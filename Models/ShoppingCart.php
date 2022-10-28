<?php

namespace Models;

class ShoppingCart
{
    private array $itemList = array();
    private static int $nbPaniers = 0;
    private $id;
    private $totalWeight;

    public function __construct()
    {
        $this->id = self::$nbPaniers;
        self::$nbPaniers++;
        $this->totalWeight = 0;
    }

    public function addItem(Item $item)
    {
        if ($this->checkWeight($item)) {
            $this->itemList[] = $item;
        }
        return $this->itemList;
    }

    public function removeItem(Item $item)
    {
        $index = array_search($item, $this->itemList);
        if ($index !== false) {
            $this->totalWeight -= $this->itemList[$index]->getWeight();
            unset($this->itemList[$index]);
        }
        return $index !== false ? $index : false;
    }

    public function itemCount()
    {
        return sizeof($this->itemList);
    }

    public function totalPrice()
    {
        $total = 0;
        foreach ($this->itemList as $item) {
            $total += $item->getPrice();
        }
        return $total;
    }

    public function toString()
    {
        $string = 'ShoppingCart: ' . $this->id . '. <br>';
        $string .= 'You have ' . $this->itemCount() . ' items in your cart ';
        $string .= 'for a total price of ' . $this->totalPrice() / 100 . '$ <br>';
        $string .= 'Items: <br>';
        foreach ($this->itemList as $item) {
            $string .= $item->getName() . ' ' . $item->getWeight() . 'g: ' . $item->getPrice() / 100 . '$<br>';
        }
        echo $string;
    }

    private function checkWeight(Item $item, int $maxWeight = 1000)
    {
        $isGood = ($this->totalWeight + $item->getWeight()) <= $maxWeight;
        if ($isGood) {
            $this->totalWeight += $item->getWeight();
        }
        return $isGood;
    }

    /**
     * Get the value of id
     */
    public function getId()
    {
        return $this->id;
    }
}
