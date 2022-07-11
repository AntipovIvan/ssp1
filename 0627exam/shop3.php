<?php
        session_start();
 
        $printResult = "";
        $total = 0;
        if ($_POST) {
            $iPhone = $_POST;
            $g_iPhone = $iPhone;
           
            $printResult .= "<p>iPhone 1本 4万円。<br>"
            ."全部　"
            .$iPhone
            ."本: ";
          
        } 
        // $printResult .="<p>会計: "
        // .$total
        // ." 円</p>";
        
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
    text-align: left;
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