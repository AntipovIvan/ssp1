<?php

    if (!isset($_POST["submit"])) {
        exit ("Access Denied");
    } else {
        session_start();
        $printResult = "";
        $total = 0;
        if ($_POST["rice"] != 0) {
            $rice = $_POST["rice"];
            $g_rice = 500 * $rice;
            $total += $g_rice;
            $printResult .= "<p>Rice 1 kg 500 yen: "
            .$rice
            ." pieces "
            ."total: "
            .$g_rice
            ." yen</p>";
        } if ($_POST["squid"] != 0) {
            $squid = $_POST["squid"];
            $g_squid = 100 * $squid;
            $total += $g_squid;
            $printResult .= "<p>Squid 1 kg 100 yen: "
            .$squid
            ." pieces "
            ."total: "
            .$g_squid
            ." yen</p>";
        } if ($_POST["uma"] != 0) {
            $uma = $_POST["uma"];
            $g_uma = 12 * $uma;
            $total += $g_uma;
            $printResult .= "<p>Uma 1 kg 12 yen: "
            .$uma
            ." pieces "
            ."total: "
            .$g_uma
            ." yen</p>";
        }
        $printResult .="<p>Sum: "
        .$total
        ." yen</p>";
        
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
            print "<p>"
                .$_SESSION["name"]
                ."さん　こんにちは。</p>";
        ?>
        <?php
            print $printResult;
        ?>
        <form method="POST" action="shop4.php">
            <input type="submit" name="confirm" value="確認" />
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