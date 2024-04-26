<?php
    $servername = "localhost";
    $username = "root";
    $password = "";

    // Create connection
    $conn = new mysqli($servername, $username, $password, "użytkownicy");

    // Check connection
    if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);    
    }
    echo "Connected successfully";

    $sql = "SELECT data_wpisu, autor, tresc FROM wpisy";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc())
          echo "<br>wpis: " . $row["data_wpisu"]." ".$row["autor"]." ".$row['tresc'];
    } else {
        echo "0 results";
    }

    echo json_encode(42);
    
?>