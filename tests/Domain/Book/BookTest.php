<?php

namespace Library\Tests\Domain\Book;

use Library\Domain\Book\Author;
use Library\Domain\Book\Book;
use Library\Domain\Book\BookIdentity;
use Library\Domain\Book\BookImage;
use Library\Domain\Book\BookSynopsis;
use Library\Domain\Book\BookTheme;
use Library\Domain\Book\BookTitle;
use PHPUnit\Framework\TestCase;

class BookTest extends TestCase
{
    private Book $book;

    protected function setUp(): void
    {
        $this->book = new Book(
            new BookIdentity(),
            new Author('poe'),
            new BookImage('url'),
            new BookSynopsis('an amazing adventure'),
            new BookTheme('adventure'),
            new BookTitle('Harry potter')
        );
    }

    public function testItShouldBeArrayable(): void
    {
        self::assertSame($this->book, Book::fromArray($this->book->toArray()));
    }
}
