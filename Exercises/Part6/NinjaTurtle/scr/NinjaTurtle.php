<?php

class NinjaTurtle {

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
     * This is the colour
     * @var string
     */
    public $colour;

    /**
     * Set some things to the class
     * @param string $name
     * @param int $age
     * @param string $colour
     */
    public function __construct(string $name, int $age, string $colour) {
        $this->name = $name;
        $this->age = $age;
        $this->colour = $colour;
    }

}
