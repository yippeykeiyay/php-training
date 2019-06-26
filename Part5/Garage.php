<?php

namespace Part5;

/**
 * This class represents a garage that stores cars in it.
 */
class Garage
{

    const SIZE = 5;

    /**
     * The array of cars in the garage
     * @var array
     */
    private $_arrCars = array();

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
