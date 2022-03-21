<?php

namespace Library\Application\UpdateBook;

class UpdateBookServiceRequest
{
    private string $title;
    private string $author;
    private string $image;
    private string $theme;
    private string $synopsis;

    public function __construct(
        string $title,
        string $author,
        string $image,
        string $theme,
        string $synopsis
    ) {
        $this->validateNotEmpty($title);
        $this->validateNotEmpty($author);
        $this->validateNotEmpty($image);
        $this->validateNotEmpty($theme);
        $this->validateNotEmpty($synopsis);
        $this->validateNotNumeric($author);
        $this->validateNotNumeric($image);
        $this->validateNotNumeric($theme);
        $this->validateNotNumeric($synopsis);
        $this->title = $title;
        $this->author = $author;
        $this->image = $image;
        $this->theme = $theme;
        $this->synopsis = $synopsis;
    }

    public function title(): string
    {
        return $this->title;
    }

    public function author(): string
    {
        return $this->author;
    }

    public function image(): string
    {
        return $this->image;
    }

    public function theme(): string
    {
        return $this->theme;
    }

    public function synopsis(): string
    {
        return $this->synopsis;
    }

    private function validateNotEmpty(string $field): void
    {
        if (empty($field)) {
            throw new \InvalidArgumentException('A field is missing');
        }
    }

    private function validateNotNumeric(string $field): void
    {
        if (is_numeric($field)) {
            throw new \InvalidArgumentException('A field cannot be numeric');
        }
    }
}
