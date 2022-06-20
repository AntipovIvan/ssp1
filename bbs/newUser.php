<?php

session_start();

include("dbconnect.php");

$error['user']='';
$error['password']='';

if (!empty ($_POST)) {

    if ($_POST["user"] == "") {
        $error["user"] = "blank";
    }
    if ($_POST["password"] == "") {
        $error["password"] = "blank";
    } else if (strlen($_POST["password"] ) < 6) {
        $error["password"] = "length";
    }

    $judge = array_filter($error);

    if (empty($judge)) {
        $_SESSION["join"] = $_POST;
        header("Location: check.php");
        exit();
    //     $user = $_POST["user"];
    //     $password=$_POST["password"];

    // // $sql="INSERT INTO users (user, password) VALUES ('$user','$password')";
    // $sql=sprintf('INSERT INTO users SET user="%s", password="%s"', 
    //     mysqli_real_escape_string($con, $user), 
    //     mysqli_real_escape_string($con, $password));
    // // echo $sql;

    // $rst = mysqli_query($con,$sql);
    }
    // mysqli_close($con);
}

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
    <h2>User registration</h2>
    <form autocomplete="off" method="POST">
        <p>User name: <input type="text" name="user"></p>

        <?php 
        
            if($error["user"] == "blank") :
        
        ?>

        <p>Input User Name</p>

        <?php 
        
            endif;
        
        ?>

        <p>Password: <input type="password" name="password"></p>
        <?php 
            
            if($error["password"] == "blank") :
        
        ?>

        <p>Input password</p>

        <?php 
        
            endif;
        
        ?>

        <?php 
            
            if($error["password"] == "length") :
        
        ?>

        <p>Password must contain more than 6 characters</p>

        <?php 
        
            endif;
        
        ?>
        <input type="submit" name="submit" value="Submit">
    </form>
</body>

</html>