<?php 

    require_once("operation.php");

    if (isset($_POST["btn-del"])) {
        if (isset($_POST["delCarID"])) {
            deleteCar($_POST["delCarID"]);
        }
        else {
            echo "No car deleted";
        }
    }
    header("location: index.php");

?>