<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Switch Statements</title>
</head>
<body>
    <form action="site.php" method="post">
        What was your grade? <br><br>
        <input type="text" name="grade"><br><br>
        <input type="submit">
    </form>
    <br>
    <?php
        $grade = $_POST["grade"];
        switch($grade) {
            case "A":
                echo "You did amazing";
                break;
            case "B":
                echo "You did alright";
                break;
            case "C":
                echo "You can do better next time";
                break;
            case "D":
                echo "You did very bad";
                break;
            case "F":
                echo "You failed, oh no!";
                break;
            default:
                echo "Invalid Grade";
        }
    ?>
</body>
</html>