<?php

require_once __DIR__ . '/src/RockPool.php';
require_once __DIR__ . '/src/StarFish.php';

$objRockPool = new RockPool();

try {
    $objBilly = new StarFish('Billy', 19);
    $objRockPool->addStarFish($objBilly);

    $objJoe = new StarFish('joe', 21);
    $objRockPool->addStarFish($objJoe);

    $objSam = new StarFish('Sam', 11);
    $objRockPool->addStarFish($objSam);

    print_r($objRockPool);
} catch (Exception $exc) {
    echo $exc->getMessage();
}



