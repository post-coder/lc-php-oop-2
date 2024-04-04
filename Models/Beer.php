<?php 

require_once __DIR__ . '/Item.php';

require_once __DIR__ .'/Traits/Sizeable.php';

class Beer extends Item {

    use Sizeable;

    public $type;
    public $degrees;

   

    function __construct($name, $price, $type, $degrees, $priceSmall, $priceBig) {

        parent::__construct($name, $price);
        $this->type = $type;
        $this->degrees = $degrees;

        $this->priceSmall = $priceSmall;
        $this->priceBig = $priceBig;
    }


    
}