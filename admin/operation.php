<?php 

    include('database_connection.php');

    $carOriginArr = array("0" => "Xe trong nước", "1" => "Xe nhập khẩu");
    $carFuelArr = array("0" => "Xăng", "1" => "Dầu", "2" => "Xăng + Điện");

    $carName = "COROLLA CROSS 1.8HV";
    $carBrand = "Corolla cross";
    $carPrice = 910000000;
    $carFuel = $carFuelArr["0"];
    $carSeat = 5;
    $carType = "SUV";
    $carOrigin = $carOriginArr["0"];
    $carImage = "";
    $carQuantity = 10;
    $carStatus = 1;

    class Cars {
        public $id;
        public $name;
        public $brand;
        public $price;
        public $fuel;
        public $seat;
        public $type;
        public $origin;
        public $image;
        public $quantity;
        public $status;

        public function __construct($id, $name, $brand, $price, $fuel, $seat, $type, $origin, $image, $quantity, $status) {
            $this->id = $id;
            $this->name = $name;
            $this->brand = $brand;
            $this->price = $price;
            $this->fuel = $fuel;
            $this->seat = $seat;
            $this->type = $type;
            $this->origin = $origin;
            $this->image = $image;
            $this->quantity = $quantity;
            $this->status = $status;
        }

        public function display() {
            echo $this->id;
            echo "<br>";
            echo $this->name;
            echo "<br>";
            echo $this->brand;
            echo "<br>";
            echo $this->price;
            echo "<br>";
            echo $this->fuel;
            echo "<br>";
            echo $this->seat;
            echo "<br>";
            echo $this->type;
            echo "<br>";
            echo $this->origin;
            echo "<br>";
            echo "-----------------<br>";
        }
    }

    function getCarList($carID) {

        global $connect;

        $query = "
            SELECT * FROM car_details
            WHERE carID = :carID
        ";

        $statement = $connect->prepare($query);
        $statement->execute(
            array('carID' => $carID)
        );

        $count = $statement->rowCount();
        if ($count > 0) {
            $result = $statement->fetchAll();
            foreach ($result as $row) {
                $car = new Cars(
                    $row["carID"],
                    $row["carName"],
                    $row["carBrand"],
                    $row["carPrice"],
                    $row["carFuel"],
                    $row["carSeat"],
                    $row["carType"],
                    $row["carOrigin"],
                    $row["carImage"],
                    $row["carQuantity"],
                    $row["carStatus"]
                );
            }
        }
        else {
            echo "There is no car";
        }

        return $car;
    }

    function addCar($carName, $carBrand, $carPrice, $carFuel, $carSeat, $carType, $carOrigin, $carImage, $carQuantity, $carStatus) {
        global $connect;

        $query = "
            INSERT INTO car_details 
            (carName, carBrand, carPrice, carFuel, carSeat, carType, carOrigin, carImage, carQuantity, carStatus)
            VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?) 
        ";

        $statement = $connect->prepare($query);
        $statement->execute(
            array(
                $carName,
                $carBrand, 
                $carPrice,
                $carFuel, 
                $carSeat, 
                $carType,
                $carOrigin,
                $carImage,
                $carQuantity, 
                $carStatus
            )
        );
    }

    function editCar($carID, $carName, $carBrand, $carPrice, $carFuel, $carSeat, $carType, $carOrigin, $carImage, $carQuantity, $carStatus) {
        global $connect;

        $query = "
            UPDATE car_details
            SET 
                carName = ?,
                carBrand = ?,
                carPrice = ?,
                carFuel = ?,
                carSeat = ?,
                carType = ?,
                carOrigin = ?,
                carImage = ?,
                carQuantity = ?,
                carStatus = ?
            WHERE carID = ?
        ";

        $statement = $connect->prepare($query);
        $statement->execute(
            array(
                $carName,
                $carBrand,
                $carPrice,
                $carFuel, 
                $carSeat,
                $carType,
                $carOrigin,
                $carImage,
                $carQuantity, 
                $carStatus,
                $carID
            )
        );
    }

    function deleteCar($carID) {
        global $connect;

        $query = "
            DELETE FROM car_details
            WHERE carID = ?
        ";

        $statement = $connect->prepare($query);
        $statement->execute(array($carID));
    }
    
?>