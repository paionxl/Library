<?php

namespace Library\Domain\Book;

class BookRepositoryCriteria
{
    private string $like;

    public function __construct(string $like)
    {
        $this->like = $like;
    }

    public function like(): string
    {
        return $this->like;
    }

}
