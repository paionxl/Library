<?php

namespace Library\Application\AddBook;

use Library\Domain\Book\Author;
use Library\Domain\Book\Book;
use Library\Domain\Book\BookIdentity;
use Library\Domain\Book\BookImage;
use Library\Domain\Book\BookSynopsis;
use Library\Domain\Book\BookTheme;
use Library\Domain\Book\BookTitle;
use Library\Domain\AddBook\AddBookService as AddBook;

class AddBookService
{ 
    private AddBook $addBookService;

    public function __construct(AddBook $addBookService)
    {
        $this->addBookService = $addBookService;
    }

    public function execute(AddBookServiceRequest $request): void
    {
        $book = new Book(
            new BookIdentity(),
            new Author($request->author()),
            new BookImage($request->image()),
            new BookSynopsis($request->synopsis()),
            new BookTheme($request->theme()),
            new BookTitle($request->title())
        );

        $this->addBookService->execute($book);
    }
}
