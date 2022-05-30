<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GET演習</title>
</head>

<body>
    <?php
        require("post01data.php");
    ?>
    <form action="" method="POST">
        <p><input type="text" name="message"></p>
        <input type="submit" name="submit" value="Submit">
    </form>
</body>

</html>