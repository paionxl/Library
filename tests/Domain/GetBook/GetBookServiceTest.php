<?php

namespace Library\Tests\Domain\GetBook;

use Library\Domain\Book\Book;
use Library\Domain\Book\BookIdentity;
use Library\Domain\Book\BookRepository;
use Library\Domain\GetBook\GetBookService;
use PHPUnit\Framework\TestCase;
use PHPUnit\Framework\MockObject\MockObject;

class GetBookServiceTest extends TestCase
{
    private GetBookService $sut;

    /** @var BookRepository&MockObject */
    private BookRepository $bookRepository;

    protected function setUp(): void
    {
        $this->bookRepository = $this->createMock(BookRepository::class);
        $this->sut = new GetBookService(
            $this->bookRepository
        );
    }

    public function testItShouldExecute(): void
    {
        $book = $this->createMock(Book::class);
        $this->bookRepository
            ->expects(self::once())
            ->method('find')
            ->willReturn($book);
        self::assertEquals($book, $this->sut->execute(new BookIdentity()));
    }
}
