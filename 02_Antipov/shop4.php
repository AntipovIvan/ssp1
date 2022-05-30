<?php

    // Cookie
    $_COOKIE['name'];
    $_COOKIE["password"];

    if (!isset($_POST["confirm"])) {
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
        <form id="addressForm" method="POST" action="shop5.php">
            <p>お届け先氏名: <input type="text" name="contactName" id="contactName" required /></p>
            <p>住所: <input type="text" name="contactAddress" id="contactAddress" required /></p>
            <p>電話番号: <input type="tel" name="contactNumber" id="contactNumber" required /></p>
            <p>お届け時間:
                <select name="deliveryTime" id="">
                    <option value="指定なし" selected>指定なし</option>
                    <option value="午前中">午前中</option>
                    <option value="午後1時～5時">午後1時～5時</option>
                    <option value="午後6時～9時">午後6時～9時</option>
                </select>
            </p>
            <input type="button" value="クリア" onclick="document.getElementById('addressForm').reset(); 
                return false;" />
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

input[type='submit'],
input[type='button'] {
    cursor: pointer;
    padding: 10px;
    border-radius: 10px;
    width: 200px;
    font-size: large;
    border-color: white;
    background-color: blue;
    color: wheat;
}

input[type=submit]:hover,
input[type='button']:hover {
    background-color: #45a049;
}

input[type=text] {
    width: 100%;
    padding: 12px;
    border: 1px solid #ccc;
    border-radius: 4px;
    resize: vertical;
}
</style>

</html>