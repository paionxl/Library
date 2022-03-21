<?php

namespace Library\Tests\Domain\Book;

use Library\Domain\Book\BookTheme;
use PHPUnit\Framework\TestCase;

class BookThemeTest extends TestCase
{
    private BookTheme $bookTheme;

    protected function setUp(): void
    {
        $this->bookTheme = new BookTheme('adventure');
    }

    public function testItShouldReturnTheme(): void
    {
        self::assertEquals('adventure', $this->bookTheme->theme());
    }
}
