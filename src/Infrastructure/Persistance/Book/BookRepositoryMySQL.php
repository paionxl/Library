<?php

namespace Library\Infrastructure\Persistance\Book;

use Library\Domain\Book\Book;
use Library\Domain\Book\BookCollection;
use Library\Domain\Book\BookIdentity;
use Library\Domain\Book\BookRepository;
use Library\Domain\Book\BookRepositoryCriteria;

class BookRepositoryMySQL implements BookRepository
{
    public function add(Book $book): void
    {
        // TODO: Implement add() method.
    }

    public function find(BookIdentity $identity): Book
    {
        // TODO: Implement find() method.
    }

    public function findByCriteria(BookRepositoryCriteria $criteria): BookCollection
    {
        // TODO: Implement findByCriteria() method.
    }

    public function delete(BookIdentity $identity): void
    {
        // TODO: Implement delete() method.
    }

    public function update(Book $book): void
    {
        // TODO: Implement update() method.
    }
}
