<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>While Loops</title>
</head>
<body>
    <?php
        $index = 1;
        while($index <= 5) {
            echo "$index <br>";
            $index++;
        }
        $newIndex = 6;
        do {
            echo "$newIndex <br>";
            $newIndex++;
        } while ($newIndex <= 5);
    ?>
</body>
</html>