<?php 

require_once __DIR__ . '/Item.php';

require_once __DIR__ . "/Traits/Sizeable.php";
require_once __DIR__ . "/Traits/HasIngredients.php";
class Pizza extends Item {

    // uso il tratto "dimensionabile"
    // in questo modo do alla pizza la possibilità di avere diversi prezzi per le dimensioni
    // TUTTE le variabili d'istanza elencate in Sizeable.php verranno inserite qui
    use Sizeable;
    use HasIngredients;

    public $allergenes;
    
    /**
     * __construct
     *
     * @param  string $name
     * @param  float $price
     * @param  float $priceSmall
     * @param  float $priceBig
     */
    function __construct($name, $price, $priceSmall, $priceBig) {
        parent::__construct($name, $price);
        
        $this->priceSmall = $priceSmall;
        $this->priceBig = $priceBig;
    }



}