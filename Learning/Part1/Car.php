<?php

namespace Part1;

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
     * The car's engine size
     * @var int
     */
    public $engine_size;

    /**
     * The car's fuel type
     * @var string
     */
    public $engine_fuel;

    /**
     * The number of cylinders in the engine
     * @var int
     */
    public $engine_cylinders;

    /**
     * Apply the arguments to the class
     *
     * @param string $make
     * @param string $model
     * @param int $year
     * @param int $doors
     * @param int $seats
     * @param int $engine_size
     * @param string $engine_fuel
     * @param string $engine_cylinder
     */
    public function __construct(string $make, string $model, int $year, int $doors, int $seats, int $engine_size, string $engine_fuel, string $engine_cylinder)
    {
        $this->make = $make;
        $this->model = $model;
        $this->year = $year;
        $this->doors = $doors;
        $this->seats = $seats;
        $this->engine_size = $engine_size;
        $this->engine_fuel = $engine_fuel;
        $this->engine_cylinders = $engine_cylinder;
    }

}
