<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Kukis Aisyah</title>
    <meta content="Kukis aisyah adalah sebuah usaha kue yang berletak di banjarmasin, kalimantan selatan. Kukis Aisyah menjual pesanan berbagai rasa dan varian kue kering dan kue basah." name="description">
    <meta content="kue kering dan kue basah banjarmasin" name="keywords">

    <!-- Favicons -->
    <link href="<?php echo base_url() ?>/favicon.ico" rel="icon">
    <link href="<?php echo base_url() ?>/favicon.ico" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="<?php echo base_url() ?>/assets/vendor/animate.css/animate.min.css" rel="stylesheet">
    <link href="<?php echo base_url() ?>/assets/vendor/aos/aos.css" rel="stylesheet">
    <link href="<?php echo base_url() ?>/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url() ?>/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="<?php echo base_url() ?>/assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="<?php echo base_url() ?>/assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="<?php echo base_url() ?>/assets/vendor/remixicon/remixicon.css" rel="stylesheet">
    <link href="<?php echo base_url() ?>/assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
    <?= $this->renderSection('cssCustom') ?>

    <!-- Template Main CSS File -->
    <link href="<?php echo base_url() ?>/assets/css/style.css" rel="stylesheet">
    <?= $this->renderSection('cssCustom2') ?>

    <!-- =======================================================
  * Template Name: Selecao - v4.9.1
  * Template URL: https://bootstrapmade.com/selecao-bootstrap-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
======================================================== -->
</head>

<body>
    <!-- ======= Header ======= -->
    <header id="header" style="z-index: 889;" class="fixed-top d-flex align-items-center ">
        <div class="container d-flex align-items-center justify-content-between">

            <div class="logo">
                <!-- <h1><a href="">Kukis Aisyah</a></h1> -->
                <!-- Uncomment below if you prefer to use an image logo -->
                <a href="<?php echo base_url() ?>">
                    <img src="<?php echo base_url(); ?>/assets/logo-kukis-aisyah.png" alt="logo-kukis-aisyah" class="img-fluid">
                </a>
            </div>
            <nav id="navbar" class="navbar">
                <ul>
                    <li><a class="nav-link" href="/">Home</a></li>
                    <li><a class="nav-link <?= (url_is('user') or url_is('user/buatpesanan*')) ? "active" : ''; ?>" href="/user">Pesan Produk</a></li>
                    <li><a class="nav-link <?= ((url_is('user/status*'))) ? "active" : ''; ?>" href="/user/status">Status</a></li>
                    <li><a class="nav-link" href="/logout">Logout</a></li>
                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav><!-- .navbar -->
        </div>
    </header><!-- End Header -->

    <!-- ======= Breadcrumbs ======= -->
    <section class="breadcrumbs shadow">
        <div class="container">
            <div class="d-flex justify-content-between align-items-center">
                <?php if (url_is('/user') or url_is('/user/buatpesanan*')) : ?>
                    <h4 class="m-0 py-2">Halaman Pesan Produk</h4>
                    <ol>
                        <li><a href="/">Home</a></li>
                        <li>Halaman Pesan Produk</li>
                    </ol>
                <?php endif ?>
                <?php if (url_is('/user/konfirmasipesanan') or url_is('/user/konfirmasipesanan*')) : ?>
                    <h4 class="m-0 py-2">Halaman Konfirmasi</h4>
                    <ol>
                        <li><a href="/">Home</a></li>
                        <li>Halaman Konfirmasi</li>
                    </ol>
                <?php endif ?>
                <?php if (url_is('/user/status')) : ?>
                    <h4 class="m-0 py-2">Halaman Status</h4>
                    <ol>
                        <li><a href="/">Home</a></li>
                        <li>Halaman Status</li>
                    </ol>
                <?php endif ?>
            </div>
        </div>
    </section><!-- End Breadcrumbs -->
    <?= $this->renderSection('content') ?>

    <!-- ======= Footer ======= -->
    <footer id="footer">
        <div class="container">
            <h3>Kukis Aisyah</h3>
            <p>"Nikmati sepotong kue bersama keluarga dan teman-teman"</p>
            <div class="social-links">
                <!-- <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
                <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a> -->
                <a href="https://instagram.com/kuekue_bjm" target="_blank" class="instagram"><i class="bx bxl-instagram"></i></a>
                <!-- <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
                <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a> -->
            </div>
            <div class="copyright">
                &copy; Copyright <strong><span>Kukis Aisyah 2022</span></strong>. All Rights Reserved
            </div>
            <div class="credits">
                <!-- All the links in the footer should remain intact. -->
                <!-- You can delete the links only if you purchased the pro version. -->
                <!-- Licensing information: https://bootstrapmade.com/license/ -->
                <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/selecao-bootstrap-template/ -->
                Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
                Build by <a href="https://bootstrapmade.com/">Rizky Ilham Pratama</a>
            </div>
        </div>
    </footer><!-- End Footer -->

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="<?php echo base_url() ?>/assets/vendor/aos/aos.js"></script>
    <script src="<?php echo base_url() ?>/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="<?php echo base_url() ?>/assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="<?php echo base_url() ?>/assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="<?php echo base_url() ?>/assets/vendor/swiper/swiper-bundle.min.js"></script>
    <?= $this->renderSection('jsLibraries') ?>

    <!-- Template Main JS File -->
    <script src="<?php echo base_url() ?>/assets/js/main.js"></script>

    <?= $this->renderSection('jsCustom') ?>

</body>

</html>