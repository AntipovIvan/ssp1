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
            $uma = $_POST["rice"];
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

    
    // $_SESSION["rice"]=$_POST["rice"];
    // $_SESSION["squid"]=$_POST["squid"];
    // $_SESSION["uma"]=$_POST["uma"];
    // unset($_SESSION["username"]);

?>

<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Session training</title>
</head>

<body>
    <div class="message">
        <h2>レジ</h2>
        <?php
            print "<p>Thanks "
                .$_SESSION["name"]
                ."-san</p>"
        ?>
        <?php
            // $stuff1 = $_POST["stuff1"];
            // $stuff2 = $_POST["stuff2"];
            // print "<p>お会計： "
            //     .$stuff1 + $stuff2
            //     ."万円です</p>"
            print $printResult;
        ?>
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