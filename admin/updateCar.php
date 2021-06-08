<?php 

    require_once("operation.php");

    if (isset($_POST["btn-upt"])) {
        
        if (isset($_POST["uptCarID"])) {
            $carID = $_POST["uptCarID"];
            echo $carID;
        }
        else {
            $carID = "";
        }

        if (isset($_POST["car_name"])) {
            $carName = $_POST["car_name"];
            echo $carName;
        }
        else {
           echo "Cannot found car name";
        }

        if (isset($_POST["car_brand"])) {
            $carBrand = $_POST["car_brand"];
        }
        else {
            $carBrand = "Cannot found car brand";
        }

        if (isset($_POST["car_price"])) {
            $carPrice = $_POST["car_price"];
        }
        else {
            $carPrice = "";
        }

        if (isset($_POST["car_fuel"])) {
            $carFuel = $_POST["car_fuel"];
        }
        else {
            $carFuel = "";
        }

        if (isset($_POST["car_seat"])) {
            $carSeat = $_POST["car_seat"];
            echo $carSeat;
        }
        else {
            $carSeat = "";
        }

        if (isset($_POST["car_type"])) {
            $carType = $_POST["car_type"];
        }
        else {
            $carType = "";
        }

        if (isset($_POST["car_origin"])) {
            $carOrigin = $_POST["car_origin"];
        }
        else {
            $carOrigin = "";
        }

        if (isset($_POST["car_image"])) {
            $carImage = $_POST["car_image"];
        }
        else {
            $carImage = "";
        }

        $carQuantity = 10;
        $carStatus = 1;

        editCar($carID, $carName, $carBrand, $carPrice, $carFuel, $carSeat, $carType, $carOrigin, $carImage, $carQuantity, $carStatus);
    }

    header("location: index.php");

?>