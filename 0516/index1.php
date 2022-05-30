<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="style.css">
    <title>Form test</title>
</head>

<body>
    <?php
        require("test.php");
    ?>

    <form action="" method="POST">
        <p>User: <input type="email" name="email"></p>
        <p>Password: <input type="password" name="password"></p>
        <p>Subscribe to Newsletters<input type="checkbox" name="checkbox" value="Message"></p>
        <p>Address: <select name="address">
                <option value="Tokyo" selected>Tokyo</option>
                <option value="Kyoto">Kyoto</option>
                <option value="Osaka">Osaka</option>
                <option value="Hakata">Hakata</option>
            </select>
        </p>
        <p><textarea name="message" id="message" cols="40" rows="10"></textarea></p><br>
        <input type="submit" name="submit" value="Submit">
    </form>
</body>

</html>