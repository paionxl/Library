<?php

namespace Library\Domain\Book;

class Book
{
    private BookIdentity $bookIdentity;
    private Author $author;
    private BookImage $bookImage;
    private BookSynopsis $bookSynopsis;
    private BookTheme $bookTheme;
    private BookTitle $bookTitle;

    public function __construct(
        BookIdentity $bookIdentity,
        Author $author,
        BookImage $bookImage,
        BookSynopsis $bookSynopsis,
        BookTheme $bookTheme,
        BookTitle $bookTitle,
    ) {
        $this->bookIdentity = $bookIdentity;
        $this->author = $author;
        $this->bookImage = $bookImage;
        $this->bookSynopsis = $bookSynopsis;
        $this->bookTheme = $bookTheme;
        $this->bookTitle = $bookTitle;
    }

}
