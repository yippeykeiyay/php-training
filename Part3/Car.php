<?php

namespace Part3;

/**
 * The class aims to represent a car and all of its attributes
 */
class Car
{

    /**
     * The make of the car
     * @var string
     */
    public $make;

    /**
     * The car's model
     * @var string
     */
    public $model;

    /**
     * The year the car was registered
     * @var int
     */
    public $year;

    /**
     * The number of doors
     * @var int
     */
    public $doors;

    /**
     * The number of seats
     * @var int
     */
    public $seats;

    /**
     * The Engine object
     * @var Engine
     */
    public $objEngine;

    /**
     * The list of owners
     * @var array
     */
    public $arrOwners = array();

    /**
     * Apply the supplied arguments to the class
     *
     * @param string $make
     * @param string $model
     * @param int $year
     * @param int $doors
     * @param int $seats
     * @param \Part3\Engine $objEngine
     */
    public function __construct(string $make, string $model, int $year, int $doors, int $seats, \Part3\Engine $objEngine)
    {
        $this->make = $make;
        $this->model = $model;
        $this->year = $year;
        $this->doors = $doors;
        $this->seats = $seats;
        $this->objEngine = $objEngine;
    }

    /**
     * Add an Owner to the class
     *
     * @param \Part3\Owner $objOwner
     *
     * @return \Part3\Car
     */
    public function addOwner(\Part3\Owner $objOwner): \Part3\Car
    {
        // Add the owner object to the car's list of owners
        $this->arrOwners[] = $objOwner;

        return $this;
    }

}
