<?php

namespace Library\Tests\Domain\Book;

use Library\Domain\Book\BookIdentity;
use PHPUnit\Framework\TestCase;

class BookIdentityTest extends TestCase
{
    private BookIdentity $bookIdentity;

    public function testItShouldBuildIdentities(): void
    {
        $this->bookIdentity = new BookIdentity();
        self::assertFalse(\empty($this->bookIdentity->value()));
    }

    public function testItShouldReturnValue(): void
    {
        $this->bookIdentity = new BookIdentity('identity');
        self::assertEquals('identity', $this->bookIdentity->value());
    }
}
