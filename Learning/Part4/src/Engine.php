<?php

namespace Part4;

/**
 * The class represents an engine and all of its attributes
 */
class Engine
{

    /**
     * The size of the engine
     * @var float
     */
    public $size;

    /**
     * The fuel type required
     * @var string
     */
    public $fuel;

    /**
     * The number of cylinder
     * @var int
     */
    public $cylinders;

    /**
     * Apply the supplied arguments to the class and run validation
     *
     * @param float $size
     * @param string $fuel
     * @param int $cylinders
     */
    public function __construct(float $size, string $fuel, int $cylinders)
    {
        // Apply the arguments to the class
        $this->size = $size;
        $this->fuel = $fuel;
        $this->cylinders = $cylinders;

        // Run validation
        $this->_validate();
    }

    /**
     * Validates that the fuel type is a correct value
     *
     * @return bool
     *
     * @throws InvalidArgumentException
     */
    private function _validate(): bool
    {
        if ($this->fuel !== 'petrol' && $this->fuel !== 'diesel') {
            throw new \InvalidArgumentException('Invalid fuel type supplied');
        }

        return true;
    }

}
