<?php

namespace Library\Tests\Domain\DeleteBook;

use Library\Domain\Book\BookIdentity;
use Library\Domain\Book\BookRepository;
use Library\Domain\DeleteBook\DeleteBookService;
use PHPUnit\Framework\TestCase;
use PHPUnit\Framework\MockObject\MockObject;

class DeleteBookServiceTest extends TestCase
{
    private DeleteBookService $sut;

    /** @var BookRepository&MockObject */
    private BookRepository $bookRepository;

    protected function setUp(): void
    {
        $this->bookRepository = $this->createMock(BookRepository::class);
        $this->sut = new DeleteBookService(
            $this->bookRepository
        );
    }

    public function testItShouldExecute(): void
    {
        $this->bookRepository
            ->expects(self::once())
            ->method('delete');
        $this->sut->execute(new BookIdentity());
    }
}
