<?php

/*
 * Include required files
 */
require_once __DIR__ . '/Garage.php';

echo "==========================================", PHP_EOL;

/**
 * Now create a garage and add the cars into it
 */
try {
    // Build the garage
    $objGarage = \Part5\Garage::buildGarage();

    // Explore the garage and report on it
    echo "The garage has {$objGarage->countCars()} cars in it:", PHP_EOL, PHP_EOL;

    foreach ($objGarage->getCars() as $i => $objCar) {
        $i++;
        echo "  Car #{$i}: {$objCar->make} {$objCar->model}, {$objCar->countOwners()} previous owners:", PHP_EOL;

        foreach ($objCar->getOwners() as $k => $objOwner) {
            $k++;
            echo "    {$k}. Name: {$objOwner->getFullName()}, age: {$objOwner->getAge()}", PHP_EOL;
        }

        echo PHP_EOL;
    }

    if ($objGarage->hasSpace()) {
        echo "The garage has space for {$objGarage->countSpaces()} more cars.", PHP_EOL;
    } else {
        echo "The garage is full!", PHP_EOL;
    }
} catch (\InvalidArgumentException $e) {

    // Print the error with a new line after it
    echo "We encountered an error creating a garage:", PHP_EOL, $e->getMessage(), PHP_EOL;
    exit;
}

echo "==========================================", PHP_EOL;
