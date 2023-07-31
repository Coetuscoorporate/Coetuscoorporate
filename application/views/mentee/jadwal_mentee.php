
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
    <title>Jadwal Mentoring</title>
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
            <h2>Jadwal Mentoring</h2>
            <div class="page_link">
              <a href="index.html">Home</a>
              <a href="about-us.html">Jadwal Mentoring</a>
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
            <h4>JADWAL MENTORING</h4>
            <p>
              Berikut Jadwal Mentoring :
            </p>
            
            <!-- Tampilkan informasi data mentee dalam tabel -->
            <table class="table">

            <tr>
                <td class="label-cell"><strong>Mentor</strong></td>
                <td>: <?php echo $nama_mentor; ?></td>
            </tr>
            <tr>
                <td class="label-cell"><strong>Judul Materi</strong></td>
                <td>: <?php echo $judul_materi; ?></td>
            </tr>
            <tr>
                <td class="label-cell"><strong>Nama Kelompok</strong></td>
                <td>: <?php echo $nama_kelompok; ?></td>
            </tr>

            <tr>
                <td class="label-cell"><strong>Waktu</strong></td>
                <td>: <?php echo $waktu; ?></td>
            </tr>

            <tr>
                <td class="label-cell"><strong>Tempat</strong></td>
                <td>: <?php echo $Tempat; ?></td>
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
