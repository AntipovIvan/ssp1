<?php

    session_start();
    include("img_file_name.php");
    include("dbconnect.php");
    $m = '';

    if (!isset($_SESSION["kanri"])) {
        exit("Not Found");
    }

    if (isset($_POST["books"])) {
        header("Location: books.php");
        exit();
    }

    if (isset($_POST["new"])) {
        $title = $_POST["title"];
        $author = $_POST["author"];
        $price = $_POST["price"];
        $stock = $_POST["stock"];
        $image = img_file_name();

        $sql = "INSERT INTO
                    books (title, author, price, stock, image)
                VALUE 
                    ('$title','$author','$price','$stock','$image')";
        $rst = mysqli_query($con, $sql);
    }
    if (isset($_POST["up"])) {
        $upid = $_POST["upid"];
        $ustock = $_POST["zai"];
        $sql = "UPDATE 
                    books
                SET
                    stock = stock + '$ustock'
                WHERE
                    id = '$upid'";
        mysqli_query($con, $sql);
    }
  
    mysqli_close($con);

?>

<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="" method="post" accept-charset="UTF-8" enctype="multipart/form-data">
        <h2>Register new book</h2>
        <p>Book name: <input type="text" name="title"></p>
        <p>Author name: <input type="text" name="author"></p>
        <p>Price: <input type="text" name="price"></p>
        <p>In stock: <input type="text" name="stock"></p>
        <p>Image: <input type="file" name="uploadfile" size="40"></p>
        <p><input type="submit" name="new" value="Register"></p>
        <p><input type="submit" name="books" value="BOOKS"></p>

        <h2>Stock?</h2>
        <p>Book ID: <input type="text" name="upid"></p>
        <p>Change stock: <input type="text" name="zai"></p>
        <p><input type="submit" name="up" value="Add"></p>
    </form>

</body>

</html>