<?php

    session_start();
    $_SESSION["username"] = $_POST["username"];

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- <link rel="stylesheet" href="style.css"> -->
    <title>Session training</title>
</head>

<body>
    <h1>Sweets</h1>

    <?php
        print "<p>Welcome "
            .$_SESSION["username"]
            ."-san</p>";
    ?>
    <form method="POST" action="sessionData.php">
        Taiwan Castela 400 yen
        <select name="kastela" id="">
            <option value="0" selected>How Much?</option>
            <option value="1">One</option>
            <option value="2">Two</option>
            <option value="3">Three</option>
            <option value="4">Four</option>
        </select><br>
        <input type="submit" name="submit" value="Buy" />
    </form>
</body>

</html>