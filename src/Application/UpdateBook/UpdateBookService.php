<?php

namespace Library\Application\UpdateBook;

use Library\Domain\Book\Author;
use Library\Domain\Book\Book;
use Library\Domain\Book\BookIdentity;
use Library\Domain\Book\BookImage;
use Library\Domain\Book\BookSynopsis;
use Library\Domain\Book\BookTheme;
use Library\Domain\Book\BookTitle;
use Library\Domain\UpdateBook\UpdateBookService as UpdateBook;

class UpdateBookService
{
    private UpdateBook $updateBookService;

    public function __construct(UpdateBook $updateBookService)
    {
        $this->updateBookService = $updateBookService;
    }

    public function execute(UpdateBookServiceRequest $request): void
    {
        $book = new Book(
            new BookIdentity(),
            new Author($request->author()),
            new BookImage($request->image()),
            new BookSynopsis($request->synopsis()),
            new BookTheme($request->theme()),
            new BookTitle($request->title())
        );

        $this->updateBookService->execute($book);
    }
}
