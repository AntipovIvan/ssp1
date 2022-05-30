<?php
   
    if(!isset($_POST["submit"])) {
        exit("<h2>Access Denied</h2>");
    } else {
        // Session
        $name = $_POST["name"];
        $password = $_POST["password"];

        // Cookie
        $cookie_name = $_POST["name"];
        $cookie_password = $_POST["password"];
        $_COOKIE['name'] = $cookie_name;
        $_COOKIE['password'] = $cookie_password;
        setcookie('name', $cookie_name, time() + (86400 * 30), "/"); // 86400 = 1 day
        setcookie('password', $password, time() + (86400 * 30), "/"); 
        
        $_SESSION["password"] = $_POST["password"];
        if ($password == "771" && $name == "aw") {
            session_start();
            $_SESSION["name"] = $_POST["name"];
        }
        else {
            header("Location: shop1.php");
        }
    }
   
?>

<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>実技試験</title>
</head>

<body>
    <div class="message">
        <?php
            print "<h2>"
                .$name
                ."さん　こんにちは。</h2>";
        ?>
        <h3>商品を選んでください</h3>
        <form method="POST" action="shop3.php">
            <p>iPhone 1本 4万円
                <select name="iPhone" id="">
                    <option value=0 selected>何本</option>
                    <option value=1>1本</option>
                    <option value=2>2本</option>
                    <option value=3>3本</option>
                    <option value=4>4本</option>
                </select>
            </p>
            <p>iPad 1本 6万円
                <select name="iPad" id="">
                    <option value=0 selected>何本</option>
                    <option value=1>1本</option>
                    <option value=2>2本</option>
                    <option value=3>3本</option>
                    <option value=4>4本</option>
                </select>
            </p>
            <p>Mac Book 1台 12万円
                <select name="MacBook" id="">
                    <option value=0 selected>何台</option>
                    <option value=1>1台</option>
                    <option value=2>2台</option>
                    <option value=3>3台</option>
                    <option value=4>4台</option>
                </select>
            </p>
            <input type="submit" name="add" value="購入" />
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

select {
    border-radius: 6px;
    border-color: blue;
    border-width: 1px;
    padding: 5px;
    margin-bottom: 10px;
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

input[type=text],
select,
textarea {
    width: 100%;
    padding: 12px;
    border: 1px solid #ccc;
    border-radius: 4px;
    resize: vertical;
}
</style>

</html>