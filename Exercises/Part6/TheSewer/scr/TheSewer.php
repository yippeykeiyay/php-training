<?php

//This class is where the astrubute turtles will live

class TheSewer {

    const SIZE = 4;

    /**
     * This is the turtle list
     * @var array
     */
    private $_arrNinjaTurtles = array();

    /**
     * This says that is the number of turtle is bigger than 4, throw an explenation
     * @param NinjaTurtle $objNinjaTurtle
     * @return \TheSewer
     * @throws Exception
     */
    public function addNinjaTurtle(NinjaTurtle $objNinjaTurtle): TheSewer {
        //Validates there is enough space
        if ((count($this->_arrNinjaTurtle) + 1) > self::SIZE) {
            throw new Exception('No Room my bro!!');
        }

        //Add starfish to the list
        $this->_arrNinjaTurtle[] = $objNinjaTurtle;
        return $this;
    }

}
