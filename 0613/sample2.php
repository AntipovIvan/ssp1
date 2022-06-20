<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
        $h=date('H');
        if (5<=$h && $h<12): 
    ?>

    <p>Good morning</p>

    <?php

        else:

    ?>

    <p>Good day</p>

    <?php

        endif;

    ?>
</body>

</html>