<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Constructors</title>
</head>
<body>
    <?php
        class Book{
        var $title;
        var $author;
        var $pages;
        function __construct($aTitle, $aAuthor, $aPages)
            {
                $this->title = $aTitle;
                $this->author = $aAuthor;
                $this->pages = $aPages;
            }
        }

        $book1 = new Book("Harry Potter", "JK Rowling", 400);

        $book2 = new Book("Lord of the Rings", "Tolkien", 700);

        echo $book1->title;
        echo "<br> $book1->author";
        echo "<br>";
        echo $book2->title;
        echo "<br> $book2->author";
    ?>
</body>
</html>