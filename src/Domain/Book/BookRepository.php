<?php

namespace Library\Domain\Book;

interface BookRepository
{
    public function add(Book $book): void;

    public function find(BookIdentity $identity): Book;

    public function findByCriteria(BookRepositoryCriteria $criteria): BookCollection;

    public function delete(BookIdentity $identity): void;

    public function update(Book $book): void;
}
