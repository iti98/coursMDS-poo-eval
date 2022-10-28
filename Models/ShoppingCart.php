<?php

namespace Models;

class ShoppingCart
{
    private $itemList = array();
    private static $nbPaniers = 0;
    private $id;

    public function __construct()
    {
        $this->id = self::$nbPaniers;
        self::$nbPaniers++;
    }

    public function addItem($item)
    {
        $this->itemList[] = $item;

        return $this->itemList;
    }

    public function removeItem($item)
    {
        $this->itemList;
        return $this->itemList;
    }

    public function itemCount()
    {
        return sizeof($this->itemList);
    }

    public function totalPrice()
    {
        $total = 0;
        foreach ($this->itemList as $item ) {
            $total += $item->getPrice();
        }
        return $total;
    }

    /**
     * Get the value of id
     */ 
    public function getId()
    {
        return $this->id;
    }
}
