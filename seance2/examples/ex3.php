<?php
// l'example suivant ne fonctionnera que sur la version 8.4 de PHP
class book {
    public protected(set) string $restricted;

    public function __construct(string restricted)
    {
        $this->restricted = $title;
    }
}

$book = new book("The Lord of the Rings");
$book->restricted = "The Hobbit";
print $book->restricted . "\n";
