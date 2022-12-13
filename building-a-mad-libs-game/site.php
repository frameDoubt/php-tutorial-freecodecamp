<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Building A Mad Libs Game</title>
</head>
<body>
    <form action="site.php" method="get">
        Color: <input type="text" name="color"> <br>
        Plural Noun: <input type="text" name="pluralNoun"> <br>
        Celebrity: <input type="text" name="celebrity"> <br>
        <input type="submit">
    </form>
    <br><br>
    <?php
        $user_color = $_GET["color"];
        $user_plural_noun = $_GET["pluralNoun"];
        $user_celebrity = $_GET["celebrity"];

        echo "Roses are $user_color <br>";
        echo "$user_plural_noun are blue <br>";
        echo "I love $user_celebrity <br>";
    ?>
</body>
</html>