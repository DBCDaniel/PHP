<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width = device-width, initial-scale = 1.0">
        <meta http-equiv="X-UA-Compatible" content = "ie=edge">
        <title>Class and Objects</title>
    </head>
    <body>
        <?php
        //class
            class Book {
                //fields
                var $title;
                var $author;
                var $pages;
                //constructor
                function __construct()
                {
                    echo "new book created";
                    echo "<br>";
                }
            }
        //class
            class BookOver800Pages {
                //fields
                private $title;
                public $author;
                private $pages;
                
                //getter
                function getTitle(){
                    return $this->title;
                }
                
                //setter
                function setPages($count)
                {
                    if($count > 800)
                        $this->pages = $count;
                    else
                        $this->pages = 800;
                }
                //constructor
                function __construct($title, $author, $pages)
                {
                    $this->title = $title;
                    $this->author = $author;
                    $this->setPages($pages);
                    echo "new book created";
                    echo "<br>";
                }
                
                function hasManyPages($many)
                {
                    return ($this->pages > $many);
                }
            }
        //objects
            $book1 = new Book;
            $book1->title = "Harry Potter";
            $book1->author = "JK Rowling";
            $book1->pages = 400;
        
            $book2 = new BookOver800Pages("The Lord of The Rings", "RR Tolkien", 200);
            echo "book 1: $book1->title";
            echo "<br>";
            echo "book 2: ".$book2->getTitle();
            echo "<br>";
            echo "if many pages is 500 pages ";
            if($book2->hasManyPages(500))
                echo "then ".$book2->getTitle()." have many pages.";
            else
                echo "then ".$book2->getTitle()." don't have many pages.";
            echo "<br>";
            echo "if many pages is 1000 pages ";
            echo ($book2->hasManyPages(1000))
                ? "then ".$book2->getTitle()." have many pages." 
                : "then ".$book2->getTitle()." don't have many pages.";
            echo "<br>";
            
        ?>
    </body>
</html>