<?php

/**
 * This class represents a Pond and allows us to add and remove Frogs to/from it
 */
class Pond
{

    /**
     * Size of the pond
     */
    const SIZE = 12;

    /**
     * List of Frogs
     * @var array
     */
    public $arrFrogs = array();

    /**
     * Count the total size of the Frogs in the Pond
     *
     * @return int
     */
    private function _countTotalFrogSize(): int
    {
        $space_used = 0;

        // Loop over the Frogs and add up their sizes
        foreach ($this->arrFrogs as $objFrog) {
            $space_used += $objFrog->getSize();
        }

        return $space_used;
    }

    /**
     * Validates there's space for the Frog. If there is, we
     * add it to the list using its name as the unique key
     *
     * @param Frog $objFrog
     *
     * @return Pond
     *
     * @throws \Exception
     */
    public function addFrog(Frog $objFrog): Pond
    {
        // Get the total Frog size and add the new Frog's size to it
        $new_space_used = $this->_countTotalFrogSize() + $new_size;

        // Check if the new space used exceeds the size of the pond
        if ($new_space_used > self::SIZE) {
            throw new \Exception("{$objFrog->getName()} will not fit");
        }

        // Add the frog to the list
        $this->arrFrogs[] = $objFrog;

        return $this;
    }

}
