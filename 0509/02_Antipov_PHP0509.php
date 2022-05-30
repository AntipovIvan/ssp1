<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>
        <?php
            date_default_timezone_set("Asia/Tokyo");
            if (date('H:i:s') < '12:00:00' && date('H:i:s') > '06:00:00') {
                echo "午前 " 
                . date("h:i:s")
                . "<br>"
                . "おはよう。";
            } elseif (date('H:i:s') > '12:00:00' && date('H:i:s') < '18:00:00') {
                echo "午後 " 
                . date("h:i:s")
                . "<br>"
                . "こんにちは。";
            } elseif (date('H:i:s') > '18:00:00' || date('H:i:s') < '06:00:00') {
                echo date("h:i:s")
                . "<br>"
                . "こんばんは。";
            }
        ?>
    </h2>
</body>
<style>
        body{
            text-align:center;
            align-self: center;
            justify-content:center;
            margin: 12% auto
        }
    </style>
</html>