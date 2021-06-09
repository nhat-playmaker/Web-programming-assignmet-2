<?php include('./admin/database_connection.php'); ?>

<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TRANG CHỦ | TOYOTA</title>

    <link rel="shortcut icon" href="images/icon.png" />

    <!-- <script src="js/jquery-1.10.2.min.js"></script> -->
    <!-- <script src="js/jquery-ui.js"></script> -->
    <!-- <script src="js/bootstrap.min.js"></script> -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>
    <!-- <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css"> -->
    
    <!-- <link href = "css/jquery-ui.css" rel="stylesheet" type="text/css"> -->
    <!-- Custom CSS -->
    <link  rel="stylesheet" type="text/css" href="./style.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    
    <!-- ======= Header ========= -->
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

        <section id="services" class="services section-bg">
            <div class="container nav-product">
                <h3>SẢN PHẨM<span style="color: rgb(209, 85, 85);"> TOYOTA </span></h3>
                <h2 style="margin-bottom: 20px;">Tất cả các phiên bản xe</h2>
                
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


<div class="list-group">
<h3>Mẫu xe</h3>
<?php
    $query = "
    SELECT DISTINCT (carType) FROM car_details WHERE carStatus = '1' ORDER BY carType DESC
    ";
    $statement = $connect->prepare($query);
    $statement->execute();
    $result = $statement->fetchAll();
    foreach($result as $row)
    {
    ?>
    <div class="list-group-item checkbox">
        <label><input type="checkbox" class="common_selector type" value="<?php echo $row['carType']; ?>"  > <?php echo $row['carType']; ?></label>
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
                
        </section> <!-- End Cac Dong xe Section --> 

    </main> <!-- End main content -->

      

    <!-- ======= Footer ======= -->
    <footer id="footer">
      <div class="footer-top">
        <div class="container">
          <div class="row">

            <div class="col-lg-2 col-md-6 footer-links">
              <h4>DỊCH VỤ</h4>
              <ul>
                <li><a href="#">Bảo hành</a></li>
                <li><a href="#">Bảo dưỡng</a></li>
                <li><a href="#">Sữa chữa chung</a></li>
                <li><a href="#">Kiểm tra/ triệu hồi</a></li>
                <li><a href="#">Phụ tùng & phụ kiện</a></li>
              </ul>
            </div>

            <div class="col-lg-2 col-md-6 footer-links">
              <h4>DỊCH VỤ GIA TĂNG</h4>
              <ul>
                <li><a href="#">Xe đã qua sử dụng</a></li>
                <li><a href="#">Vay Toyata - Mua Toyota</a></li>
                <li><a href="#">Bảo hiểm Toyota</a></li>
              </ul>
            </div>

            <div class="col-lg-2 col-md-6 footer-links">
              <h4>CÔNG CỤ HỖ TRỢ</h4>
              <ul>
                <li><a href="#">So sánh sản phẩm</a></li>
                <li><a href="#">Sự toán chi phí</a></li>
                <li><a href="#">Hỗ trợ tài chính</a></li>
                <li><a href="#">Đăng ký lái thử</a></li>
                <li><a href="#">Đặt lịch hẹn dịch vụ</a></li>
                <li><a href="#">Tải catalouge</a></li>
                <li><a href="#">Tải bảng giá</a></li>
              </ul>
            </div>

            <div class="col-lg-2 col-md-6 footer-links">
              <h4>TIN TỨC</h4>
              <ul>
                <li><a href="#">Tin tức chung</a></li>
                <li><a href="#">Tuyển dụng</a></li>
                <li><a href="#">Khuyến mãi</a></li>
                <li><a href="#">Sự kiện</a></li>
                <li><a href="#">Báo chí viết về Toyota</a></li>
              </ul>
            </div>

            <div class="col-lg-2 col-md-6 footer-links">
              <h4>LỜI KHUYÊN CHUYÊN GIA</h4>
              <ul>
                <li><a href="#">Hướng dẫn sử dụng xe</a></li>
                <li><a href="#">Những chú ý tăng tuổi thọ lốp</a></li>
                <li><a href="#">Những chú ý tăng tuổi thọ ắc quy</a></li>
                <li><a href="#">Hướng dẫn lái xe an toàn</a></li>
              </ul>
            </div>

            <div class="col-lg-2 col-md-6 footer-links">
              <h4>HOẠT ĐỘNG ĐẠI LÝ</h4>
              <ul>
                <li><a href="#">Khuyến mãi</a></li>
                <li><a href="#">Tin tức</a></li>
                <li><a href="#">Sự kiện</a></li>
              </ul>
            </div>

          </div>

          <div class="row">
            <div class="col-lg-5 col-md-6">
              <div class="footer-info">
                <h4>CÔNG TY Ô TÔ TOYOTA VIỆT NAM</h4>
                <p>
                  Số GCNĐKDN: 2500150335 <br>
                  Cấp lần đầu: Ngày 26/03/2007 <br>
                  Đăng ký thay đổi lần thứ 16: Ngày 07/05/2018 <br>
                  Cơ quan cấp: Sở kế hoạch và đầu tư tỉnh Vĩnh Phúc <br>
                  Địa chỉ: Phường Phúc Thắng, Thành phố Phúc Yên, Tỉnh Vĩnh Phúc, Việt Nam <br>
                </p>
              </div>
            </div>
            <div class="col-lg-4 col-md-6 footer-newsletter">
              <p>ĐĂNG KÝ NHẬN TIN</p>
              <form action="#" method="POST">
                <input type="text" name="full-name" placeholder="Họ tên (*)">
                <input type="email" name="e-mail" placeholder="Email (*)">
                <input type="submit" name="footer-btn-submit" id="footer-btn-submit" value="Đăng kí">
              </form>
            </div>
            <div class="col-lg-3 col-md-6">
              <h4>ĐƯỜNG DÂY NÓNG</h4>
              <p><img src="images/footer/phone.png" alt="">1800 1524</p>
              <p><img src="images/footer/mail.png" alt="">	tmv_cs@toyotavn.com.vn</p>
              <p><img src="images/footer/contact.png" alt="">Thông tin liên hệ</p>
            </div>
          </div>
        </div>
      </div>

      <div class="container">
        <div class="copyright">
          &copy; Copyright. All Rights Reserved
        </div>
        <div class="credits">
          Designed by Thai Van Nhat
        </div>
      </div>
    </footer><!-- End Footer -->

    <script src="js/func.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
</body>
</html>
