<?php

class Item {
    public $name;
    public $price;
    public $image;
    
    /**
     * __construct
     *
     * @param  string $name
     * @param  float $price
     */
    function __construct($name, $price) {
        $this->name = $name;
        $this->price = $price;
    }
}