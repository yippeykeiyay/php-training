<?php

/*
 * Include required files
 */
require_once __DIR__ . '/src/Owner.php';
require_once __DIR__ . '/src/Engine.php';
require_once __DIR__ . '/src/Car.php';
require_once __DIR__ . '/src/Garage.php';

try {
    // Create the engine object
    $objEngine = new \Part4\Engine(1.6, 'petrol', 4);
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
    $objFirstCar = new \Part4\Car('Mazda', '3', 2013, 5, 5, $objEngine);

    // Create and add the current owner to the Car
    $objFirstCar->addOwner(new \Part4\Owner('James', 'Tyler', '1992-06-17'));
    $objFirstCar->addOwner(new \Part4\Owner('Faye', 'Hammond', '1991-01-08'));
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
    $objSecondCar = new \Part4\Car('BMW', '1 Series', 2019, 3, 5, $objEngine);

    // Create and add the current owner to the Car
    $objSecondCar->addOwner(new \Part4\Owner('John', 'Smith', '1974-10-28'));
} catch (\InvalidArgumentException $e) {

    // Print the error with a new line after it
    echo "We encountered an error creating a car:", PHP_EOL, $e->getMessage(), PHP_EOL;
    exit;
}

/**
 * Now create a garage and add the cars into it
 */
try {

    $objGarage = new \Part4\Garage();
    $objGarage->addCar($objFirstCar)
            ->addCar($objSecondCar);

    print_r($objGarage);
} catch (\InvalidArgumentException $e) {

    // Print the error with a new line after it
    echo "We encountered an error creating a garage:", PHP_EOL, $e->getMessage(), PHP_EOL;
    exit;
}
