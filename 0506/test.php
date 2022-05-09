<!DOCTYPE html>
<html>
<body>
<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "ssp1";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
  
    $sql = "SELECT id, name, sugaku, kokugo, eigo FROM `lotte` WHERE (kokugo >= 50 AND sugaku < 50 AND eigo < 50 ) OR (kokugo < 50 AND sugaku >= 50 AND eigo < 50 ) OR (kokugo < 50 AND sugaku < 50 AND eigo>= 50 )";
    $sqlDesc = "SELECT id, name, sugaku, kokugo, eigo,(sugaku+kokugo+eigo) as total FROM `lotte` ORDER BY (sugaku+kokugo+eigo) DESC, eigo DESC";
    
    $result = $conn->query($sql);
    $resultDesc = $conn->query($sqlDesc);
   


    if ($result->num_rows > 0) {
        // output data of each row
        echo "<h2>1科目50点以上の選択</h2>";
        while($row = $result->fetch_assoc()) {
            echo "<br> id: ". $row["id"]. "&nbsp" 
            . " - 名前: ". $row["name"]. "&nbsp" 
            . " - 数学: ". $row["sugaku"] . "&nbsp"
            . " - 国語: ". $row["kokugo"] . "&nbsp"
            . " - 英語: ". $row["eigo"];
        }
    } else {
        echo "0 results";
    }



    if ($resultDesc->num_rows > 0) {
        // output data of each row
        echo "<br><h2>合計点が高い選択</h2>";
        while($row = $resultDesc->fetch_assoc()) {
            echo "<br> id: ". $row["id"]
            . " - 名前: ". $row["name"]. "&nbsp"  
            . " - 数学: ". $row["sugaku"] . "&nbsp" 
            . " - 国語: ". $row["kokugo"] . "&nbsp" 
            . " - 英語: ". $row["eigo"]. "&nbsp" 
            . " - Total: ". $row["total"];
        }
    } else {
        echo "0 results";
    }


    
    $conn->close();
?>
</body>
</html>