<?php

class Autoload
{
    public static function inclusionAuto($className)
    {
        require_once __DIR__ . '/' . str_replace('\\', '/', $className . '.php');
    }
}

// Dans un tableau array, en premier argument de spl_autoload_register, je donne le nom de la classe 
// Autoload, puis le nom de la fonction utilisateur qui sera codée dans cette classe
spl_autoload_register(array('Autoload', 'inclusionAuto'));

