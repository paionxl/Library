<?php

namespace Library\Domain\DeleteBook;

use Library\Domain\Book\BookIdentity;
use Library\Domain\Book\BookRepository;

class DeleteBookService {

    private BookRepository $bookRepository;

    public function __construct(BookRepository $bookRepository)
    {
        $this->bookRepository = $bookRepository;
    }

    public function execute(BookIdentity $bookIdentity): void
    {
        $this->bookRepository->delete($bookIdentity);
    }
}

