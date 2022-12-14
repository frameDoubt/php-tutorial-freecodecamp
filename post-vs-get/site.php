<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>POST vs GET</title>
</head>
<body>
    <form action="" method="post">
        Password: <input type="password" name="post-password"> <br>
        <input type="submit">
    </form>
    <br>
    <br>
    <?php
        echo $_POST["post-password"];
    ?>
</body>
</html>