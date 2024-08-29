<?php
interface SchedaBiblioteca {
    public function visualizzascheda();
}

class Libro {
    private string $title = '';
    private string $author = '';
    private string $year = 0;
    public function __construct($title, $author, $year){
        $this->title = $title;
        $this->author = $author;
        $this->year = $year;
    }

    public function getinfo(){
        echo 'Title: '.$this->title.' Author: '.$this->author.' Year: '.$this->year;
    }
}

class Romanzo extends Libro{
    private string $topic;
    public function __construct($title, $author, $year, $topic) {
        $this->topic = $topic;
        parent::__construct($title, $author, $year);
    }
}

class Saggio extends Libro{
    private string $type;
    public function __construct($title, $author, $year, $type) {
        $this->type = $type;
        parent::__construct($title, $author, $year);
    }
}