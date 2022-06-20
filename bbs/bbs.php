<?php

session_start();

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
    <h2>Touhou screen</h2>

    <?php

        print "<p>Touhousha: "
            .$_SESSION["username"]
            ."</p>";

    ?>
    <form method="POST" action="" accept-charset="UTF-8" enctype="multipart/form-data">
        <p><textarea name="msg" cols="70" rows="10"></textarea></p>
        Image(GIF/JPEG, max size 100 KB): <input type="file" name="upload" size="40">
        <input type="submit" value="submit" value="touhou">
    </form>

    <?php
        $m = $_SESSION["username"];
        print $m;

    ?>
</body>

</html>