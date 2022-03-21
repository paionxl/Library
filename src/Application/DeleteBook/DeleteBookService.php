<?php

namespace Library\Application\DeleteBook;

use Library\Domain\Book\BookIdentity;
use Library\Domain\DeleteBook\DeleteBookService as DeleteBook;

class DeleteBookService
{
    private DeleteBook $deleteBookService;

    public function __construct(DeleteBook $deleteBookService)
    {
        $this->deleteBookService = $deleteBookService;
    }

    public function execute(string $identity): void
    {
        $this->deleteBookService->execute(new BookIdentity($identity));
    }
}
