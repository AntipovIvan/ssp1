<?php
    $password = $_POST["password"];
    if(!isset($_POST["submit"]) || $password !== "771" ) {
        exit("<h2>Access Denied</h2>");
    }
?>

<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>演習問題 2</title>
</head>

<body>
    <div class="message">
        <h2>演習問題 2</h2>
        <p>Welcome!</p>
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
h2 {
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
</style>

</html>