<?= $this->extend('layouts/layout2') ?>
<?= $this->section('content') ?>
<!-- ======= Header ======= -->
<header id="header" class="fixed-top d-flex align-items-center ">
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
                <li><a class="nav-link" href="/">Beranda</a></li>
                <li><a class="nav-link" href="/logout">Logout</a></li>
            </ul>
            <i class="bi bi-list mobile-nav-toggle"></i>
        </nav><!-- .navbar -->
    </div>
</header><!-- End Header -->

<main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section class="breadcrumbs">
        <div class="container">

            <div class="d-flex justify-content-between align-items-center">
                <h2>Halaman Pesanan</h2>
                <ol>
                    <li><a href="/">Home</a></li>
                    <li>Halaman Pesanan</li>
                </ol>
            </div>

        </div>
    </section><!-- End Breadcrumbs -->

    <section class="inner-page">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <?php if (service('validation')->getErrors()) : ?>
                                <div class="alert alert-danger" role="alert">
                                    <?= service('validation')->listErrors() ?>
                                </div>
                            <?php endif; ?>
                            <h3>Apakah anda yakin untuk membeli kue <?= $product[0]->title ?>?</h3>
                            <p>Harga : <?= $product[0]->price ?></p>
                        </div>
                        <form method="POST" action="/user/create-pesanan" enctype="multipart/form-data">
                            <?php csrf_field() ?>
                            <label for="jumlah">Jumlah</label>
                            <input type="number" name="jumlah" id="jumlah" class="form-control">
                            <button class="btn btn-primary" type="submit">Iya</button>
                            <a href="/user" class="btn btn-secondary" type="button">Kembali</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </section>
</main><!-- End #main -->
<?= $this->endSection() ?>