<?php

/*
 * Include required files
 */
require_once __DIR__ . '/Owner.php';
require_once __DIR__ . '/Engine.php';
require_once __DIR__ . '/Car.php';

try {
    // Create the engine object
    $objEngine = new \Part3\Engine(1.6, 'petrol', 4);

    // Create the car with the engine
    $objCar = new \Part3\Car('Mazda', '3', 2013, 5, 5, $objEngine);

    // Create and add the current owner to the Car
    $objCar->addOwner(new \Part3\Owner('James', 'Tyler', '1992-06-17'));
    $objCar->addOwner(new \Part3\Owner('Faye', 'Hammond', '1991-01-08'));

    // Print the car object
    print_r($objCar);
} catch (\InvalidArgumentException $e) {

    // Print the error with a new line after it
    echo $e->getMessage(), PHP_EOL;
}