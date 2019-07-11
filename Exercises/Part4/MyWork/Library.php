<?php

class Library
{

    /**
     * The size of the library
     */
    const SIZE = 5;

    /**
     * The private list of books
     * @var array
     */
    private $_arrBooks = array();

    public function addBook(Book $objBook): Library
    {
        if ((count($this->_arrBooks) + 1) > self::SIZE) {
            throw new Exception('Library is full :(');
        }

        $this->_arrBooks[] = $objBook;
        return $this;
    }

}
