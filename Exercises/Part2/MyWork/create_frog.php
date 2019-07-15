<?php

require_once __DIR__ . '/src/Frog.php';

try {
    // John is green
    $objJohn = new Frog('John', 'green');
    print_r($objJohn);

    // Nancy is blue
    $objNancy = new Frog('Nancy', 'blue');
    print_r($objNancy);
} catch (\Exception $e) {
    echo $e->getMessage(), PHP_EOL;
}
