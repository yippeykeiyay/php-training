<?php

namespace Part5;

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
    private $_arrOwners = array();

    /**
     * Apply the supplied arguments to the class
     *
     * @param string $make
     * @param string $model
     * @param int $year
     * @param int $doors
     * @param int $seats
     * @param \Part5\Engine $objEngine
     */
    public function __construct(string $make, string $model, int $year, int $doors, int $seats, \Part5\Engine $objEngine)
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
     * @param \Part5\Owner $objOwner
     *
     * @return \Part5\Car
     */
    public function addOwner(\Part5\Owner $objOwner): \Part5\Car
    {
        // Add the owner object to the car's list of owners
        $this->_arrOwners[] = $objOwner;

        return $this;
    }

    /**
     * Return the number of owners this car has had
     *
     * @return int
     */
    public function countOwners(): int
    {
        return count($this->_arrOwners);
    }

    /**
     * Generator for getting each previous owner of the car
     */
    public function getOwners()
    {
        foreach ($this->_arrOwners as $objOwner) {
            yield $objOwner;
        }
    }

}
