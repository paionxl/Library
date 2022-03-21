<?php

namespace Library\Tests\Domain\Book;

use Library\Domain\Book\BookImage;
use PHPUnit\Framework\TestCase;

class BookImageTest extends TestCase
{
    private BookImage $bookImage;

    protected function setUp(): void
    {
        $this->bookImage = new BookImage('url');
    }

    public function testItShouldReturnPath(): void
    {
        self::assertEquals('url', $this->bookImage->path());
    }
}
