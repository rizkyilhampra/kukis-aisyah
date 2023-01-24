<?= $this->extend('layouts/layout'); ?>

<?= $this->section('cssCustom') ?>
<link rel="stylesheet" href="<?= base_url() ?>/stisla-template/assets/jqvmap/dist/jqvmap.min.css">
<link rel="stylesheet" href="<?= base_url() ?>/stisla-template/assets/summernote/dist/summernote-bs4.css">
<link rel="stylesheet" href="<?= base_url() ?>/stisla-template/assets/owl.carousel/dist/assets/owl.carousel.min.css">
<link rel="stylesheet" href="<?= base_url() ?>/stisla-template/assets/owl.carousel/dist/assets/owl.theme.default.min.css">
<?= $this->endSection() ?>
<?= $this->section('content'); ?>

<!-- Main Content -->
<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Dashboard</h1>
        </div>
        <div class="row">
            <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                <div class="card card-statistic-1">
                    <div class="card-icon bg-primary">
                        <i class="far fa-user"></i>
                    </div>
                    <div class="card-wrap">
                        <div class="card-header">
                            <h4>Total pelanggan terdaftar</h4>
                        </div>
                        <div class="card-body">
                            <?= $totalpelanggan ?>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                <div class="card card-statistic-1">
                    <div class="card-icon bg-danger">
                        <i class="far fa-newspaper"></i>
                    </div>
                    <div class="card-wrap">
                        <div class="card-header">
                            <h4>Total pelanggan yang telah membeli</h4>
                        </div>
                        <div class="card-body">
                            <?= $totaluserpesanan ?>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                <div class="card card-statistic-1">
                    <div class="card-icon bg-warning">
                        <i class="far fa-file"></i>
                    </div>
                    <div class="card-wrap">
                        <div class="card-header">
                            <h4>Jumlah Produk</h4>
                        </div>
                        <div class="card-body">
                            <?= $jumlahproduct ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4 col-md-4 col-sm-12">
                <div class="card card-statistic-2">
                    <div class="card-stats">
                        <div class="card-stats-title">
                            Statistik Pesanan
                        </div>
                        <div class="card-stats-items">
                            <div class="card-stats-item">
                                <div class="card-stats-item-count"><?= $totalPesananBatal ?></div>
                                <div class="card-stats-item-label">Batal</div>
                            </div>
                            <div class="card-stats-item">
                                <div class="card-stats-item-count"><?= $totalPesananProses ?></div>
                                <div class="card-stats-item-label">Proses</div>
                            </div>
                            <div class="card-stats-item">
                                <div class="card-stats-item-count"><?= $totalStatusSelesai ?></div>
                                <div class="card-stats-item-label">Selesai</div>
                            </div>
                        </div>
                    </div>
                    <div class="card-icon shadow-primary bg-primary">
                        <i class="fas fa-archive"></i>
                    </div>
                    <div class="card-wrap">
                        <div class="card-header">
                            <h4>Total Pesanan</h4>
                        </div>
                        <div class="card-body">
                            <?= $totalpesanan ?>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-12">
                <div class="card card-statistic-2 " style="height: 195px;">
                    <div class="row-auto d-flex justify-content-center h-100 align-items-center">
                        <div class="row">
                            <div class="card-icon shadow-primary bg-primary ">
                                <i class="fas fa-dollar-sign"></i>
                            </div>
                            <div class="card-wrap align-self-start">
                                <div class="card-header">
                                    <h4>Total Harga Semua Pesanan</h4>
                                </div>
                                <div class="card-body">
                                    <?= number_to_currency($totalJumlahHargaPesanan, 'IDR', 'id'); ?>
                                </div>
                            </div>
                        </div>

                    </div>

                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-12">
                <div class="card card-statistic-2" style="height: 195px;">
                    <div class="row-auto d-flex justify-content-center h-100 align-items-center">
                        <div class="row">
                            <div class="card-icon shadow-primary bg-primary">
                                <i class="fas fa-shopping-bag"></i>
                            </div>
                            <div class="card-wrap">
                                <div class="card-header">
                                    <h4>Total Product Terjual</h4>
                                </div>
                                <div class="card-body">
                                    <?= $totalProductTerjual ?>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>

    </section>
</div>

<?= $this->endSection(); ?>;

<?= $this->section('jsLibraries') ?>

<script src="<?= base_url() ?>/stisla-template/assets/jquery-sparkline/jquery.sparkline.min.js"></script>
<script src="<?= base_url() ?>/stisla-template/assets/chart.js/dist/Chart.min.js"></script>
<script src="<?= base_url() ?>/stisla-template/assets/owl.carousel/dist/owl.carousel.min.js"></script>
<script src="<?= base_url() ?>/stisla-template/assets/summernote/dist/summernote-bs4.js"></script>
<script src="<?= base_url() ?>/stisla-template/assets/chocolat/dist/js/jquery.chocolat.min.js"></script>
<?= $this->endSection() ?>
<?= $this->section('jsCustom') ?>
<script src="<?= base_url() ?>/stisla-template/assets/js/page/index.js"></script>

<?= $this->endSection() ?>