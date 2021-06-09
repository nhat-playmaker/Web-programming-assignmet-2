<?php 

    require_once("operation.php");

    if (isset($_POST["btn-edit"])) {
        if (isset($_POST["editCarID"])) {
            $car = getCarList($_POST["editCarID"]);
            $carID = $car->id;
            $carName = $car->name;
            $carBrand = $car->brand;
            $carPrice = $car->price;
            $carFuel = $car->fuel;
            $carSeat = $car->seat;
            $carType = $car->type;
            $carOrigin = $car->origin;
            $carImage = $car->image;
        }
        else {
            echo "No car deleted";
        }
    }

?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Admin Management</title>

    <script src="js/jquery-1.10.2.min.js"></script>
    <script src="js/jquery-ui.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link href = "css/jquery-ui.css" rel = "stylesheet">
    <!-- Custom CSS -->
    <link href="css/style.css" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    <div class="container">
    
        <form method="post" action="updateCar.php">
            <div class="form-group">
                <label for="car-name" class="col-form-label">Tên xe:</label>
                <input type="text" class="form-control" name="car_name" value="<?php echo $carName; ?>">
            </div>
            <div class="form-group">
                <label for="message-text" class="col-form-label">Hãng xe:</label>
                <input type="text" class="form-control" name="car_brand" value="<?php echo $carBrand; ?>">
            </div>
            <div class="form-group">
                <label for="message-text" class="col-form-label">Giá xe:</label>
                <input type="text" class="form-control" name="car_price" value="<?php echo $carPrice; ?>">
            </div>
            <div class="form-group">
                <label for="message-text" class="col-form-label">Loại nhiên liệu:</label>
                <select class="form-control" name="car_fuel">
                    <option>Xăng</option>
                    <option>Dầu</option>
                    <option>Xăng + Điện</option>
                </select>
            </div>
            <div class="form-group">
                <label for="message-text" class="col-form-label">Số chỗ ngồi:</label>
                <select class="form-control" name="car_seat">
                    <option>5</option>
                    <option>7</option>
                    <option>8</option>
                    <option>9</option>
                    <option>15</option>
                </select>
            </div>
            <div class="form-group">
                <label for="message-text" class="col-form-label">Kiểu dáng xe:</label>
                <input type="text" class="form-control" name="car_type" value="<?php echo $carType; ?>">
            </div>
            <div class="form-group">
                <label for="message-text" class="col-form-label">Xuất xứ:</label>
                <select class="form-control" name="car_origin">
                    <option>Xe trong nước</option>
                    <option>Xe nhập khẩu</option>
                </select>
            </div>
            <div class="form-group">
                <label for="message-text" class="col-form-label">Tên file ảnh:</label>
                <input type="text" class="form-control" name="car_image" value="<?php echo $carImage; ?>">
            </div>

            <div class="form-group">
                <input type="text" value="<?php echo $carID ?>" name ="uptCarID" hidden>    
                <input type="submit" name="btn-upt" id="btn-upt" class="btn btn-primary" value="UPDATE" />
            </div>
        </form>



    </div>
</body>
</html>