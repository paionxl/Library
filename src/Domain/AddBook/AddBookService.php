<?php

use Library\Domain\Book\Book;
use Library\Domain\Book\BookRepository;

class AddBookService
{
    private BookRepository $bookRepository;

    public function __construct(BookRepository $bookRepository)
    {
        $this->bookRepository = $bookRepository;
    }

    public function execute(Book $book): void
    {
        $this->bookRepository->add($book);
    }
}
