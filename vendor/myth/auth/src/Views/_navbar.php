<!-- <nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top">
    <a class="navbar-brand" href="#">Myth:Auth</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarsExampleDefault">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="#"><?= lang('Auth.home') ?> <span class="sr-only">(<?= lang('Auth.current') ?>)</span></a>
            </li>
        </ul>
    </div>
</nav> -->


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
                <li><a class="nav-link" href="/"><?= lang('Auth.home') ?></a></li>
            </ul>
            <i class="bi bi-list mobile-nav-toggle"></i>
        </nav><!-- .navbar -->
    </div>
</header><!-- End Header -->