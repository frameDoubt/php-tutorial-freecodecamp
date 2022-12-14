<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arrays</title>
</head>
<body>
    <?php
        $friends = array("Kevin", "Karen", "Oscar", "Jim");
        echo "$friends <br>";
        $friends[1] = 300;
        $friends[4] = "Pam";
        echo "$friends[4] <br>";
        echo count($friends);
    ?>
</body>
</html>