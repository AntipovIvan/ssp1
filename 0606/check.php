<?php

    session_start();
    include("dbconnect.php");

    if (!isset($_SESSION["join"])) {
        header("Location: newUser.php");
        exit();
    }
    if (isset($_POST["submit"])) {
        $sql=sprintf('INSERT INTO users SET user="%s", password="%s"', 
            mysqli_real_escape_string($con, $_SESSION["join"]["user"]), 
            mysqli_real_escape_string($con, $_SESSION["join"]["password"]));
        mysqli_query($con, $sql);
        unset($_SESSION["join"]);

        header("Location: thanks.html");
        exit();
    }
    mysqli_close($con);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h2>Confirmation</h2>

    <dl>
        <dt>User name:</dt>
        <dd>
            <?php
                echo htmlspecialchars($_SESSION["join"]["user"], ENT_QUOTES, "UTF-8");
            ?>
        </dd>
        <dt>Password:</dt>
        <dd>[N/A]</dd>
    </dl>
    <p><a href="newuser.php?action=rewrite">Change</a></p>
    <form method="POST" action="">
        <input type="submit" name="submit" value="Register">
    </form>
</body>

</html>