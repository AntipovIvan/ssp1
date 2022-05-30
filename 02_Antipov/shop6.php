<?php

if (!isset($_POST["submit"])) {
    exit ("Access Denied");
} else {
    session_start();
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
    <div class="message">
        <?php
            print "<h2>"
                .$_SESSION["name"]
                ."さん　こんにちは。</h2>";
        ?>
        <h3>ご購入ありがとうございました。</h3>
        <form action="shop1.php" method="post">
            <input name="return" type="hidden" />
            <input type="submit" value="ログアウト" />
        </form>
    </div>
</body>
<style>
body {
    text-align: center;
    align-self: center;
    justify-content: center;
    margin: 12% auto;
}

p,
h2,
h3 {
    background-color: blue;
    border-radius: 6px;
    border-width: 1px;
    padding: 5px;
    color: wheat;
}

form {
    margin: 10% auto;
}

.message {
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

input[type='submit'] {
    cursor: pointer;
    padding: 10px;
    border-radius: 10px;
    width: 200px;
    font-size: large;
    border-color: white;
    background-color: blue;
    color: wheat;
}

input[type=submit]:hover {
    background-color: #45a049;
}
</style>

</html>