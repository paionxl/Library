<?php

namespace Library\Tests\Domain\Book;

use Library\Domain\Book\BookSynopsis;
use PHPUnit\Framework\TestCase;

class BookSynopsisTest extends TestCase
{
    private BookSynopsis $bookSynopsis;

    protected function setUp(): void
    {
        $this->bookSynopsis = new BookSynopsis('an amazing adventure');
    }

    public function testItShouldReturnText(): void
    {
        self::assertEquals('an amazing adventure', $this->bookSynopsis->text());
    }
}
