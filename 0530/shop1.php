<?php

if (isset($_POST['return'])) {
    // echo '<script>alert("Fired")</script>';
    setcookie(session_name(), '', 100);
    session_unset();
    $_SESSION = array();
}

?>

<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>実技試験</title>
</head>

<body>
    <h2>
        <?php
            date_default_timezone_set("Asia/Tokyo");
            if (date('H:i:s') < '12:00:00' && date('H:i:s') > '06:00:00') {
                echo "午前 " 
                . date("h:i:s")
                . "<br>";
            } elseif (date('H:i:s') > '12:00:00' && date('H:i:s') < '18:00:00') {
                echo "午後 " 
                . date("h:i:s")
                . "<br>";
            } elseif (date('H:i:s') > '18:00:00' || date('H:i:s') < '06:00:00') {
                echo date("h:i:s")
                . "<br>";
            }
        ?>
    </h2>
    <form method="POST" action="shop2.php">
        <p>ユーザー名: <input type="text" name="name" /></p>
        <p>パスワード: <input type="password" name="password" /></p>
        <input type="submit" name="submit" value="Submit" />
    </form>
</body>
<style>
body {
    text-align: center;
    align-self: center;
    justify-content: center;
    margin: 12% auto;
}

form {
    display: flex;
    flex-direction: column;
    align-self: center;
    align-items: center;
    background-color: blue;
    flex-wrap: wrap;
    text-align: center;
    margin: 10% auto;
    width: 500px;
    max-width: calc(100% - 20px);
    box-shadow: 10px 5px 5px black;
}

input[type='password'],
input[type='text'] {
    border-radius: 6px;
    border-color: blue;
    border-width: 1px;
    padding: 5px;
}

p,
h2 {
    background-color: blue;
    border-radius: 6px;
    border-width: 1px;
    padding: 5px;
    color: wheat;
}

input[type='submit'] {
    padding: 10px;
    border-radius: 10px;
    width: 200px;
    font-size: large;
    border-color: white;
    background-color: blue;
    color: wheat;
}
</style>

</html>