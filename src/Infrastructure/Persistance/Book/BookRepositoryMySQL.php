<?php

namespace Library\Infrastructure\Persistance\Book;

use Library\Domain\Book\Book;
use Library\Domain\Book\BookCollection;
use Library\Domain\Book\BookIdentity;
use Library\Domain\Book\BookRepository;
use Library\Domain\Book\BookRepositoryCriteria;
use Doctrine\DBAL\Driver\Connection;
use Doctrine\DBAL\DriverManager;

class BookRepositoryMySQL implements BookRepository
{
    private Connection $connection;

    public function __construct() 
    {
        $connectionParams = array(
            'url' => 'mysql://root:admin@db:3306/db'
        );
        $this->connection = DriverManager::getConnection($connectionParams);
    }

    public function add(Book $book): void
    {
        $query = 'INSERT INTO db.books (id, title, author, theme, image, synopsis) VALUES (:id, :title, :author, :theme, :image, :synopsis)';
        $this->connection->executeUpdate($query, $book->toArray());
    }

    public function find(BookIdentity $identity): Book
    {
        $query = 'SELECT * FROM db.books WHERE id=:id';
        return Book::fromArray($this->connection->executeUpdate($query, [$identity->value()]));
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
        $query = 'UPDATE db.books SET  title = :title, author = :author, theme = :theme, image = :image, synopsis = :synposis';
        $this->connection->executeUpdate($query, $book->toArray());
    }
}
