<?php

abstract class Book{
    public abstract function getName();
}

class CookingBook extends Book{
    private $name = "Cooking Book";
    public function getName(){
        return $this->name;
    }
}
class ScienceBook extends Book{
    private $name = "Science Book";
    public function getName(){
        return $this->name;
    }
}

class BookManager{
    const COOKINGBOOK = 'cooking';
    const SCIENCEBOOK = 'science';

    private $book;

    public function __construct($book='cooking'){
        $this->book = $book;
    }

    public function getBook(){
        switch($this->book){
            case (BookManager::COOKINGBOOK):
                return new CookingBook;
                break;
            case (BookManager::SCIENCEBOOK):
                return new ScienceBook;
                break;
        }
    }
}

$book = new BookManager('science');
$scienceBook = $book->getBook();
print_r($scienceBook);


?>