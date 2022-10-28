<?php

use Models\ShoppingCart;
use Models\Item;

require_once('autoload.php');
$item = new Item("corn flakes", 500, 250);
var_dump($item->getPrice());
var_dump($item->getName());

$item->displayInfo();
$item = new Item("chewing gum", 100, 10);
$item->displayInfo();


$shopping = new ShoppingCart();
var_dump($shopping->addItem(new Item("chewing gum", 403, 10)));
var_dump($shopping->addItem(new Item("Bueno", 600, 25)));
var_dump($shopping->addItem(new Item("Pingui", 250, 25)));

var_dump($shopping->itemCount());

printf('Prix total:'. $shopping->totalPrice()/100 . '$');