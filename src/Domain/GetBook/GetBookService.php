<?php

namespace Library\Domain\GetBook;

use Library\Domain\Book\Book;
use Library\Domain\Book\BookIdentity;
use Library\Domain\Book\BookRepository;

class GetBookService
{
    private BookRepository $bookRepository;

    public function __construct(BookRepository $bookRepository)
    {
        $this->bookRepository = $bookRepository;
    }

    public function execute(BookIdentity $bookIdentity): Book
    {
        return $this->bookRepository->find($bookIdentity);
    }
}
