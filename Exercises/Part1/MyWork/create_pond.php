<?php

require_once __DIR__ . '/Pond.php';

$objPond = new Pond();

echo "The Pond has a size of {$objPond->getSize()}.", PHP_EOL;
