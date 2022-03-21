<?php

namespace Library\Tests\Domain\Book;

use Library\Domain\Book\BookTitle;
use PHPUnit\Framework\TestCase;

class BookTitleTest extends TestCase
{
    private BookTitle $bookTitle;

    protected function setUp(): void
    {
        $this->bookTitle = new BookTitle('Harry potter');
    }

    public function testItShouldReturnName(): void
    {
        self::assertEquals('Harry potter', $this->bookTitle->title());
    }
}
