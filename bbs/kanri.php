<?php

    include("dbconnect.php");
    include ("img_file_name.php");
    $m = "";

    if (isset($_POST["submitChange"])) {
        $old = $_POST["oldname"];
        $new = $_POST["newname"];

        $sql = "SELECT * FROM users WHERE user = '$old'";
        $rst = mysqli_query($con, $sql);

        if ($row = mysqli_fetch_assoc($rst)) {
            $id = $row["id"];
            $sql = "UPDATE users SET user = '$new' WHERE id = '$id'";
            $rst = mysqli_query($con, $sql);
        }
        // echo "<script>console.log(".json_encode($sql).")</script>";
    }

    if (isset($_POST["submitDelete"])) {
        $deleteName = $_POST["delname"];

        $sql = "SELECT * FROM users WHERE user = '$deleteName'";
        $rst = mysqli_query($con, $sql);

        if ($row = mysqli_fetch_assoc($rst)) {
            $id = $row["id"];
            $sql = "DELETE FROM bbs WHERE u_id = '$id'";
            $rst = mysqli_query($con, $sql);
            $sql = "DELETE FROM users WHERE id = '$id'";
            $rst = mysqli_query($con, $sql);
        }
    }

    if (isset($_POST["imgsub"])) {
        $cid = $_POST["imgid"];
        $img = img_file_name();
        $sql = "UPDATE bbs SET img = '$img' WHERE id = '$cid'";
        $rst = mysqli_query($con, $sql);
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
    <h1>Management</h1>

    <form action="" method="post">
        <p>User name change</p>
        <p>Old name: <input type="text" name="oldname"></p>
        <p>New name: <input type="text" name="newname"></p>
        <p><input type="submit" name="submitChange" value="Submit"></p>
    </form>

    <form action="" method="post">
        <p>Delete User</p>
        <p>Delete user name: <input type="text" name="delname"></p>
        <p><input type="submit" name="submitDelete" value="Submit"></p>
    </form>

    <form action="" method="post">
        <p>Change Image</p>
        <p>Change Image:
            <input type="file" name="imgid" size="40">
        </p>
        <p><input type="submit" name="imgsub" value="Submit"></p>
    </form>
</body>

</html>