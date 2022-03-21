<?php

namespace Library\Tests\Domain\Book;

use Library\Domain\Book\Book;
use Library\Domain\Book\BookCollection;
use PHPUnit\Framework\TestCase;

class BookCollectionTest extends TestCase
{
    private BookCollection $bookCollection;

    protected function setUp(): void
    {
        $this->bookCollection = new BookCollection(
            [
                $this->createMock(Book::class),
                $this->createMock(Book::class)
            ]
        );
    }

    public function testItShouldReturnBooks(): void
    {
        self::assertEquals(2, \count($this->bookCollection->getBooks()));
    }

    public function testItShouldAddBooks(): void
    {
        $this->bookCollection->add($this->createMock(Book::class));
        self::assertEquals(3, \count($this->bookCollection->getBooks()));
    }
}
