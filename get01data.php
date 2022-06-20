<?php
    $message = $_GET["message"];
    $submit = $_GET["submit"];
      if(!isset($submit)) {
            exit("Access Denied");
        };
        $printResult = "";
        if ($message > 50) {
            echo $message.' 大きすぎます';
        } elseif ($message < 50) {
            echo $message.' 小さすぎます';
        } else {
            echo $message.' です';
        }
?>