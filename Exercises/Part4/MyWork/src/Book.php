<?php

class Book
{

    /**
     * The Book's ID number
     * @var int
     */
    public $id;

    /**
     * The Book's title
     * @var string
     */
    public $title;

    /**
     * The author's name
     * @var string
     */
    public $author;

    /**
     * The number of pages in the book
     * @var int
     */
    public $num_pages;

    /**
     * Set the required variables to the class
     *
     * @param int $id
     * @param string $title
     * @param string $author
     * @param int $num_pages
     */
    public function __construct(int $id, string $title, string $author, int $num_pages)
    {
        $this->id = $id;
        $this->title = $title;
        $this->author = $author;
        $this->num_pages = $num_pages;
    }

}
