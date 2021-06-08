<?php 

//index.php

include('database_connection.php');

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
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
    <link href = "css/jquery-ui.css" rel = "stylesheet">
    <!-- Custom CSS -->
    <link href="css/style.css" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
    <!-- Page Content -->
    <div class="container">
        <div class="row">
        	<br />
        	<h2>Toyota test</h2>
        	<br />
            <div class="col-md-3">		

                <!-- Brand -->
                <div class="list-group">
					<h3>Nhãn hiệu</h3>
                    <div style="height: 180px; overflow-y: auto; overflow-x: hidden;">
					<?php

                    $query = "SELECT DISTINCT (carBrand) FROM car_details WHERE carStatus = '1' ORDER BY carID DESC";
                    $statement = $connect->prepare($query);
                    $statement->execute();
                    $result = $statement->fetchAll();
                    foreach($result as $row)
                    {
                    ?>
                    <div class="list-group-item checkbox">
                        <label><input type="checkbox" class="common_selector brand" value="<?php echo $row['carBrand']; ?>"  > <?php echo $row['carBrand']; ?></label>
                    </div>
                    <?php
                    }

                    ?>
                    </div>
                </div>

				<div class="list-group">
					<h3>Nhiên liệu</h3>
                    <?php

                    $query = "
                    SELECT DISTINCT (carFuel) FROM car_details WHERE carStatus = '1' ORDER BY carFuel DESC
                    ";
                    $statement = $connect->prepare($query);
                    $statement->execute();
                    $result = $statement->fetchAll();
                    foreach($result as $row)
                    {
                    ?>
                    <div class="list-group-item checkbox">
                        <label><input type="checkbox" class="common_selector fuel" value="<?php echo $row['carFuel']; ?>" > <?php echo $row['carFuel']; ?></label>
                    </div>
                    <?php    
                    }

                    ?>
                </div>
				

				<div class="list-group">
					<h3>Số chỗ ngồi</h3>
					<?php
                    $query = "
                    SELECT DISTINCT (carSeat) FROM car_details WHERE carStatus = '1' ORDER BY carSeat DESC
                    ";
                    $statement = $connect->prepare($query);
                    $statement->execute();
                    $result = $statement->fetchAll();
                    foreach($result as $row)
                    {
                    ?>
                    <div class="list-group-item checkbox">
                        <label><input type="checkbox" class="common_selector seat" value="<?php echo $row['carSeat']; ?>"  > <?php echo $row['carSeat']; ?> chỗ ngồi</label>
                    </div>
                    <?php
                    }
                    ?>	
                </div>
            </div>

            <div class="col-md-9">
                <!-- <form method="post">
                    <div class="form-group">
                        <input type="submit" name="login" id="login" class="btn btn-primary" value="+ ADD CAR" />
                    </div>
                </form> -->

                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" data-whatever="" style="margin-bottom: 20px;">+ ADD CAR</button>

                <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">New message</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                                </button>
                            </div>

                            <div class="modal-body">
                                <form method="post" action="addCar.php">
                                    <div class="form-group">
                                        <label for="car-name" class="col-form-label">Tên xe:</label>
                                        <input type="text" class="form-control" id="carName">
                                    </div>
                                    <div class="form-group">
                                        <label for="message-text" class="col-form-label">Hãng xe:</label>
                                        <input type="text" class="form-control" id="carBrand">
                                    </div>
                                    <div class="form-group">
                                        <label for="message-text" class="col-form-label">Giá xe:</label>
                                        <input type="text" class="form-control" id="carPrice">
                                    </div>
                                    <div class="form-group">
                                        <label for="message-text" class="col-form-label">Loại nhiên liệu:</label>
                                        <select class="form-control" id="carFuel">
                                            <option>Xăng</option>
                                            <option>Dầu</option>
                                            <option>Xăng + Điện</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="message-text" class="col-form-label">Số chỗ ngồi:</label>
                                        <select class="form-control" id="carSeat">
                                            <option>5</option>
                                            <option>7</option>
                                            <option>8</option>
                                            <option>9</option>
                                            <option>15</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="message-text" class="col-form-label">Kiểu dáng xe:</label>
                                        <input type="text" class="form-control" id="carType">
                                    </div>
                                    <div class="form-group">
                                        <label for="message-text" class="col-form-label">Xuất xứ:</label>
                                        <select class="form-control" id="carOrigin">
                                            <option>Xe trong nước</option>
                                            <option>Xe nhập khẩu</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="message-text" class="col-form-label">Tên file ảnh:</label>
                                        <input type="text" class="form-control" id="carImage">
                                    </div>

                                </form>
                            </div>

                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Đóng</button>
                                <button type="button" class="btn btn-primary" id="add-data">Xác nhận</button>
                            </div>
            
                        </div>
                    </div>
                </div>

            	<br />
                <div class="row filter_data">

                </div>
            </div>
        </div>

    </div>
<style>
#loading
{
	text-align:center; 
	background: url('loader.gif') no-repeat center; 
	height: 150px;
}
</style>

<script>
$(document).ready(function(){

    $('#exampleModal').on('show.bs.modal', function (event) {
        var button = $(event.relatedTarget) // Button that triggered the modal
        var recipient = button.data('whatever') // Extract info from data-* attributes
       
        var modal = $(this)
        modal.find('.modal-title').text('ADD NEW CAR INFORMATION TO DATABASE');
        modal.find('.modal-body input').val(recipient)
    });

    function filter_data()
    {
        $('.filter_data').html('<div id="loading" style="" ></div>');
        var action = 'fetch_data';
        var brand = get_filter('brand');
        var fuel = get_filter('fuel');
        var seat = get_filter('seat');
        var type = get_filter('type');
        var origin = get_filter('origin');
        $.ajax({
            url:"fetch_data.php",
            method:"POST",
            data:{  action:action, 
                    brand:brand, 
                    fuel:fuel, 
                    seat:seat,
                    type:type,
                    origin:origin},
            success:function(data){
                $('.filter_data').html(data);
            }
        });
    }

    function get_filter(class_name)
    {
        var filter = [];
        $('.'+class_name+':checked').each(function(){
            filter.push($(this).val());
        });
        return filter;
    }

    $('.common_selector').click(function(){
        filter_data();
    });

    $('#add-data').click(function() {
        var action = "addCar";
        var name = $("#carName").val();
        var brand = $("#carBrand").val();
        var price = $("#carPrice").val();
        var fuel = $("#carFuel").val();
        var seat = $("#carSeat").val();
        var type = $("#carType").val();
        var origin = $("#carOrigin").val();
        var image = $("#carImage").val();
        $.ajax({
            url:"addCar.php",
            method:"POST",
            data:{  action:action, 
                    name:name,
                    brand:brand,
                    price:price, 
                    fuel:fuel, 
                    seat:seat,
                    type:type,
                    origin:origin,
                    image:image},
            success:function(data){
                alert("You have successfully added the new car");
                header("location: index.php");
            }
        });
    });

    filter_data();

});
</script>

</body>

</html>

<!-- <div class="btn-inline">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Đóng</button>
                                    </div>

                                    <div class="btn-inline">
                                        <input type="submit" name="btn-add" id="btn-add" class="btn btn-primary" value="Hoàn tất" />
                                    </div> -->