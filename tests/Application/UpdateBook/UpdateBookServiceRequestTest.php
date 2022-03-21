<?php

namespace Library\Tests\Application\UpdateBook;

use Library\Application\UpdateBook\UpdateBookServiceRequest;
use PHPUnit\Framework\TestCase;

class UpdateBookServiceRequestTest extends TestCase
{
    private UpdateBookServiceRequest $updateBookServiceRequest;

    protected function setUp(): void
    {
        $this->updateBookServiceRequest = new UpdateBookServiceRequest(
           'title',
           'author',
           'image',
           'theme',
           'synopsis'
        );
    }

    public function testImage(): void
    {
        self::assertEquals('image', $this->updateBookServiceRequest->image());
    }

    public function testTitle(): void
    {
        self::assertEquals('title', $this->updateBookServiceRequest->title());
    }

    public function testTheme(): void
    {
        self::assertEquals('theme', $this->updateBookServiceRequest->theme());
    }

    public function testAuthor(): void
    {
        self::assertEquals('autor', $this->updateBookServiceRequest->author());
    }

    public function testSynopsis(): void
    {
        self::assertEquals('synopsis', $this->updateBookServiceRequest->synopsis());
    }
}
