<?php

require_once __DIR__ . '/src/TheSewer.php';
require_once __DIR__ . '/src/NinjaTurtle.php';

$objTheSewer = new TheSewer();

try {

    $objRaph = new NinjaTurtle('Raph', 17, 'Red');
    $objTheSewer->addNinjaTurtle($objRaph);

    $objLeo = new NinjaTurtle('Leo', 18, 'Blue');
    $objTheSewer->addNinjaTurtle($objLeo);

    $objDonnie = new NinjaTurtle('Donnie', 16, 'Purple');
    $objTheSewer->addNinjaTurtle($objDonnie);

    $objMikey = new NinjaTurtle('Mikey', 15, 'Orange');
    $objTheSewer->addNinjaTurtle($objMikey);
} catch (Exception $exc) {
    echo $exc->getMessage();
}

print_r($objTheSewer);
