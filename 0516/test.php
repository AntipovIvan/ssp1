<?php
  if (isset ($_POST["submit"])) {
    $text=$_POST["email"];
    $password=$_POST["password"];
    $message=$_POST["message"];
    
    echo $text
      ."<br>";
    echo $password
      ."<br>";
    echo $message
      ."<br>";
  }
?>