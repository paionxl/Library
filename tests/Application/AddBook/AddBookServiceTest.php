<?php

namespace Library\Tests\Application\AddBook;

use Library\Application\AddBook\AddBookService;
use Library\Application\AddBook\AddBookServiceRequest;
use Library\Domain\AddBook\AddBookService as AddBook;
use PHPUnit\Framework\TestCase;
use PHPUnit\Framework\MockObject\MockObject;

class AddBookServiceTest extends TestCase
{
    private AddBookService $sut;

    /** @var AddBook&MockObject */
    private MockObject $addBook;

    protected function setUp(): void
    {
        $this->addBook = $this->createMock(AddBook::class);
        $this->sut = new AddBookService(
            $this->addBook
        );
    }

    public function testItShouldExecute(): void
    {
        $this->addBook
            ->expects(self::once())
            ->method('execute');
        $this->sut->execute(
            new AddBookServiceRequest(
                'title',
                'author',
                'string',
                'theme',
                'synopsis'
            )
        );
    }
}
