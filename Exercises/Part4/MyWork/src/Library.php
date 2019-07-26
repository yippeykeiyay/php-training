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

    /**
     * Add a book after checking it'll fit
     *
     * @param Book $objBook
     *
     * @return \Library
     *
     * @throws Exception
     */
    public function addBook(Book $objBook): Library
    {
        if ((count($this->_arrBooks) + 1) > self::SIZE) {
            throw new Exception('Library is full :(');
        }

        $this->_arrBooks[$objBook->id] = $objBook;
        return $this;
    }

    /**
     * Get a Book object by its ID from the Library
     *
     * @param int $id
     *
     * @return \Book
     */
    public function getBookById(int $id): Book
    {
        if ($this->_hasBook($id)) {
            return $this->_arrBooks[$id];
        }
    }

    /**
     * Remove a Book object from the Library by its ID
     *
     * @param int $id
     *
     * @return \Library
     */
    public function removeBookById(int $id): Library
    {
        if ($this->_hasBook($id)) {
            unset($this->_arrBooks[$id]);
        }

        return $this;
    }

    /**
     * Does the Library contain a Book?
     *
     * @param int $id
     *
     * @return bool
     *
     * @throws Exception
     */
    private function _hasBook(int $id): bool
    {
        if (!isset($this->_arrBooks[$id])) {
            throw new Exception("Book #{$id} does not exist");
        } else {
            return true;
        }
    }

}
