<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "car_information";
    
    $conn = new mysqli($servername, $username, $password, $dbname);
    if ($conn->connect_error) {
        die("Connect failed: ".$conn->connect_error);
    }

?>