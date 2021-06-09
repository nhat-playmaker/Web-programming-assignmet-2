<?php 

    require_once("operation.php");

    if (isset($_POST["action"])) {
        if (isset($_POST["name"])) {
            $carName = $_POST["name"];
        }
        else {
            $carName = "";
        }

        if (isset($_POST["brand"])) {
            $carBrand = $_POST["brand"];
        }
        else {
            $carBrand = "";
        }

        if (isset($_POST["price"])) {
            $carPrice = $_POST["price"];
        }
        else {
            $carPrice = "";
        }

        if (isset($_POST["fuel"])) {
            $carFuel = $_POST["fuel"];
        }
        else {
            $carFuel = "";
        }

        if (isset($_POST["seat"])) {
            $carSeat = $_POST["seat"];
        }
        else {
            $carSeat = "";
        }

        if (isset($_POST["type"])) {
            $carType = $_POST["type"];
        }
        else {
            $carType = "";
        }

        if (isset($_POST["origin"])) {
            $carOrigin = $_POST["origin"];
        }
        else {
            $carOrigin = "";
        }

        if (isset($_POST["image"])) {
            $carImage = $_POST["image"];
        }
        else {
            $carImage = "";
        }

        $carQuantity = 10;
        $carStatus = 1;

        addCar($carName, $carBrand, $carPrice, $carFuel, $carSeat, $carType, $carOrigin, $carImage, $carQuantity, $carStatus);
    }

   
    // header("location: index.php");

?>
