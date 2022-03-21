<?php

namespace Library\Tests\Domain\UpdateBook;

use Library\Domain\Book\Book;
use Library\Domain\Book\BookRepository;
use Library\Domain\UpdateBook\UpdateBookService;
use PHPUnit\Framework\TestCase;
use PHPUnit\Framework\MockObject\MockObject;

class UpdateBookServiceTest extends TestCase
{
    private UpdateBookService $sut;

    /** @var BookRepository&MockObject */
    private BookRepository $bookRepository;

    protected function setUp(): void
    {
        $this->bookRepository = $this->createMock(BookRepository::class);
        $this->sut = new UpdateBookService(
            $this->bookRepository
        );
    }

    public function testItShouldExecute(): void
    {
        $this->bookRepository
            ->expects(self::once())
            ->method('update');
        $this->sut->execute($this->createMock(Book::class));
    }
}
