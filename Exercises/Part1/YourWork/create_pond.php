<?php

require_once __DIR__ . '/Frog.php';
require_once __DIR__ . '/Pond.php';

$objPond = new Pond();

try {
    // John is size 4
    $objJohn = new Frog('John', 4);
    $objPond->addFrog($objJohn);

    // Nancy is size 2
    $objNancy = new Frog('Nancy', 2);
    $objPond->addFrog($objNancy);

    // Jeff is size 2
    $objJeff = new Frog('Jeff', 10);
    $objPond->addFrog($objJeff);
} catch (\Exception $e) {
    echo $e->getMessage(), PHP_EOL;
}

print_r($objPond);