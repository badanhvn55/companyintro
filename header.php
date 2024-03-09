<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Meta -->
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Blog Site Template">
  <meta name="author" content="https://youtube.com/FollowAndrew">
  <link rel="shortcut icon" href="images/logo.png">

  <?php
  wp_head();

  $logo = get_template_directory_uri() . "/asset/images/logo.png";
  $slide1 = get_template_directory_uri() . "/asset/images/slide2.png";
  $slide2 = get_template_directory_uri() . "/asset/images/slide3.png";
  $slide3 = get_template_directory_uri() . "/asset/images/slide4.png";
  $slide4 = get_template_directory_uri() . "/asset/images/slide5.png";

  ?>

</head>

<body>
  <div class="navbar-fixed-top hidden-xs hidden-sm hidden-md">
    <header class="header large-header">
      <div class="header-top">
        <div class="container">
          <ul class="pull-right">
            <li><a href="#"><i class="fas fa-stroopwafel"></i>Sitemap</a></li>
            <li><a href="#"><i class="fas fa-stroopwafel"></i>Hạt Ngọc Trời</a></li>
            <li><a href="#"><i class="fas fa-stroopwafel"></i>Hương Vị Trời</a></li>
            <li><a href="#"><i class="fas fa-stroopwafel"></i>Quản Nông Xanh</a></li>
            <li><a href="#"><i class="fas fa-stroopwafel"></i>Tuyển Dụng</a></li>
            <li><a href="#"><i class="fas fa-stroopwafel"></i>Liên Hệ</a></li>
            <li><a href="#"><i class="fas fa-stroopwafel"></i></a></li>
            <li><a href="#"><i class="fas fa-stroopwafel"></i></a></li>
          </ul>
        </div>
      </div>
      <div class="header-bottom"></div>
    </header>
  </div>

  <nav class="container navbar navbar-expand-lg">
    <a class="navbar-brand" href="#"><img width="100" src="<?php echo $logo ?>" /></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
      <ul class="navbar-nav">
        <li class="nav-item active">
          <a class="nav-link" href="#">Trang chủ <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Giới thiệu</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Tin tức</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Chuyển đổi số
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
            <a class="dropdown-item" href="#">Action</a>
            <a class="dropdown-item" href="#">Another action</a>
            <a class="dropdown-item" href="#">Something else here</a>
          </div>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Sản phẩm</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Quan hệ cổ đông</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Phát triển bền vững</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Media</a>
        </li>
      </ul>
    </div>
  </nav>

  <!-- <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container">
      <a class="navbar-brand" href="#">LOGO</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">Trang chủ</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Giới thiệu</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Tin tức
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
              <li><a class="dropdown-item" href="#">Action</a></li>
              <li><a class="dropdown-item" href="#">Another action</a></li>
              <li>
                <hr class="dropdown-divider">
              </li>
              <li><a class="dropdown-item" href="#">Something else here</a></li>
            </ul>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Tin tức</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Chuyển đổi số</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Sản phẩm</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Quan hệ cổ đông</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Phát triển bền vững</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Media</a>
          </li>
        </ul>
      </div>
    </div>
  </nav> -->

  <div class="header-slide clsslide">
    <div class="card card-raised card-carousel">
      <div id="carouselindicators" class="carousel slide" data-ride="carousel" data-interval="3000">
        <ol class="carousel-indicators">
          <li data-target="#carouselindicators" data-slide-to="0" class="active"></li>
          <li data-target="#carouselindicators" data-slide-to="1" class=""></li>
          <li data-target="#carouselindicators" data-slide-to="2" class=""></li>
          <li data-target="#carouselindicators" data-slide-to="3" class=""></li>
        </ol>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img class="d-block w-100" src="<?php echo $slide1 ?>" alt="Second slide">
          </div>
          <div class="carousel-item">
            <img class="d-block w-100" src="<?php echo $slide2 ?>" alt="Third slide">
          </div>
          <div class="carousel-item">
            <img class="d-block w-100" src="<?php echo $slide3 ?>" alt="Four slide">
          </div>
          <div class="carousel-item">
            <img class="d-block w-100" src="<?php echo $slide4 ?>" alt="Five slide">
          </div>
        </div>
        <a class="carousel-control-prev" href="#carouselindicators" role="button" data-slide="prev" data-abc="true">
          <i class="fa fa-chevron-left"></i>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselindicators" role="button" data-slide="next" data-abc="true">
          <i class="fa fa-chevron-right"></i>
          <span class="sr-only">Next</span>
        </a>
      </div>
    </div>

  </div>