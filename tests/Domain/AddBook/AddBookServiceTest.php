<?php

namespace Library\Tests\Domain\AddBook;

use Library\Domain\AddBook\AddBookService;
use Library\Domain\Book\Book;
use Library\Domain\Book\BookRepository;
use PHPUnit\Framework\TestCase;
use PHPUnit\Framework\MockObject\MockObject;

class AddBookServiceTest extends TestCase
{
    private AddBookService $sut;

    /** @var BookRepository&MockObject */
    private MockObject $bookRepository;

    protected function setUp(): void
    {
        $this->bookRepository = $this->createMock(BookRepository::class);
        $this->sut = new AddBookService(
            $this->bookRepository
        );
    }

    public function testItShouldExecute(): void
    {
        $this->bookRepository
            ->expects(self::once())
            ->method('add');
        $this->sut->execute($this->createMock(Book::class));
    }
}
