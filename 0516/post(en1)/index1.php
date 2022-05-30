<?php
    $first = $_POST["first"];
    $second = $_POST["second"];
    if ($second != 0) {
        $division = number_format($first / $second, 3);
    } else {
        $division = "Error: Divided by zero";
    }
?>

<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>演習 1</title>
</head>

<body>
    <div class="message">
        <h2>演習問題 1 </h2>
        <?php
        print "Addition result: "
            ."$first + $second = "
            .$first + $second
            ."<br>";
        print "Multiplication result: "
            ."$first * $second = "
            .$first * $second
            ."<br>";
        print "Division result: "
            ."$first / $second = "
            .$division
            ."<br>";
        print "Subtraction result: "
            ."$first - $second = "
            .$first - $second
            ."<br>";
  
    ?>
    </div>

</body>
<style>
body {
    text-align: center;
    align-self: center;
    justify-content: center;
    margin: 12% auto;
    color: wheat;
}

.message {
    font-size: large;
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
    padding: 50px;
    box-shadow: 10px 5px 5px black;
}
</style>

</html>