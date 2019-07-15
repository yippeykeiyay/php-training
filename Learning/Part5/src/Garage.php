<?php

namespace Part5;

/*
 * Include required files
 */
require_once __DIR__ . '/Owner.php';
require_once __DIR__ . '/Engine.php';
require_once __DIR__ . '/Car.php';

/**
 * This class represents a garage that stores cars in it.
 */
class Garage
{

    /**
     * This is the size of the garage and therefore
     * the total number of cars it can contain.
     */
    const SIZE = 5;

    /**
     * The array of cars in the garage
     * @var array
     */
    private $_arrCars = array();

    /**
     * Build a garage of cars
     *
     * @return \Part5\Garage
     */
    public static function buildGarage(): \Part5\Garage
    {
        // Create a garage object (this class)
        $objGarage = new self;

        // Create the engine object
        $objEngine = new \Part5\Engine(1.6, 'petrol', 4);

        // Create the car with the engine
        $objFirstCar = new \Part5\Car('Mazda', '3', 2013, 5, 5, $objEngine);

        // Create and aply the owners to the car
        $objFirstCar->addOwner(new \Part5\Owner('James', 'Tyler', '1992-06-17'));
        $objFirstCar->addOwner(new \Part5\Owner('Faye', 'Hammond', '1991-01-08'));

        // Add the car to the garage
        $objGarage->addCar($objFirstCar);

        // Create the car with the engine
        $objSecondCar = new \Part5\Car('BMW', '1 Series', 2019, 3, 5, $objEngine);

        // Create and add the current owner to the Car
        $objSecondCar->addOwner(new \Part5\Owner('John', 'Smith', '1974-10-28'));

        // Add the car to the garage
        $objGarage->addCar($objSecondCar);

        return $objGarage;
    }

    /**
     * Simply add a car to the private car list
     *
     * @param \Part5\Car $objCar
     *
     * @return \Part5\Garage
     */
    public function addCar(\Part5\Car $objCar): \Part5\Garage
    {
        // Do we have space for this car?
        if (!$this->hasSpace()) {
            throw new \Exception('Garage is full');
        }

        // Add the car into the list of cars
        $this->_arrCars[] = $objCar;

        return $this;
    }

    /**
     * Count the cars
     *
     * @return int
     */
    public function countCars(): int
    {
        return count($this->_arrCars);
    }

    /**
     * Does the garage have any space in it?
     *
     * @return bool
     */
    public function hasSpace(): bool
    {
        // Is the total number of cars less than the available size
        if ($this->countCars() < self::SIZE) {
            return true;
        } else {
            return false;
        }
    }

    /**
     * Returns how many free car spaces there are
     *
     * @return int
     */
    public function countSpaces(): int
    {
        // Total garage size minus total cars in the garage gives us the number of free spaces
        return self::SIZE - $this->countCars();
    }

    /**
     * Generator for getting each car out of the garage
     */
    public function getCars()
    {
        foreach ($this->_arrCars as $objCar) {
            yield $objCar;
        }
    }

}
