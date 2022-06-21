<?php

    session_start();
    include("img_file_name.php");
    include("dbconnect.php");
    $m = "";
    $user = $_SESSION["username"];

    if (isset($_POST["submit"])) {
        $u_id = $_SESSION["userId"];
        $msg = $_POST["msg"];
        $img = img_file_name();
        date_default_timezone_set('Asia/Tokyo');
        $date = date('d-m-y h:i:s');
       
        $sql = "INSERT INTO 
                    bbs (u_id, msg, date, img) 
                VALUES 
                    ('$u_id', '$msg', '$date', '$img')";
                    
        $rst = mysqli_query($con, $sql);
    }

    $sql = "SELECT 
                *, bbs.id as b_id, 
                users.user as u_name 
            FROM 
                bbs 
            LEFT JOIN users ON 
                bbs.u_id = users.id 
            ORDER BY 
                bbs.id 
            DESC";
    
    $rst = mysqli_query($con, $sql);
    
    while ($row = mysqli_fetch_array($rst)) {
        $m .= "<p>"
            .$row['b_id']
            ." ";
        $m .= $row['u_name']
            ." ";   
        $m .= $row['date']
            ."</p>";    

        $m .= "<p>"
            .nl2br($row["msg"])
            ."</p>";
        if ($row["img"] !=NULL) {
            $m .= "<p><img src = 'upload/" 
            .$row['img']
            . "' width='20%' height='20%'></p>";
        }
        echo $m;
    }
    mysqli_free_result($rst);
    
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h2>Touhou screen</h2>

    <?php

        print "<p>Touhousha: "
            .$_SESSION["username"]
            ."</p>";

    ?>
    <form method="POST" action="" accept-charset="UTF-8" enctype="multipart/form-data">
        <p>
            <textarea name="msg" cols="70" rows="10"></textarea>
        </p>
        Image(GIF/JPEG, max size 100 KB):
        <input type="file" name="upload" size="40">
        <input type="submit" name="submit" value="touhou">
    </form>

    <a href="kanri.php">Kanri</a>

    <?php
        // $m = $_SESSION["username"];
        // print $m;

    ?>
</body>

</html>