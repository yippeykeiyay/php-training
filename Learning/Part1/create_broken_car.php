<?php

/*
 * Include required files
 */
require_once __DIR__ . '/src/Car.php';

// Create the engine object
$objCar = new Car('Mazda', '3', 'The year 2013', 5, 5, 1.6, 'petrol', 4);

// Print the car object
print_r($objCar);
