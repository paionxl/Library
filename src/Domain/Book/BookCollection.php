<?php

namespace Library\Domain\Book;

class BookCollection
{
    /** @var Book[] $books  */
    private array $books;

    public function construct(array $books = [])
    {
        $this->books = $books;
    }

    public function getBooks(): array
    {
        return $this->books;
    }

    public function add(Book $book): void
    {
        $this->books[] = $book;
    }
}
