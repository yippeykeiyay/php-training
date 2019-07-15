<?php

/**
 * This class represents a Pond and allows us to add and remove Frogs to/from it
 */
class Pond
{

    /**
     * Size of the pond
     */
    const SIZE = 0;

    /**
     * Get the size of the Pond
     *
     * @return int
     */
    public function getSize(): int
    {
        return self::SIZE;
    }

}
