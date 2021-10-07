<?php

namespace Library\Domain\Book;

class BookTheme
{
    private string $theme;

    public function __construct(string $theme)
    {
        $this->theme = $theme;
    }

    public function theme(): string
    {
        return $this->theme;
    }

}
