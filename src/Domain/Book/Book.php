<?php

namespace Library\Domain\Book;

class Book
{
    private BookIdentity $bookIdentity;
    private Author $author;
    private BookImage $bookImage;
    private BookSynopsis $bookSynopsis;
    private BookTheme $bookTheme;
    private BookTitle $bookTitle;

    public function __construct(
        BookIdentity $bookIdentity,
        Author $author,
        BookImage $bookImage,
        BookSynopsis $bookSynopsis,
        BookTheme $bookTheme,
        BookTitle $bookTitle
    ) {
        $this->bookIdentity = $bookIdentity;
        $this->author = $author;
        $this->bookImage = $bookImage;
        $this->bookSynopsis = $bookSynopsis;
        $this->bookTheme = $bookTheme;
        $this->bookTitle = $bookTitle;
    }

    public function toArray(): array
    {
        return [
            'id' => $this->bookIdentity->value(),
            'title' => $this->bookTitle->title(),
            'author' => $this->author->name(),
            'theme' => $this->bookTheme->theme(),
            'image' => $this->bookImage->path(),
            'synopsis' => $this->bookSynopsis->text()
        ];
    }

    public static function fromArray(array $data): Book
    {
        return new self(
            new BookIdentity($data['id']),
            new BookTitle($data['title']),
            new BookAuthor($data['author']),
            new BookTheme($data['theme']),
            new BookImage($data['image']),
            new BookSynopsis($data['synopsis'])
        );
    }

}
