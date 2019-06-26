<?php

namespace Part4;

/**
 * This class represents a garage that stores cars in it.
 */
class Garage
{

    /**
     * The array of cars in the garage
     * @var array
     */
    private $_arrCars = array();

    /**
     * Simply add a car to the private car list
     *
     * @param \Part4\Car $objCar
     *
     * @return \Part4\Garage
     */
    public function addCar(\Part4\Car $objCar): \Part4\Garage
    {
        // Add the car into the list of cars
        $this->_arrCars[] = $objCar;

        return $this;
    }

}
