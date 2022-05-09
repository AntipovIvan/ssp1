<?php
    $com = mysqli_connect("localhost", "root", "", "ssp1");

    mysqli_set_charset( $com, "UTF8" );

    $sql = "SELECT * FROM `lotte` WHERE (kokugo >= 50 AND sugaku < 50 AND eigo < 50 ) OR (kokugo < 50 AND sugaku >= 50 AND eigo < 50 ) OR (kokugo < 50 AND sugaku < 50 AND eigo>= 50 )";

    $rst = mysqli_query( $com, $sql );

    $m="";
    while( $row = mysqli_fetch_array( $rst ) ){     
                $m .= $row["id"]." ";
                $m .= $row["name"]." ";
                $m .= $row["kokugo"]." ";
                $m .= $row["sugaku"]." ";
                $m .= $row["eigo"]."<br>";
            }

            mysqli_free_result( $rst );

            mysqli_close( $com );
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>0506</title>
</head>
<body>
<?php
        print $m;
    ?>
</body>
</html>