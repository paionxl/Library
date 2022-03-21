<?php

namespace Library\Tests\Application\AddBook;

use Library\Application\AddBook\AddBookServiceRequest;
use PHPUnit\Framework\TestCase;

class AddBookServiceRequestTest extends TestCase
{
    private AddBookServiceRequest $addBookServiceRequest;

    protected function setUp(): void
    {
        $this->addBookServiceRequest = new AddBookServiceRequest(
            'title',
            'author',
            'image',
            'theme',
            'synopsis'
        );
    }

    public function testImage(): void
    {
        self::assertEquals('image', $this->addBookServiceRequest->image());
    }

    public function testTitle(): void
    {
        self::assertEquals('title', $this->addBookServiceRequest->title());
    }

    public function testTheme(): void
    {
        self::assertEquals('theme', $this->addBookServiceRequest->theme());
    }

    public function testAuthor(): void
    {
        self::assertEquals('autor', $this->addBookServiceRequest->author());
    }

    public function testSynopsis(): void
    {
        self::assertEquals('synopsis', $this->addBookServiceRequest->synopsis());
    }
}
