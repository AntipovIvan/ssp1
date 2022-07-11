<?php
    session_start();
    include("dbconnect.php");
    include ("img_file_name.php");
    $m = "";
    if (isset($_POST["submit"])) {
        $title = $_POST["title"];
        $author = $_POST["author"];
        $price = $_POST["price"];
        $stock = $_POST["stock"];
        $img = img_file_name();
       
        $sql = "INSERT INTO 
                    books (title, author, price, stock, image) 
                VALUES 
                    ('$title', '$author', '$price', '$stock', '$img')";
                    
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
    <h1>管理</h1>
    <form method="POST" action="" accept-charset="UTF-8" enctype="multipart/form-data">
        <p>書籍名: <input type="text" name="title"></p>
        <p>作者名: <input type="text" name="author"></p>
        <p>金額: <input type="text" name="price"></p>
        <p>在庫数: <input type="text" name="stock"></p>
        Image(GIF/JPEG, max size 100 KB):
        <input type="file" name="upload" size="40">
        <input type="submit" name="submit" value="登録">
    </form>

    <a href="books.php">本リスト</a>
</body>

</html>