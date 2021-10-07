<?php

namespace Library\Domain\Book;

class BookIdentity
{
    private string $value;

    public function __construct()
    {
        $this->value = $this->guidv4();
    }

    private function guidv4(): string
    {
        // Generate 16 bytes (128 bits) of random data.
        $data = random_bytes(16);
        assert(strlen($data) == 16);

        // Set version to 0100
        $data[6] = chr(ord($data[6]) & 0x0f | 0x40);
        // Set bits 6-7 to 10
        $data[8] = chr(ord($data[8]) & 0x3f | 0x80);

        // Output the 36 character UUID.
        return vsprintf('%s%s-%s-%s-%s-%s%s%s', str_split(bin2hex($data), 4));
    }

    public function value(): string
    {
        return $this->value;
    }

}
