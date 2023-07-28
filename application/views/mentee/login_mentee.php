
<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta
    name="viewport"
    content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />
    <link rel="icon" href="img/favicon.png" type="image/png" />
    <title>Ruang Hijrah</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/ruanghijrah/css/bootstrap.css" />
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/ruanghijrah/css/flaticon.css" />
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/ruanghijrah/css/themify-icons.css" />
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/ruanghijrah/vendors/owl-carousel/owl.carousel.min.css" />
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/ruanghijrah/vendors/nice-select/css/nice-select.css" />
    <!-- main css -->
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/ruanghijrah/css/style.css" />

    <style>
        html, body {
            height: 100%;
            margin: 0;
            padding: 0;
        }
        
        .registration_area {
            background-color: #002A61; /* Ganti dengan warna biru yang diinginkan */
            padding: 80px 0;
            display: flex;
            align-items: center;
            justify-content: center;
            min-height: 100vh;
        }

        .register_form {
        font-size: 20px; /* Ukuran font teks dalam kotak */
        padding: 80px; /* Ruang di sekitar konten dalam kotak */
        width: 450px;
        border: 1px solid #000; /* Garis pinggiran kotak */
        border-radius: 10px; /* Membuat sudut-sudut kotak melengkung */
        background-color: #fff; /* Warna latar belakang kotak */
        box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1); /* Efek bayangan pada kotak */
        }

        .register_form h3 {
        font-size: 35px; /* Ukuran font untuk judul "Courses for Free" */
        margin-bottom: 10px; /* Jarak antara judul dengan konten di bawahnya */
        }

        .register_form p {
        font-size: 19px; /* Ukuran font untuk teks "It is high time for learning" */
        }
    </style>
</head>

<body>

    <!--================ Start Registration Area =================-->
    <div class="section_gap registration_area">
    <div class="container">
        <div class="row align-items-center">
        <div class="col-lg-7">
            <div class="row clock_sec clockdiv" id="clockdiv">
            <div class="col-lg-12">
                <h1 class="mb-3">Silahkan Login</h1>
                <p>
                Ruang Hijrah ini akan membuat proses mentoring mu menjadi lebih baik.
                </p>
            </div>
            </div>
        </div>
        <div class="col-lg-4 offset-lg-1">
            <div class="register_form">
            <h3>Ruang Hijrah</h3>
            <p>Login Mentee</p>
            <?php echo $this->session->flashdata('pesan') ?>
            <form method="post" action="<?php echo base_url('mentee/auth/proses_login_mentee') ?>" class="mentee">
                                        <div class="form-group">
                                            <input type="text" class="form-control form-control-user"
                                                id="exampleInputEmail" aria-describedby="emailHelp"
                                                placeholder="NIM Anda" name="nim">
                                                <?php echo form_error('nim', '<div
                                                class = "text-danger small ml-3">','</div>')
                                                ?>
                                        </div>
                                        <div class="form-group">
                                            <input type="password" class="form-control form-control-user"
                                                id="exampleInputPassword" placeholder="Password" name="password">
                                                <?php echo form_error('password', '<div
                                                class = "text-danger small ml-3">','</div>')
                                                ?>
                                        </div>
                                        <br>
                                        
                                        
                                        <button class="btn btn-primary 
                                        btn-user btn-block">Login
                                        </button>
                                        <br>
                                    
                                    </form>
            </div>
        </div>
        </div>
    </div>
    </div>
    <!--================ End Registration Area =================-->

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
