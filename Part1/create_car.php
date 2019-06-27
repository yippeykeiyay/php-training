<?php

/*
 * Include required files
 */
require_once __DIR__ . '/Car.php';

// Create the car object
$objCar = new \Part1\Car('Mazda', '3', 2013, 5, 5, 1.6, 'petrol', 4);

// Print the car object
print_r($objCar);
