<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Including PHP</title>
</head>
<body>
    <?php
        $title = "My First Post";
        $author = "Mike";
        $wordCount = 400;
        include "article-header.php";
        include "useful-tools.php";
        echo "<br>";
        echo $feetInMile;
        echo "<br>";
        sayHi("mike");
    ?>
</body>
</html>