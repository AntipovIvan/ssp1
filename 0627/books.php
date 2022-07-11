<?php

    session_start();
    include("img_file_name.php");
    include("dbconnect.php");

    $m = '';
    $bm = '';

    if (isset($_POST["kanri"])) {
        $_SESSION["kanri"] = $_POST["kanri"];
        header("Location: kanri.php");
        exit();
    }

    if (isset($_POST["buy"])) {
        $bid = $_POST["id"];
        $sql = "SELECT 
                    *
                FROM
                    books
                WHERE 
                    id = '$bid'";
        // $rst = mysqli_query($con, $sql);
        $stmt = $pdo -> query($sql);
        // if ($row = mysqli_fetch_assoc($rst)) {
        // $result = [];
        if ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
            if ($row["stock"] == 0) {
                $bm .= "<p>Out of Stock, cant buy"; 
            } else {
                $bm .= "<p>"
                    .$row["id"]
                    .":"
                    .$row["title"]
                    ."。　"
                    .$row["author"]
                    ."。　";
                $bm .= "<p>Result: "
                        .$row["price"]
                        ."</p>";
                $sql = "UPDATE 
                            books
                        SET
                            stock = stock - 1
                        WHERE
                            id='$bid'";
                $stmt = $pdo -> query($sql);
                // mysqli_query($con, $sql);
            }
        }
    }

    $sql = "SELECT 
                *
            FROM
                ssp1.books";
    // $rst = mysqli_query($con, $sql);
    $stmt = $pdo -> query($sql);
    // while($row = mysqli_fetch_array($rst)) {
        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
        $m .= "<p>"
            .$row["id"]
            .":"
            .$row["title"]
            ."。　"
            .$row["author"]
            ."。　";
          
        $m .= $row["price"]
            ."。　";
            if ($row["stock"] == 0) {
                $m .= "Not Available</p>";
            } else {
                $m .= $row["stock"]
                    . "</p>";
            }
        if ($row["image"] != NULL) {
            $m .= "<p><img src = 'upload/" .$row["image"]."' width = '10%' height = '10%'</p>";
        } 
    }
    // mysqli_free_result(($rst));
    // mysqli_close($con);

?>

<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Books</title>
</head>

<body>
    <form action="" method="post">
        <h2>Management Screen</h2>
        <p><input type="submit" name="kanri" value="management"></p>
        <h2>Books List</h2>
        <p>Book ID: <input type="text" name="id"></p>
        <p><input type="submit" name="buy" value="buy"></p>
    </form>

    <?php

        print $m;

    ?>
    <?php

        print $bm;

    ?>
</body>

</html>