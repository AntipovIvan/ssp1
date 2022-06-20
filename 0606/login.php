<?php
    session_start();

    include("dbconnect.php");

    if (!empty($_POST)) {
        if ($_POST["user"] !="" && $_POST["password"] !="") {
            $user=$_POST["user"];
            $password=$_POST["password"];

            $sql="SELECT * FROM users WHERE user = '$user' and password='$password'";
            $rst=mysqli_query($con,$sql);

            if ($row=mysqli_fetch_assoc($rst)) {
                $_SESSION["userId"]=$row["id"];
                $_SESSION["username"] = $row["user"];

                header('"Location: bbs.php');
                exit();
                // echo  $row["user"]
                //     ." san has Logged in";
            } else {
                echo "Cant Login";
            }
            mysqli_free_result($rst);
        }
    mysqli_close(($con));
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
    <h2>Login</h2>
    <form action="" method="post">
        <p>User name: <input type="text" name="user"></p>
        <p>Password: <input type="password" name="password"></p>
        <input type="submit" name="submit" value="Login">
    </form>

    <p>Want to Sign Up?</p>
    <p><a href="newUser.php">Register</a></p>
</body>

</html>