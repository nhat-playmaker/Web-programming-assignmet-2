<?php 

//index.php
include('connect.php');

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

    <script src="../admin/js/jquery-1.10.2.min.js"></script>
    <script src="../admin/js/jquery-ui.js"></script>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <!-- <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script> -->
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
    <link href = "../admin/css/jquery-ui.css" rel = "stylesheet">
    
    <!-- Custom CSS -->
    <link href="css/style.css" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
</head>

<body>
    
<header id="header">
      <nav class="navbar navbar-expand-lg navbar-light bg-white fixed-top">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">
            <img src="images/logo.png" alt="logo">
          </a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#home-menu" aria-controls="home-menu" aria-expanded="false" aria-label="label">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="home-menu">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link" href="index.php">TRANG CHỦ</a>
              </li>

              <li class="nav-item">
                <a class="nav-link" href="intro.php">GIỚI THIỆU</a>
              </li>
              
              <li class="nav-item active">
                <a class="nav-link" href="productpage.php">SẢN PHẨM</a>
              </li>
      
              <li class="nav-item">
                <a class="nav-link" href="service.php">DỊCH VỤ</a>
              </li>
    
              <li class="nav-item">
                <a class="nav-link" href="contact.php">LIÊN HỆ</a>
              </li>
            </ul>
          </div>
        </div>
      </nav> <br>
    </header>



    <!-- ======= Hero Section ======= -->
    <section id="hero-product" class="d-flex flex-column justify-content-center align-items-center">
        
    </section> <!-- End Hero -->


    <main id="main">
        <section id="features" class="features">
            <div class="container">
                <h2>SẢN PHẨM NỔI BẬT</h2>
                <div class="line"></div>
                <div class="row">
                <div class="col-lg-4 mb-5 mb-lg-0" data-aos="fade-right">
                    <ul class="nav nav-tabs flex-column">
                    <li class="nav-item">
                        <a class="nav-link active show" data-toggle="tab" href="#tab-1">
                            <h4>Vios GR-S 2021</h4>
                            <p>Giá từ: 638.000.000 VND</p>
                        </a>
                    </li>
                    <li class="nav-item mt-2">
                        <a class="nav-link" data-toggle="tab" href="#tab-2">
                        <h4>COROLLA CROSS 1.8HV</h4>
                        <p>Giá từ 910.000.000 VND</p>
                        </a>
                    </li>
                    <li class="nav-item mt-2">
                        <a class="nav-link" data-toggle="tab" href="#tab-3">
                        <h4>Land Cruiser Prado VX</h4>
                        <p>Giá từ: 2.379.000.000 VND</p>
                        </a>
                    </li>
                    <li class="nav-item mt-2">
                        <a class="nav-link" data-toggle="tab" href="#tab-4">
                        <h4>Rush S 1.5 AT</h4>
                        <p>Giá từ: 634.000.000 VND</p>
                        </a>
                    </li>
                    </ul>
                </div>
                <div class="col-lg-7 ml-auto" data-aos="fade-left">
                    <div class="tab-content">
                    <div class="tab-pane active show" id="tab-1">
                        <figure>
                        <img src="images/productpage/car05-1.jpg" alt="" class="img-fluid">
                        </figure>
                    </div>
                    <div class="tab-pane" id="tab-2">
                        <figure>
                        <img src="images/productpage/car02-1.jpg" alt="" class="img-fluid">
                        </figure>
                    </div>
                    <div class="tab-pane" id="tab-3">
                        <figure>
                        <img src="images/productpage/car03-1.jpg" alt="" class="img-fluid">
                        </figure>
                    </div>
                    <div class="tab-pane" id="tab-4">
                        <figure>
                        <img src="images/productpage/car04-1.jpg" alt="" class="img-fluid">
                        </figure>
                    </div>
                    </div>
                </div>
                </div>
        
            </div>
        </section><!-- End Features Section -->

    <!-- Page Content -->
    <div class="container">

    <div class="container nav-product">
                <h3>SẢN PHẨM<span style="color: rgb(209, 85, 85);"> TOYOTA </span></h3>
                <h2 style="margin-bottom: 20px;">Tất cả các phiên bản xe</h2>
                
    </div>	
    
        <div class="row">
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

                <div class="row filter_data">

                </div>
            </div>
        </div>

    </div>
<style>
#loading
{
	text-align:center; 
	background: url('../admin/loader.gif') no-repeat center; 
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
                window.location.reload();
            }
        });
    });

    filter_data();

});
</script>

</body>

</html>
