<?php

require_once __DIR__ . '/Book.php';
require_once __DIR__ . '/Library.php';

$objLibrary = new Library();

try {
    // Alien Book
    $objAlienBook = new Book(4345, 'Aliens & Their Friends', 'Martin Mathers', 901);

    $objLibrary->addBook($objAlienBook);

    // Sports Book
    $objSportsBook = new Book(554, 'Football Football Football, Hockey, Tennis...Golf', 'Unknown', 95);

    $objLibrary->addBook($objSportsBook);

    print_r($objLibrary);
} catch (\Exception $e) {
    echo $e->getMessage(), PHP_EOL;
}

