<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TRANG CHỦ | TOYOTA</title>

    <link rel="shortcut icon" href="images/icon.png" />
    
    <script src="js/jquery.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>

    <link rel="stylesheet" type="text/css" href="./css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
</head>
<body>
    
    <!-- ======= Header ========= -->
    <header id="header">
      <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">
            <img src="images/logo.png" alt="logo">
          </a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#home-menu" aria-controls="home-menu" aria-expanded="false" aria-label="label">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="home-menu">
            <ul class="navbar-nav">
              <li class="nav-item active">
                <a class="nav-link" href="#">TRANG CHỦ</a>
              </li>

              <li class="nav-item">
                <a class="nav-link" href="intro.php">GIỚI THIỆU</a>
              </li>
              
              <li class="nav-item">
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


          <a class="btn d-lg-inline-block my-2 my-md-0 ms-md-3" href="./login/login.php" id="loginButton"></a>
          <a class="btn d-lg-inline-block my-2 my-md-0 ms-md-3" href="./login/edit.php" id="#">Thông tin cá nhân</a>
          <button class="btn d-lg-inline-block my-2 my-md-0 ms-md-3" id="logoutButton" onclick="localStorage.clear(); window.location.reload()">Đăng xuất</button>
        </div>
      </nav>
    </header>
    <!-- === End Header === -->

    <div id="demo" class="carousel slide" data-ride="carousel">

      <!-- Indicators -->
      <ul class="carousel-indicators">
        <li data-target="#demo" data-slide-to="0" class="active"></li>
        <li data-target="#demo" data-slide-to="1"></li>
        <li data-target="#demo" data-slide-to="2"></li>
      </ul>
      
      <!-- The slideshow -->
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="images/homepage/car-review/pic01.jpg" alt="Los Angeles" width="1100" height="500">
        </div>
        <div class="carousel-item">
          <img src="images/homepage/car-review/pic-06.jpg" alt="Chicago" width="1100" height="500">
        </div>
        <div class="carousel-item">
          <img src="images/homepage/car-review/pic-07.jpg" alt="New York" width="1100" height="500">
        </div>
      </div>
      
      <!-- Left and right controls -->
      <a class="carousel-control-prev" href="#demo" data-slide="prev">
        <span class="carousel-control-prev-icon"></span>
      </a>
      <a class="carousel-control-next" href="#demo" data-slide="next">
        <span class="carousel-control-next-icon"></span>
      </a>
    </div>

    <main id="main">
        <!-- ======= Cac dong xe Section ======= -->
        <section id="services" class="services section-bg">
            <div class="container">
              <div class="section-title" data-aos="fade-up">
                <h2>Các dòng xe</h2>
                <div class="line"></div>
            </div>

              <!-- === Choose car-type === -->
              <div class="container-fluid car-type-select" style="margin-bottom: 40px;">
                <div class="row justify-content-center">
                    <div>
                        <a class="col-1" href="#car-types" data-slide-to="0">Hatchback</a>
                    </div>
                    <div>
                        <a class="col-1" href="#car-types" data-slide-to="1">Sedan</a>
                    </div>
                    <div>
                        <a class="col-1" href="#car-types" data-slide-to="2">SUV</a>
                    </div>
                    <div>
                        <a class="col-1" href="#car-types" data-slide-to="3">Đa dụng</a>
                    </div>
                    <div>
                        <a class="col-1" href="#car-types" data-slide-to="4">Thương mại</a>
                    </div>
                    <div>
                        <a class="col-1" href="#car-types" data-slide-to="5">Bán tải</a>
                    </div>
                </div>
              </div>
              
              <div id="car-types" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">

                  <!-- === Hatchback type === -->
                  <div class="carousel-item active" id="hatchback">
                    <div class="row">
                      <div class="col-sm-12 col-md-6 col-lg-3">
                          <div>
                              <img class="img-fluid mx-auto d-block" src="images/hatchback/hatchback1.png" alt="">
                          </div>
                          <div>
                              <h4>Wigo</h4>
                              <p>Giá: 352,000,000 VND</p>
                              <ul>
                                  <li>5 chỗ ngồi</li>
                                  <li>Số sàn 5 cấp</li>
                                  <li>Động cơ xăng dung tích 1.197 cm3</li>
                              </ul>
                          </div>
                      </div>

                      <div class="col-sm-12 col-md-6 col-lg-3">
                          <div>
                              <img class="img-fluid mx-auto d-block" src="images/hatchback/hatchback2.png" alt="">
                          </div>
                          <div>
                              <h4>Yaris</h4>
                              <p>Giá: 668,000,000 VND</p>
                              <ul>
                                  <li>5 chỗ ngồi</li>
                                  <li>Số tay 5 cấp</li>
                                  <li>Động cơ xăng dung tích 1.496 cc</li>
                              </ul>
                          </div>
                      </div>
                    </div>
                  </div>

                  <!-- === Sedan type === -->
                  <div class="carousel-item" id="sedan">
                    <div class="row">
                      <div class="col-sm-12 col-md-6 col-lg-3">
                          <div>
                              <img class="img-fluid mx-auto d-block" src="images/sedan/sedan1.png" alt="">
                          </div>
                          <div>
                              <h4>Vios</h4>
                              <p>Giá: 478,000,000 VND</p>
                              <ul>
                                  <li>5 chỗ ngồi</li>
                                  <li>Số tay 5 cấp</li>
                                  <li>Động cơ xăng dung tích 1.496 cm3</li>
                              </ul>
                          </div>
                      </div>

                      <div class="col-sm-12 col-md-6 col-lg-3">
                        <div>
                            <img class="img-fluid mx-auto d-block" src="images/sedan/sedan2.png" alt="">
                        </div>
                        <div>
                            <h4>Camry</h4>
                            <p>Giá: 1,029,000,000 VND</p>
                            <ul>
                                <li>5 chỗ ngồi</li>
                                <li>Số tự động 6 cấp</li>
                                <li>Động cơ xăng dung tích 1.998 cm3</li>
                            </ul>
                        </div>
                      </div>

                      <div class="col-sm-12 col-md-6 col-lg-3">
                        <div>
                            <img class="img-fluid mx-auto d-block" src="images/sedan/sedan3.png" alt="">
                        </div>
                        <div>
                            <h4>Corolla Altis</h4>
                            <p>Giá: 733,000,000 VND</p>
                            <ul>
                                <li>5 chỗ ngồi</li>
                                <li>Số tự động vô cấp</li>
                                <li>Động cơ xăng dung tích 1.798 cm3</li>
                            </ul>
                        </div>
                    </div>
                    </div>
                  </div>

                  <!-- === SUV type === -->
                  <div class="carousel-item" id="suv">
                    <div class="row">
                      <div class="col-sm-12 col-md-6 col-lg-3">
                          <div>
                              <img class="img-fluid mx-auto d-block" src="images/suv/suv1.png" alt="">
                          </div>
                          <div>
                              <h4>Land Cruiser Prado</h4>
                              <p>Giá: 2,379,000,000 VND</p>
                              <ul>
                                  <li>7 chỗ ngồi</li>
                                  <li>Số tự động 6 cấp</li>
                                  <li>Động cơ xăng 2.694 cc</li>
                              </ul>
                          </div>
                      </div>

                      <div class="col-sm-12 col-md-6 col-lg-3">
                          <div>
                              <img class="img-fluid mx-auto d-block" src="images/suv/suv2.png" alt="">
                          </div>
                          <div>
                              <h4>Land Cruiser</h4>
                              <p>Giá: 4,030,000,000 VND</p>
                              <ul>
                                  <li>7 chỗ ngồi</li>
                                  <li>Số tự động 6 cấp</li>
                                  <li>Động cơ xăng 4.068 cc</li>
                              </ul>
                          </div>
                      </div>

                      <div class="col-sm-12 col-md-6 col-lg-3">
                        <div>
                            <img class="img-fluid mx-auto d-block" src="images/suv/suv4.png" alt="">
                        </div>
                        <div>
                            <h4>Corolla Cross</h4>
                            <p>Giá: 720,000,000 VND</p>
                            <ul>
                                <li>5 chỗ ngồi</li>
                                <li>Số tự động vô cấp</li>
                                <li>Động cơ xăng 1.798 cm3</li>
                            </ul>
                        </div>
                      </div>

                      <div class="col-sm-12 col-md-6 col-lg-3">
                        <div>
                            <img class="img-fluid mx-auto d-block" src="images/suv/suv5.png" alt="">
                        </div>
                        <div>
                            <h4>Fortuner</h4>
                            <p>Giá: 995,000,000 VND</p>
                            <ul>
                                <li>7 chỗ ngồi</li>
                                <li>Số tự động 6 cấp</li>
                                <li>Xe trong nước và nhập khẩu</li>
                            </ul>
                        </div>
                      </div>
                      
                    </div>
                  </div>

                  <!-- === dadung type === -->
                  <div class="carousel-item" id="dadung">
                    <div class="row">
                      <div class="col-sm-12 col-md-6 col-lg-3">
                          <div>
                              <img class="img-fluid mx-auto d-block" src="images/dadung/dadung1.png" alt="">
                          </div>
                          <div>
                              <h4>Alpahrd luxury</h4>
                              <p>Giá: 4,219,000,000 VND</p>
                              <ul>
                                  <li>7 chỗ ngồi</li>
                                  <li>Số tự động 8 cấp</li>
                                  <li>Động cơ xăng 3,456 cc</li>
                              </ul>
                          </div>
                      </div>

                      <div class="col-sm-12 col-md-6 col-lg-3">
                          <div>
                              <img class="img-fluid mx-auto d-block" src="images/dadung/dadung2.png" alt="">
                          </div>
                          <div>
                              <h4>Innova</h4>
                              <p>Giá: 750,000,000 VND</p>
                              <ul>
                                  <li>8 chỗ ngồi</li>
                                  <li>Số tay 5 cấp</li>
                                  <li>Động cơ xăng 1.998 cc</li>
                              </ul>
                          </div>
                      </div>

                      <div class="col-sm-12 col-md-6 col-lg-3">
                        <div>
                            <img class="img-fluid mx-auto d-block" src="images/dadung/dadung3.png" alt="">
                        </div>
                        <div>
                            <h4>Avanza</h4>
                            <p>Giá: 544,000,000 VND</p>
                            <ul>
                                <li>57chỗ ngồi</li>
                                <li>Số sàn 5 cấp</li>
                                <li>Động cơ xăng 1.329 cm3</li>
                            </ul>
                        </div>
                      </div>

                      <div class="col-sm-12 col-md-6 col-lg-3">
                        <div>
                            <img class="img-fluid mx-auto d-block" src="images/dadung/dadung4.png" alt="">
                        </div>
                        <div>
                            <h4>Granvia</h4>
                            <p>Giá: 3,072,000,000 VND</p>
                            <ul>
                                <li>9 chỗ ngồi</li>
                                <li>Số tự động 6 cấp</li>
                                <li>Động cơ dầu dung tích 2.755 cm3</li>
                            </ul>
                        </div>
                      </div>
                      
                    </div>
                  </div>

                  <!-- === thuongmai type === -->
                  <div class="carousel-item" id="thuongmai">
                    <div class="row">
                      <div class="col-sm-12 col-md-6 col-lg-3">
                        <div>
                          <img class="img-fluid mx-auto d-block" src="images/thuongmai/thuongmai1.png" alt="">
                        </div>
                        <div>
                          <h4>Hiace</h4>
                          <p>Giá: 1,176,000,000 VND</p>
                          <ul>
                            <li>15 chỗ ngồi</li>
                            <li>Số tay 5 cấp</li>
                            <li>Động cơ dầu 2.982 cc</li>
                          </ul>
                        </div>
                      </div>
                    </div>
                  </div>

                  <!-- === bantai type === -->
                  <div class="carousel-item" id="bantai">
                    <div class="row">
                      <div class="col-sm-12 col-md-6 col-lg-3">
                        <div>
                          <img class="img-fluid mx-auto d-block" src="images/bantai/bantai1.png" alt="">
                        </div>
                        <div>
                          <h4>Hilux</h4>
                          <p>Giá: 628,000,000 VND</p>
                          <ul>
                            <li>5 chỗ ngồi</li>
                            <li>Số sàn 6 cấp</li>
                            <li>Xe nhập khẩu</li>
                          </ul>
                        </div>
                      </div>
                    </div>
                  </div>

                  <a class="carousel-control-prev" href="#car-types" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon bg-danger" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                  </a>
                  <a class="carousel-control-next" href="#car-types" role="button" data-slide="next">
                      <span class="carousel-control-next-icon bg-danger" aria-hidden="true"></span>
                      <span class="sr-only">Next</span>
                  </a>
                </div>
              </div>

              <!-- === Image review === -->
              <div class="container">
                  <div class="row row-1">
                      <div class="col img-mg" >
                          <img src="images/homepage/car-review/pic02.jpg" alt="" class="img-rev" data-aos="face-up">
                      </div>
                      <div class="col img-mg">
                          <img src="images/homepage/car-review/pic03.jpg" alt="" class="img-rev" data-aos="face-up">
                      </div>
                  </div>
                  <div class="row row-1">
                      <div class="col img-mg">
                          <img src="images/homepage/car-review/pic04.jpg" alt="" class="img-rev" data-aos="face-up">
                      </div>
                      <div class="col img-mg">
                          <img src="images/homepage/car-review/pic05.jpg" alt="" class="img-rev" data-aos="face-up">
                      </div>
                  </div>
              </div>    
            </div>
        </section> <!-- End Cac Dong xe Section --> 

        <!-- === Dich vu section === -->
        <section class="services section-bg">
            <div class="container">
                <div class="section-title" data-aos="fade-up">
                    <h2>Dịch vụ</h2>
                    <div class="line"></div>
                </div>
                
                <div class="row">
                    <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="fade-up">
                      <div class="icon-box">
                        <div class="service-guarantee">
                          <img src="images/homepage/service/service1.png" alt="">
                        </div>
                        <h4 class="title"><a href="">CHÍNH SÁCH BẢO HÀNH</a></h4>
                        <p class="description">
                            Chính sách mang lại những sửa chữa cần thiết, sử dụng những phụ tùng mới hoặc 
                            những phụ tùng tái chế cho xe của Khách hàng nằm trong chế độ được bảo hành.
                        </p>
                      </div>
                    </div>
          
                    <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="fade-up" data-aos-delay="100">
                      <div class="icon-box icon-box-cyan">
                        <div class="service-guarantee">
                          <img src="images/homepage/service/service2.png" alt="">
                        </div>
                        <h4 class="title"><a href="">DỊCH VỤ BẢO DƯỠNG</a></h4>
                        <p class="description">
                            Dịch vụ kiểm tra, bảo dưỡng một cách định kỳ để đảm bảo chiếc xe của Khách hàng 
                            luôn được vận hành hiệu quả.
                        </p>
                      </div>
                    </div>
          
                    <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="fade-up" data-aos-delay="200">
                      <div class="icon-box icon-box-green">
                        <div class="service-guarantee">
                          <img src="images/homepage/service/service3.png" alt="">
                        </div>
                        <h4 class="title"><a href="">DỊCH VỤ SỬA CHỮA</a></h4>
                        <p class="description">
                            Ngoài dịch vụ bảo dưỡng và sửa chữa những hiện tượng bất thường trên xe, Toyota 
                            cũng cung cấp dịch vụ sửa chữa đối với những hư hỏng do va chạm mà chiếc xe của 
                            Khách hàng gặp phải trong quá trình sử dụng.
                        </p>
                      </div>
                    </div>
          
                    <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="fade-up" data-aos-delay="300">
                      <div class="icon-box icon-box-blue">
                        <div class="service-guarantee">
                          <img src="images/homepage/service/service4.png" alt="">
                        </div>
                        <h4 class="title"><a href="">KIỂM TRA VÀ TRIỆU HỒI</a></h4>
                        <p class="description">
                            Khách hàng có thể kiểm tra xem xe của mình có thuộc các chương trình kiểm tra & 
                            triệu hồi hay không.
                        </p>
                      </div>
                    </div>
          
                  </div>

                
            </div>
        </section> <!-- End Dich vu Section -->

        <!-- === Dich vu gia tang section === -->
        <section class="services section-bg">
          <div class="container">
              <div class="section-title" data-aos="fade-up">
                  <h2>Dịch vụ gia tăng</h2>
                  <div class="line"></div>
              </div>
              
              <div class="row">
                <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="fade-up">
                  <div class="icon-box">
                    <div class="service-guarantee">
                      <img src="images/homepage/service/service2-1.png" alt="">
                    </div>
                    <h4 class="title"><a href="">VAY TOYOTA - MUA TOYOTA</a></h4>
                    <p class="description">
                      Các sản phẩm vay mua xe Toyota đáp ứng đa dạng các nhu cầu tài 
                      chính của khách hàng.
                    </p>
                  </div>
                </div>
      
                <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="fade-up" data-aos-delay="100">
                  <div class="icon-box icon-box-cyan">
                    <div class="service-guarantee">
                      <img src="images/homepage/service/service2-2.png" alt="">
                    </div>
                    <h4 class="title"><a href="">PHỤ TÙNG VÀ PHỤ KIỆN</a></h4>
                    <p class="description">
                      Tất cả các phụ tùng, phụ kiện chính hãng, được nhập khẩu từ Nhật 
                      Bản, Thái Lan và các nước trong khu vực.
                    </p>
                  </div>
                </div>
      
                <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="fade-up" data-aos-delay="200">
                  <div class="icon-box icon-box-green">
                    <div class="service-guarantee">
                      <img src="images/homepage/service/service2-3.png" alt="">
                    </div>
                    <h4 class="title"><a href="">XE ĐÃ QUA SỬ DỤNG</a></h4>
                    <p class="description">
                        Xe Toyota đã qua sử dụng với chất lượng đảm bảo và giá cả hợp lý.
                    </p>
                  </div>
                </div>
      
                <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="fade-up" data-aos-delay="300">
                  <div class="icon-box icon-box-blue">
                    <div class="service-guarantee">
                      <img src="images/homepage/service/service2-4.png" alt="">
                    </div>
                    <h4 class="title"><a href="">BẢO HIỂM TOYOTA</a></h4>
                    <p class="description">
                      Sản phẩm dành riêng cho khách hàng Toyota, với dịch vụ 1 cửa về Bảo 
                      hiểm, quy trình xử lý chất lượng cao, nhanh chóng.
                    </p>
                  </div>
                </div>
        
              </div>
          </div>
      </section> <!-- End Dich vu gia tang Section -->

      <!-- === Contact and Find Service section === -->
      <section class="services section-bg">
        <div class="container">
          <div class="row">
            <div class="col-lg-6 col-md-6">
              <h2>Trao Đổi Với Chúng Tôi</h2>
              <div class="line"></div>
              <form action="#" method="POST">
                <select name="select-service" id="select-service">
                  <option value="opt-1">Bán hàng</option>
                  <option value="opt-2">Dịch vụ</option>
                  <option value="opt-3">Đại lý</option>
                  <option value="opt-4">Tư vấn tài chính</option>
                  <option value="opt-5">Góp ý website</option>
                </select> <br>
                <input type="text" id="contact-name" name="customer" placeholder="Họ tên (*)"> <br>
                <input type="number" id="contact-phone" name="phone" placeholder="Điện thoại (*)"> <br>
                <input type="email" id="contact-email" name="mail" placeholder="Email"> <br>
                <textarea id="contact-content" name="content" placeholder="Nội dung"></textarea> <br>
                <input type="submit" id="contact-submit" name="submit-customer-info" value="Gửi">
              </form>
            </div>

            <div class="col-lg-6 col-md-6">
              <h2>Đại lý của bạn</h2>
              <div class="line"></div>
              <form action="#" method="POST">
                <select name="region" id="select-region">
                  <option value="opt-1">Miền Bắc</option>
                  <option value="opt-2">Miền Trung</option>
                  <option value="opt-3">Miền Nam</option>
                </select> <br>
                <input type="text" id="contact-province" name="province" placeholder="Tỉnh/Thành"> <br>
                <input type="text" id="contact-ward" name="ward" placeholder="Quận/Huyện"> <br>
                <input type="submit" id="contact-place" name="place" value="Tìm đại lý">
              </form>
            </div>
          </div>
        </div>
      </section> <!-- End Contact and Find Service Section -->

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

    <script>
    $(document).ready(() => {
      let name = localStorage.getItem('Username');
      if (name!=undefined){
        $('#loginButton').text(name)
      }
      else{
        $('#loginButton').text('Đăng nhập')
      }

      $('#logoutButton').click(()=>{
        
      })
    });
  </script>

    <!-- <script src="js/func.js"></script> -->
    <!-- <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script> -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
</body>
</html>
