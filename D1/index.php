<?php
    $message = $_GET["message"];
    $submit = $_GET["submit"];

    if ($message > 50) {
            echo ' 大きすぎます';
        } elseif ($message < 50) {
            echo ' 小さすぎます';
        } else {
            echo $message.' です';
        }
?>

<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>GET演習</title>
</head>

<body>
    <form action="" method="GET">
        <p><input type="number" name="message" required /></p>
        <input type="submit" name="submit" value="Submit" />
    </form>
</body>

</html>