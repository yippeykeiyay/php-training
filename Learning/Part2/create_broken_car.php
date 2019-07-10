<?php

/*
 * Include required files
 */
require_once __DIR__ . '/Engine.php';
require_once __DIR__ . '/Car.php';

// Create the engine object
$objEngine = new Part2\Engine(1.6, 'electricity', 4);

// Create the car with the engine
$objCar = new Part2\Car('Mazda', '3', 2013, 5, 5, $objEngine);

// Print the car object
print_r($objCar);
