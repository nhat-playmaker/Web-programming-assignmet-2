<?php 

    $serverName = "localhost";
    $userName = "root";
    $password = "";
    $database = "car_information";

    $option = array(
        PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8",
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
    );

    try {
        $db = new PDO("mysql:host=$serverName; dbname=$database", $userName, $password, $option);
    }
    catch (PDOException $e) {
        echo "Error: " . $e->getMessage();
        exit();
    }

?>