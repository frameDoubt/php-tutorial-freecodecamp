<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Working with Strings</title>
</head>
<body>
    <?php
        $phrase = "Giraffe Academy";
        echo strtolower($phrase);
        echo "<br>";
        echo strtoupper($phrase);
        echo "<br>";
        echo strlen($phrase);
        echo "<br>";
        echo $phrase[0];
        echo "<br>";
        echo str_replace("Giraffe", "Panda", $phrase);
        echo "<br>";
        echo substr($phrase, 0, 7);
    ?>
</body>
</html>