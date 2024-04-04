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

        // controlla che il prezzo fornito sia effettivamente un numero
        if(is_numeric($price)) {

            $this->price = $price;
            
        } else {
            // se notiamo che sta succedendo qualcosa che non vorremmo
            throw new Exception("Il prezzo inserito non è di valore numerico");
        }
            
    }
}