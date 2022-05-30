<?php 

    $fruit = array("apple"=>"リンゴ","orange"=>"みかん", "grape"=>"ぶどう","banana"=>"banan");

    $com = mysqli_connect("localhost", "root", "", "ssp1");

    mysqli_set_charset( $com, "UTF8" );

    $sql = "SELECT * FROM `lotte`";

    $rst = mysqli_query( $com, $sql );

    $row = mysqli_fetch_array( $rst );

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
    <h2>
        <?php
        // for ($i=0; $i<count($fruit); $i++){
        //     echo $fruit[$i]
        //     .'<br>';
        // }
            // echo count($fruit)
            // .'<br>';

            foreach($fruit as $fruits) {
                echo $fruits
                .'<br>';
            }

        //     print $fruit[1];
        // $m="";
        // while( $row = mysqli_fetch_array( $rst ) ){     
        //             $m .= $row["id"]." ";
        //             $m .= $row["name"]." ";
        //             $m .= $row["kokugo"]." ";
        //             $m .= $row["sugaku"]." ";
        //             $m .= $row["eigo"]."<br>";
        //         }
    
        //         mysqli_free_result( $rst );

        //         mysqli_close( $com );
        //         print $m;


        // foreach($fruit as $key=>$value) {
        //     echo $key
        //     . "->"
        //     .$value
        //     .'<br>';
        // }

        // echo "Today is " . date("Y年n月j日") 
        // . "<br>";

        // echo "The time is " 
        // . date("h:i:s")
        // . "<br>";
        // echo "Today is " . date("l")
        // . "<br>";

        date_default_timezone_set("Asia/Tokyo");
        if (date('H:i:s') < '12:00:00' && date('H:i:s') > '06:00:00') {
            echo "午前 " 
            . date("h:i:s")
            . "<br>"
            . "おはよう。";
        } elseif (date('H:i:s') > '12:00:00' && date('H:i:s') < '18:00:00') {
            echo "午後 " 
            . date("h:i:s")
            . "<br>"
            . "こんにちは。";
        } elseif (date('H:i:s') > '18:00:00' || date('H:i:s') < '06:00:00') {
            echo date("h:i:s")
            . "<br>"
            . "こんばんは。";
        }
           
        ?>
    </h2>
 

</body>
<style>
        body{
            text-align:center;
            align-self: center;
            justify-content:center;
            margin: 12% auto
        }
    </style>
</html>