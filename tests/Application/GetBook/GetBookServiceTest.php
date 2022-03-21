<?php

namespace Library\Tests\Application\GetBook;

use Library\Application\GetBook\GetBookService;
use PHPUnit\Framework\TestCase;
use Library\Domain\GetBook\GetBookService as GetBook;
use PHPUnit\Framework\MockObject\MockObject;

class GetBookServiceTest extends TestCase
{
    private GetBookService $sut;

    /** @var GetBook&MockObject */
    private MockObject $getBook;

    protected function setUp(): void
    {
        $this->getBook = $this->createMock(GetBook::class);
        $this->sut = new GetBookService(
            $this->getBook
        );
    }

    public function testItShouldExecute(): void
    {
        $this->getBook
            ->expects(self::once())
            ->method('execute');
        $this->sut->execute('identity');
    }
}
