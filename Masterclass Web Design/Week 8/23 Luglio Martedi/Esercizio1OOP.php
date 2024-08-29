<?php
class Book {
    public string $title = "";
    public string $author = "";
    public int $year = 0;

    public function __construct(string $title, string $author, int $year) {
        $this->title = $title;
        $this->author = $author;
        $this->year = $year;
    }

    public function getBookInfo() {
        return "Titolo: " . $this->title . "<br> Autore: " . $this->author . "<br>Anno: " . $this->year;
    }

    public static function getTotalBooks () {
        
    }
}

class Library {
    public array $library = [];
    public int $bookamount = 0;

    public function addBook(Book $book1) {
        $this->library[] = $book1;
    }

    public function removeBook(string $titolo) {
        foreach ($this->library as $key => $value) {
            if ($value->title == $titolo) {
                unset($this->library[$key]);
            }
        }
    }

    public function showBooks() {
        foreach ($this->library as $key => $value) {
            echo "Book ". $key ." Info: <br>". "Title: ".$value->title . "<br>Author: ".$value->author . " <br>Year: ".$value->year ."<br><br>";
        }
    }
}
$library = new Library();
$bookOne = new Book("Hi", "Hello", 1999);
$library->addBook($bookOne);
$bookTwo = new Book("Hello","What",2024);
$library->addBook($bookTwo);
$bookThree = new Book("No","Leave", 2013);
$library->addBook($bookThree);
$library->removeBook("No");
$library->showBooks();