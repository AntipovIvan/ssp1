<?php

    // $con = mysqli_connect("localhost","root","","ssp1");
    // mysqli_set_charset($con,"utf8mb4");

    $pdo = new PDO('mysql:host = localhost; charset = UTF8; dbname = ssp1;', 'root', ''
    // array(
    //     PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'
    // )
);
    // PDO('database type'; 'database name'; 'host name', 'user name', 'password')