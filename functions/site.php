<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Functions</title>
</head>
<body>
    <?php
        function sayHi($name, $age){
            echo "Hello $name, you are $age<br>";
        }
        sayHi("Mike", 23);
        sayHi("Tom", 37);
        sayHi("Dave", 18);
    ?>
</body>
</html>