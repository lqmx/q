<?php
/**
 * 允许使用不同的接口重构某个类，可以允许使用不同的调用方式进行调用
 */

class SimpleBook {

    private $author;
    private $title;

    public function __construct($author_in, $title_in)
    {
        $this->author = $author_in;
        $this->title = $title_in;
    }

    public function getAuthor(){
        return $this->author;
    }

    public function getTitle(){
        return $this->title;
    }
}

class BookAdapter {
    private $book;

    public function __construct(SimpleBook $book_in)
    {
        $this->book = $book_in;
    }

    public function getAuthorAndTitle() {
        return $this->book->getTitle().' by '.$this->book->getAuthor();
    }
}

$book = new SimpleBook("Gamma, Helm, Johnson, and Vlissides", "Design Patterns");
$bookAdapter = new BookAdapter($book);
echo 'Author and Title '.$bookAdapter->getAuthorAndTitle(), PHP_EOL;
