<?php
   
   session_start();
   include("img_file_name.php");
   include("dbconnect.php");
    $m = "";
    $sql = "SELECT 
                *, books.title as b_title, 
                books.author as b_author, 
                books.price as b_price, 
                books.stock as b_stock, 
                books.image as b_image   
            FROM 
                books
            ORDER BY 
                books.id 
            DESC";

    $rst = mysqli_query($con, $sql);

    while($row = mysqli_fetch_array($rst)) {
        echo "<br> Name: ". $row["b_title"]. " - Author: ". $row["b_author"]. " - Price: " . $row["b_price"] . " - Stock: " . $row["b_stock"] . " - Image: " . $row["b_image"] . "<br>";
    }
    mysqli_free_result($rst);   
?>

<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>実技試験</title>
</head>

<body>
    <p><a href="kanri.php">Kanri</a></p>
</body>

</html>