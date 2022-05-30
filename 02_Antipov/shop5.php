<?php

    // Cookie
    $_COOKIE['name'];
    $_COOKIE["password"];

    if (!isset($_POST["submit"])) {
        exit ("Access Denied");
    } else {
        session_start();
        $printResult = "";
        $total = 0;
        if ($_POST["contactName"] != 0 && $_POST["contactName"] != null) {
            $contactName = $_POST["contactName"];
            $printResult .= "<p>お届け先氏名:　"
            .$contactName
            ."</p>";
        } if ($_POST["contactAddress"] != 0 && $_POST["contactAddress"] != null) {
            $contactAddress = $_POST["contactAddress"];
            $printResult .= "<p>住所:　"
            .$contactAddress
            ."</p>";
        } if ($_POST["contactNumber"] != 0 && $_POST["contactNumber"] != null) {
            $contactNumber = $_POST["contactNumber"];
            $printResult .= "<p>電話番号:　"
            .$contactNumber
            ."</p>";
        } if ($_POST["deliveryTime"] != '') {
            $deliveryTime = $_POST["deliveryTime"];
            $printResult .= "<p>お届け時間:　"
            .$deliveryTime
            ."</p>";
        } 
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
        <?php
            print $printResult;
        ?>
        <form method="POST" action="shop6.php">
            <input type="submit" name="submit" value="決定" />
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