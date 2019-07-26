<?php

class StarFish {

    /**
     * is the name
     * @var string 
     */
    public $name;

    /**
     * This is the age
     * @var int
     */
    public $age;

    /**
     * Set some things to the class
     * @param string $name
     * @param int $age
     */
    public function __construct(string $name, int $age) {
        $this->name = $name;
        $this->age = $age;
    }

}
