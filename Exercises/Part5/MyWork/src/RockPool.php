<?php

class RockPool {

    const SIZE = 2;

    /**
     * This is the starfish list
     * @var array
     */
    private $_arrStarFish = array();

    /**
     * This says that if the number of starfish is bigger than 2, throw an exeption
     * @param StarFish $objStarFish
     * @return \RockPool
     * @throws Exception
     */
    public function addStarFish(StarFish $objStarFish): RockPool {
        //Validate that we have enough space
        if ((count($this->_arrStarFish) + 1) > self::SIZE) {
            throw new Exception('RockPool is Full!');
        }

        //Add starfish to the list
        $this->_arrStarFish[] = $objStarFish;
        return $this;
    }

}
