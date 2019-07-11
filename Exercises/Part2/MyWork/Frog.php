<?php

/**
 * This class represents a Frog and allows us to set its name and colour
 */
class Frog
{

    /**
     * The Frog's name
     * @var string
     */
    public $name;

    /**
     * The Frog's colour
     * @var string
     */
    public $colour;

    /**
     * Sets the Frogs name and colour
     *
     * @param string $name
     * @param string $colour
     */
    public function __construct(string $name, string $colour)
    {
        $this->name = $name;
        $this->colour = $colour;
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
     * Returns the Frog's colour
     *
     * @return string
     */
    public function getColour(): string
    {
        return $this->colour;
    }

}
