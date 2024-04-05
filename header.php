<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Meta -->
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Blog Site Template">
  <meta name="author" content="https://youtube.com/FollowAndrew">

  <?php
  wp_head();
  $rootURL = '/wordpress';
  $urls = explode('/', $_SERVER['REQUEST_URI']);
  $slugName = $urls[2];
  $fEN = get_template_directory_uri() . "/asset/images/f-en.jpg";
  $fVN = get_template_directory_uri() . "/asset/images/f-vn.jpg";
  $logo = get_template_directory_uri() . "/asset/images/logo.png";
  $slide1 = get_template_directory_uri() . "/asset/images/slide1.png";
  $slide2 = get_template_directory_uri() . "/asset/images/slide2.png";
  $slide3 = get_template_directory_uri() . "/asset/images/slide3.png";
  $slide4 = get_template_directory_uri() . "/asset/images/slide4.png";
  $slide5 = get_template_directory_uri() . "/asset/images/slide5.png";

  ?>

  <link rel="shortcut icon" href="<?php echo $logo ?>">

</head>

<body>
  <div class="container py-3 navbar-fixed-top hidden-xs hidden-sm hidden-md">
    <div class="d-flex flex-row justify-content-between align-items-center">
      <a class="navbar-brand" href="<?php echo $rootURL; ?>"><img width="150" src="<?php echo $logo ?>" /></a>
      <div class="d-flex flex-row justify-content-center align-items-center">
        <div class="mx-4 p-2 border rounded-pill">
          <span class="text-danger font-weight-bold">Hotline: 0999 999 999</span>
        </div>
        <div class="switch-language font-weight-bold">
          <a class="mr-2" href="#"><span class="text-dark">VI</span></a>
          <a href="#"><span class="text-secondary">EN</span></a>
        </div>
      </div>
    </div>
  </div>

  <!--Navbar blue-->
  <nav class="navbar p-0 navbar-expand-lg bg-blue">
    <div class="container">
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <i class="fa fa-bars text-white" aria-hidden="true"></i>  
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item dropdown <?php echo $slugName == 'san-pham' ? 'active' : ''; ?>">
            <a class="nav-link py-3 pl-1 pr-5 cursor-pointer block text-white dropdown-toggle" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-bars text-white" aria-hidden="true"></i>&nbsp;Danh mục sản phẩm
            </a>
            <div class="dropdown-menu dropdown-primary" aria-labelledby="navbarDropdownMenuLink">
              <?php

              $taxonomy     = 'product_cat';
              $orderby      = 'name';
              $show_count   = 0;      // 1 for yes, 0 for no
              $pad_counts   = 0;      // 1 for yes, 0 for no
              $hierarchical = 1;      // 1 for yes, 0 for no  
              $title        = '';
              $empty        = 0;

              $args = array(
                'taxonomy'     => $taxonomy,
                'orderby'      => $orderby,
                'show_count'   => $show_count,
                'pad_counts'   => $pad_counts,
                'hierarchical' => $hierarchical,
                'title_li'     => $title,
                'hide_empty'   => $empty
              );
              $all_categories = get_categories($args);
              foreach ($all_categories as $cat) :
                // get the thumbnail id using the queried category term_id
                $thumbnail_id = get_woocommerce_term_meta($cat->term_id, 'thumbnail_id', true);

                // get the image URL
                $image = wp_get_attachment_url($thumbnail_id);
              ?>
                <a class="dropdown-item py-2 d-flex flex-row justify-content-between align-items-center" href="<?php echo $rootURL . '/san-pham?category=' . $cat->name . '&paginate=1' ?>"><span><?php echo $cat->name; ?></span><i class="fa fa-caret-right h4" aria-hidden="true"></i></a>
              <?php
              endforeach;
              ?>
              <a class="dropdown-item py-2" href="#">Tư vấn kỹ thuật</a>
              <div class="dropdown-item">
                <form class="form-inline" action="<?php echo $rootURL; ?>/tim-kiem">
                  <input class="form-control mr-sm-2" type="text" name="text" placeholder="Tìm kiếm" aria-label="Search">
                </form>
              </div>
            </div>
          </li>
          <li class="nav-item <?php echo $slugName == '' ? 'active' : ''; ?>">
            <a class="nav-link py-3 px-5 block text-white" href="<?php echo $rootURL; ?>">Trang chủ <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item <?php echo $slugName == 'gioi-thieu' ? 'active' : ''; ?>">
            <a class="nav-link py-3 px-5 block text-white" href="<?php echo $rootURL; ?>/gioi-thieu">Giới thiệu</a>
          </li>
          <li class="nav-item <?php echo $slugName == 'tin-tuc' ? 'active' : ''; ?>">
            <a class="nav-link py-3 px-5 block text-white" href="<?php echo $rootURL; ?>/tin-tuc">Tin tức</a>
          </li>
          <li class="nav-item <?php echo $slugName == 'lien-he' ? 'active' : ''; ?>">
            <a class="nav-link py-3 px-5 block text-white" href="<?php echo $rootURL; ?>/lien-he">Liên hệ</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <div class="header-slide clsslide">
    <div class="card card-raised card-carousel">
      <div id="carouselindicators" class="carousel slide" data-ride="carousel" data-interval="3000">
        <ol class="carousel-indicators">
          <li data-target="#carouselindicators" data-slide-to="0" class="active"></li>
          <li data-target="#carouselindicators" data-slide-to="1" class=""></li>
          <li data-target="#carouselindicators" data-slide-to="2" class=""></li>
          <li data-target="#carouselindicators" data-slide-to="3" class=""></li>
          <li data-target="#carouselindicators" data-slide-to="4" class=""></li>
        </ol>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img class="d-block" src="<?php echo $slide1 ?>" alt="First slide">
          </div>
          <div class="carousel-item">
            <img class="d-block" src="<?php echo $slide2 ?>" alt="Second slide">
          </div>
          <div class="carousel-item">
            <img class="d-block" src="<?php echo $slide3 ?>" alt="Third slide">
          </div>
          <div class="carousel-item">
            <img class="d-block" src="<?php echo $slide4 ?>" alt="Four slide">
          </div>
          <div class="carousel-item">
            <img class="d-block" src="<?php echo $slide5 ?>" alt="Five slide">
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