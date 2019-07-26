<?php

/**
 * This class represents a Pond and allows us to add and remove Frogs to/from it
 */
class Pond
{

    /**
     * Size of the pond
     */
    const SIZE = 2;

    /**
     * List of Frogs
     * @var array
     */
    public $arrFrogs = array();

    /**
     * Validates there's space for the Frog. If there is we
     * add it to the list. If not we throw and exception.
     *
     * @param Frog $objFrog
     *
     * @return \Pond
     *
     * @throws \Exception
     */
    public function addFrog(Frog $objFrog): Pond
    {
        $new_count = (count($this->arrFrogs) + 1);

        if ($new_count > self::SIZE) {
            throw new Exception("The Pond doesn't have enough space for {$objFrog->getName()} :(");
        }

        // Add the frog to the list
        $this->arrFrogs[] = $objFrog;

        return $this;
    }

}
