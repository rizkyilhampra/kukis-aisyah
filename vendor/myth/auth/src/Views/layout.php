<!doctype html>
<html lang="id">

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

    <!-- Template Main CSS File -->
    <link href="<?php echo base_url() ?>/assets/css/style.css" rel="stylesheet">
    <style>
        body {
            padding-top: 6rem;
        }
    </style>

    <?= $this->renderSection('pageStyles') ?>
</head>

<body>

    <?= view('Myth\Auth\Views\_navbar') ?>

    <main role="main" class="container">
        <?= $this->renderSection('main') ?>
    </main><!-- /.container -->

    <!-- Vendor JS Files -->
    <script src="<?php echo base_url() ?>/assets/vendor/aos/aos.js"></script>
    <script src="<?php echo base_url() ?>/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="<?php echo base_url() ?>/assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="<?php echo base_url() ?>/assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="<?php echo base_url() ?>/assets/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="<?php echo base_url() ?>/assets/vendor/php-email-form/validate.js"></script>

    <!-- Template Main JS File -->
    <script src="<?php echo base_url() ?>/assets/js/main.js"></script>

    <!-- Bootstrap core JavaScript
================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <!-- <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script> -->

    <?= $this->renderSection('pageScripts') ?>
</body>

</html>