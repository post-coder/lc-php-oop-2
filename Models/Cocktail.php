<?php

require_once __DIR__ . '/Item.php';

require_once __DIR__ . "/Traits/HasIngredients.php";

class Cocktail extends Item {

    use HasIngredients;
    public $glassType;

    function __construct($name, $price, $ingredients, $glassType){
        parent::__construct($name, $price);
        $this->ingredients = $ingredients;
        $this->glassType = $glassType;
    }
        
}