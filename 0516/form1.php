<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form send</title>
</head>

<body>
    <h2>Form sent successfuly</h2>
    <?php
        require("form1data.php");
        print "Name is: "
            .$name
            ."<br>";
        print "Action: "
            .$submit
            ."<br>"
            ."Success"
            ."<br>";
    ?>
</body>

</html>