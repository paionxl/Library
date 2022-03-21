<?php

namespace Library\Tests\Domain\Book;

use Library\Domain\Book\Author;
use PHPUnit\Framework\TestCase;

class AuthorTest extends TestCase
{
    private Author $author;

    protected function setUp(): void
    {
        $this->author = new Author('poe');
    }

    public function testItShouldReturnName(): void
    {
        self::assertEquals('poe', $this->author->name());
    }
}
