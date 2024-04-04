<?php

require './Models/User.php';
require './Models/PremiumUser.php';

require_once './Models/Pizza.php';
require_once './Models/Cocktail.php';
require_once './Models/Beer.php';

// utenti standard
$user = new User("marioRossi", "mrossi@gmail.com");
// utenti premium
$premiumUser = new PremiumUser("premiumMario", "m@mail.com", 2023);

// var_dump($user);
// var_dump($premiumUser);



// pizza

// prova a fare questo
// se non ci riesci, comportati così
$error = null;
try {
    // qui scriviamo il codice "a rischio"
    $margherita = new Pizza("Margherita", " ", 2.5, 5);

    var_dump($margherita);
    echo $margherita->setIngredients("Pomodoro, mozzarella, basilico");
    echo $margherita->getIngredients();

} catch (Exception $e) {

    // mi salvo l'errore generato in una variabile che poi mi preoccuperò di mostrare in pagina
    $error = "Errore: " . $e->getMessage();
    // var_dump($e);

}





// echo $margherita->getAllPrices();

// cocktail
$oldFashioned = new Cocktail("Old Fashioned", 6, "Whisky, angostura, zucchero, soda, scorza d'arancia", "tumbler");
var_dump($oldFashioned);
echo $oldFashioned->getIngredients();

// birra
$heineken = new Beer("Heineken", 3, "Lager", "5", 2, 4);
var_dump($heineken);
// echo $heineken->getAllPrices();

