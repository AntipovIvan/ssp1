<?php
   
    if(!isset($_POST["submit"])) {
        exit("<h2>Access Denied</h2>");
    } else {
        $name = $_POST["name"];
        $password = $_POST["password"];
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
            print "<p>"
                .$name
                ."さん　こんにちは。</p>";
        ?>
        <h2>Select stuff</h2>
        <form method="POST" action="shop3.php">
            <p>Rice 1kg 500 yen
                <select name="rice" id="">
                    <option value=0 selected>Select quantity</option>
                    <option value=1>1 pack</option>
                    <option value=2>2 pack</option>
                    <option value=3>3 pack</option>
                    <option value=4>4 pack</option>
                </select>
            </p>
            <p>Squid 100 yen
                <select name="squid" id="">
                    <option value=0 selected>Select quantity</option>
                    <option value=1>1 pack</option>
                    <option value=2>2 pack</option>
                    <option value=3>3 pack</option>
                    <option value=4>4 pack</option>
                </select>
            </p>
            <p>Uma 12 yen
                <select name="uma" id="">
                    <option value=0 selected>Select quantity</option>
                    <option value=1>1 pack</option>
                    <option value=2>2 pack</option>
                    <option value=3>3 pack</option>
                    <option value=4>4 pack</option>
                </select>
            </p>
            <!-- <select name="stuff1" id="">
                <option value=0 selected>Select first stuff</option>
                <option value=4>iPhone</option>
                <option value=5>iPad</option>
                <option value=10>Mac Book</option>
                <option value=1>Samsung</option>
            </select><br>
            <select name="stuff2" id="">
                <option value=0 selected>Select second stuff</option>
                <option value=3>iChinaPhone</option>
                <option value=4>iChinaPad</option>
                <option value=8>China Mac Book</option>
                <option value=2>China Samsung</option>
            </select><br> -->
            <input type="submit" name="submit" value="購入" />
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