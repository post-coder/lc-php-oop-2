<?php

// "dimensionabile"

trait Sizeable {

    public $priceSmall;
    public $priceBig;

    public function getAllPrices() {
        return "Prezzo piccolo: " . $this->priceSmall ."€<br>Prezzo medio: ". $this->price ."€<br>Prezzo grande: " . $this->priceBig . '€';
    }
}