<?php

    if(isset($_COOKIE["count"])) {
        $count=$_COOKIE["count"]+1;
    } else {
        $count = 1;
    }
    $flg=setcookie("count",$count,time()+20);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Cookie training</title>
</head>

<body>
    <h1>Cookies</h1>
    <?php
        print "<p>Order Quantity: "
            .$count
            ." pieces </p>";
    ?>
</body>

</html>