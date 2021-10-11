<?php

namespace Library\Application\GetBook;

use Library\Domain\GetBook\GetBookService as GetBook;
use Library\Domain\Book\BookIdentity;

class GetBookService
{
    private GetBook $getBookService;

    public function __construct(GetBook $getBookService)
    {
        $this->getBookService = $getBookService;
    }

    public function execute(string $id): void
    {
        $identity = new BookIdentity($id);

        $this->getBookService->execute($identity);
    }
}
