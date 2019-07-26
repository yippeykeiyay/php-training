<?php

require_once __DIR__ . '/src/Frog.php';
require_once __DIR__ . '/src/Pond.php';

$objPond = new Pond();

try {
    // John is green
    $objJohn = new Frog('John', 'green');

    $objPond->addFrog($objJohn);

    // Nancy is blue
    $objNancy = new Frog('Nancy', 'blue');

    $objPond->addFrog($objNancy);

    // Steve is red
    $objSteve = new Frog('Steve', 'red');

    $objPond->addFrog($objSteve);
} catch (\Exception $e) {
    echo $e->getMessage(), PHP_EOL;
}

print_r($objPond);
