
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />
    <link rel="icon" href="<?php echo base_url() ?>assets/ruanghijrah/img/favicon.png" type="image/png" />
    <title>My Account</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/ruanghijrah/css/bootstrap.css" />
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/ruanghijrah/css/flaticon.css" />
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/ruanghijrah/css/themify-icons.css" />
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/ruanghijrah/vendors/owl-carousel/owl.carousel.min.css" />
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/ruanghijrah/vendors/nice-select/css/nice-select.css" />
    <!-- main css -->
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/ruanghijrah/css/style.css" />

    <style>
        .colored-box {
            background-color: #f0f0f0;
            padding: 20px;
            border-radius: 10px;
        }
       
      

    </style>
  </head>


  <body>
<!--================ Start Header Menu Area =================-->
<header class="header_area white-header">
      <div class="main_menu">
        <div class="search_input" id="search_input_box">
          <div class="container">
            <form class="d-flex justify-content-between" method="" action="">
              <input
                type="text"
                class="form-control"
                id="search_input"
                placeholder="Search Here"
              />
              <button type="submit" class="btn"></button>
              <span
                class="ti-close"
                id="close_search"
                title="Close Search"
              ></span>
            </form>
          </div>
        </div>

        <nav class="navbar navbar-expand-lg navbar-light">
          <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <a class="navbar-brand" href="index.html">
              <img class="logo-2" src="<?php echo base_url() ?>assets/ruanghijrah/img/logo2.png" alt="" />
            </a>
            <button
              class="navbar-toggler"
              type="button"
              data-toggle="collapse"
              data-target="#navbarSupportedContent"
              aria-controls="navbarSupportedContent"
              aria-expanded="false"
              aria-label="Toggle navigation"
            >
              <span class="icon-bar"></span> <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div
              class="collapse navbar-collapse offset"
              id="navbarSupportedContent"
            >
              <ul class="nav navbar-nav menu_nav ml-auto">
                <li class="nav-item">
                  <a class="nav-link" href="<?php echo base_url('mentee/dashboard') ?>">Home</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="about-us.html">About</a>
                </li>
                <li class="nav-item submenu dropdown">
                  <a
                    href="#"
                    class="nav-link dropdown-toggle"
                    data-toggle="dropdown"
                    role="button"
                    aria-haspopup="true"
                    aria-expanded="false"
                    >Pages</a
                  >
                  <ul class="dropdown-menu">
                    <li class="nav-item">
                      <a class="nav-link" href="courses.html">Courses</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="course-details.html"
                        >Course Details</a
                      >
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="elements.html">Elements</a>
                    </li>
                  </ul>
                </li>
                <li class="nav-item submenu dropdown">
                  <a
                    href="#"
                    class="nav-link dropdown-toggle"
                    data-toggle="dropdown"
                    role="button"
                    aria-haspopup="true"
                    aria-expanded="false"
                    >Blog</a
                  >
                  <ul class="dropdown-menu">
                    <li class="nav-item">
                      <a class="nav-link" href="blog.html">Blog</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="single-blog.html"
                        >Blog Details</a
                      >
                    </li>
                  </ul>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="contact.html">Contact</a>
                </li>
                <li class="nav-item">
                  <a href="#" class="nav-link search" id="search">
                    <i class="ti-search"></i>
                  </a>
                </li>
              </ul>
            </div>
          </div>
        </nav>
      </div>
    </header>
    <!--================ End Header Menu Area =================-->


<!--================Home Banner Area =================-->
<section class="banner_area">
  <div class="banner_inner d-flex align-items-center">
    <div class="overlay"></div>
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-6">
          <div class="banner_content text-center">
            <h2>My Account</h2>
            <div class="page_link">
              <a href="index.html">Home</a>
              <a href="about-us.html">My Account</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!--================End Home Banner Area =================-->


<!--================ Start About Area =================-->
<section class="about_area section_gap">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-lg-8">
        <!-- Tambahkan class "colored-box" untuk kotak dengan warna latar belakang yang berbeda -->
        <div class="h_blog_text full-width-box colored-box">
          <div class="h_blog_text_inner left right">
            <h4>Profile</h4>
            <p>
              Subdue whales void god which living don't midst lesser
              yielding over lights whose. Cattle greater brought sixth fly
              den dry good tree isn't seed stars were.
            </p>
            <p>
              Subdue whales void god which living don't midst lesser yieldi
              over lights whose. Cattle greater brought sixth fly den dry
              good tree isn't seed stars were the boring.
            </p>
            
            <!-- Tampilkan informasi data mentee dalam tabel -->
            <table class="table">
            <tr>
                <td class="label-cell"><strong>Nama Mentee</strong></td>
                <td>: Titi</td>
            </tr>
            <tr>
                <td class="label-cell"><strong>Email</strong></td>
                <td>: Titi@example.com</td>
            </tr>
            <tr>
                <td class="label-cell"><strong>Password</strong></td>
                <td>: ********</td>
            </tr>
              <!-- Tambahkan baris lain jika diperlukan -->
            </table>
            <!-- Tampilkan informasi data mentee dalam tabel -->
            
            <a class="primary-btn" href="#">
              Learn More <i class="ti-arrow-right ml-1"></i>
            </a>
          </div>
        </div>
        <!-- Tambahkan class "colored-box" untuk kotak dengan warna latar belakang yang berbeda -->
      </div>
    </div>
  </div>
</section>


<!--================ End About Area =================-->




    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="<?php echo base_url() ?>assets/ruanghijrah/js/jquery-3.2.1.min.js"></script>
    <script src="<?php echo base_url() ?>assets/ruanghijrah/js/popper.js"></script>
    <script src="<?php echo base_url() ?>assets/ruanghijrah/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url() ?>assets/ruanghijrah/vendors/nice-select/js/jquery.nice-select.min.js"></script>
    <script src="<?php echo base_url() ?>assets/ruanghijrah/vendors/owl-carousel/owl.carousel.min.js"></script>
    <script src="<?php echo base_url() ?>assets/ruanghijrah/js/owl-carousel-thumb.min.js"></script>
    <script src="<?php echo base_url() ?>assets/ruanghijrah/js/jquery.ajaxchimp.min.js"></script>
    <script src="<?php echo base_url() ?>assets/ruanghijrah/js/mail-script.js"></script>
    <!--gmaps Js-->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCjCGmQ0Uq4exrzdcL6rvxywDDOvfAu6eE"></script>
    <script src="<?php echo base_url() ?>assets/ruanghijrah/js/gmaps.min.js"></script>
    <script src="<?php echo base_url() ?>assets/ruanghijrah/js/theme.js"></script>
  </body>
</html>
