<?php

namespace Library\Tests\Application\DeleteBook;

use Library\Application\DeleteBook\DeleteBookService;
use PHPUnit\Framework\TestCase;
use Library\Domain\DeleteBook\DeleteBookService as DeleteBook;
use PHPUnit\Framework\MockObject\MockObject;

class DeleteBookServiceTest extends TestCase
{
    private DeleteBookService $sut;

    /** @var DeleteBook&MockObject */
    private MockObject $deleteBook;

    protected function setUp(): void
    {
        $this->deleteBook = $this->createMock(DeleteBook::class);
        $this->sut = new DeleteBookService(
            $this->deleteBook
        );
    }

    public function testItShouldExecute(): void
    {
        $this->deleteBook
            ->expects(self::once())
            ->method('execute');
        $this->sut->execute('identity');
    }
}
