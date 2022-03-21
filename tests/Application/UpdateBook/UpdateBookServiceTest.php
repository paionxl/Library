<?php

namespace Library\Tests\Application\UpdateBook;

use Library\Application\UpdateBook\UpdateBookService;
use Library\Application\UpdateBook\UpdateBookServiceRequest;
use PHPUnit\Framework\TestCase;
use Library\Domain\UpdateBook\UpdateBookService as UpdateBook;
use PHPUnit\Framework\MockObject\MockObject;

class UpdateBookServiceTest extends TestCase
{
    private UpdateBookService $sut;

    /** @var UpdateBook&MockObject */
    private MockObject $updateBook;

    protected function setUp(): void
    {
        $this->updateBook = $this->createMock(UpdateBook::class);
        $this->sut = new UpdateBookService(
            $this->updateBook
        );
    }

    public function testItShouldExecute(): void
    {
        $this->updateBook
            ->expects(self::once())
            ->method('execute');
        $this->sut->execute(
            new UpdateBookServiceRequest(
                'title',
                'author',
                'string',
                'theme',
                'synopsis'
            )
        );
    }
}
