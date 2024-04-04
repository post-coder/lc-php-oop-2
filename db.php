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
$margherita = new Pizza("Margherita", 4, 2.5, 6);
var_dump($margherita);
echo $margherita->setIngredients("Pomodoro, mozzarella, basilico");
echo $margherita->getIngredients();

// echo $margherita->getAllPrices();

// cocktail
$oldFashioned = new Cocktail("Old Fashioned", 6, "Whisky, angostura, zucchero, soda, scorza d'arancia", "tumbler");
var_dump($oldFashioned);
echo $oldFashioned->getIngredients();

// birra
$heineken = new Beer("Heineken", 3, "Lager", "5", 2, 4);
var_dump($heineken);
// echo $heineken->getAllPrices();

