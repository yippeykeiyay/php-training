<?php

/*
 * Include required files
 */
require_once __DIR__ . '/Owner.php';
require_once __DIR__ . '/Engine.php';
require_once __DIR__ . '/Car.php';
require_once __DIR__ . '/Garage.php';

try {
    // Create the engine object
    $objEngine = new \Part5\Engine(1.6, 'petrol', 4);
} catch (\InvalidArgumentException $e) {

    // Print the error with a new line after it
    echo "We encountered an error creating the engine:", PHP_EOL, $e->getMessage(), PHP_EOL;
    exit;
}

/*
 * Create a car with the engine and multiple owners
 */
try {
    // Create the car with the engine
    $objFirstCar = new \Part5\Car('Mazda', '3', 2013, 5, 5, $objEngine);

    // Create the owner objects
    $objOwner1 = new \Part5\Owner('James', 'Tyler', '1992-06-17');
    $objOwner2 = new \Part5\Owner('Faye', 'Hammond', '1991-01-08');

    // Apply the owners to the car
    $objFirstCar->addOwner($objOwner1);
    $objFirstCar->addOwner($objOwner2);
} catch (\InvalidArgumentException $e) {

    // Print the error with a new line after it
    echo "We encountered an error creating a car:", PHP_EOL, $e->getMessage(), PHP_EOL;
    exit;
}

/**
 * Create a second car with the same engine and one owner
 */
try {
    // Create the car with the engine
    $objSecondCar = new \Part5\Car('BMW', '1 Series', 2019, 3, 5, $objEngine);

    // Create and add the current owner to the Car
    $objSecondCar->addOwner(new \Part5\Owner('John', 'Smith', '1974-10-28'));
} catch (\InvalidArgumentException $e) {

    // Print the error with a new line after it
    echo "We encountered an error creating a car:", PHP_EOL, $e->getMessage(), PHP_EOL;
    exit;
}

/**
 * Now create a garage and add the cars into it
 */
try {

    $objGarage = new \Part5\Garage();
    $objGarage->addCar($objFirstCar)
            ->addCar($objSecondCar);
} catch (\InvalidArgumentException $e) {

    // Print the error with a new line after it
    echo "We encountered an error creating a garage:", PHP_EOL, $e->getMessage(), PHP_EOL;
    exit;
}


echo "The garage has {$objGarage->countCars()} cars in it:", PHP_EOL, PHP_EOL;

foreach ($objGarage->getCars() as $i => $objCar) {
    $i++;
    echo "Car #{$i}: {$objCar->make} {$objCar->model}, {$objCar->countOwners()} previous owners", PHP_EOL;
}

echo PHP_EOL;

if ($objGarage->hasSpace()) {
    echo "The garage has space for {$objGarage->countSpaces()} more cars.", PHP_EOL;
} else {
    echo "The garage is full!", PHP_EOL;
}