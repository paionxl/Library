<?php

namespace Library\Domain\Book;

class BookTitle
{
    private string $title;

    public function __construct(string $title)
    {
        $this->title = $title;
    }

    public function title(): string
    {
        return $this->title;
    }
}
