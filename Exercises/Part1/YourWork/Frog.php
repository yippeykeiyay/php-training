<?php

/**
 * This class represents a Frog and allows us to set its name and size
 */
class Frog
{

    /**
     * Minimum size of the Frog
     */
    CONST SIZE_MIN = 1;

    /**
     * Maximum size of the Frog
     */
    CONST SIZE_MAX = 5; 

    /**
     * The Frog's name
     * @var string
     */
    public $name;

    /**
     * The Frog's size
     * @var int
     */
    public $size;

    /**
     * Sets the Frogs name and size then validates things
     *
     * @param string $name
     * @param int $size
     */
    public function __construct(string $name, int $size)
    {
        $this->name = $name;
        $this->size = $size;

        $this->_validate();
    }

    /**
     * Returns the Frog's size
     *
     * @return int
     */
    public function getSize(): int
    {
        return (int) $this->size;
    }

    /**
     * Returns the Frog's name
     *
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * Validates the size meets the size requirements
     *
     * @throws \Exception
     */
    private function _validate()
    {
        if ($this->size < self::SIZE_MIN) {
            throw new \Exception("{$this->name} is too small");
        }
        if ($this->size > self::SIZE_MAX) {
            throw new \Exception("{$this->name} is too big");
        }
    }

}
