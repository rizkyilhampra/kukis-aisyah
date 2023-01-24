<?= $this->extend('layouts/layout') ?>
<?= $this->section('cssCustom') ?>
<link rel="stylesheet" href="<?php echo base_url() ?>/stisla-template/assets/chocolat/dist/css/chocolat.css">
<?= $this->endSection() ?>
<?= $this->section('content') ?>

<div class="main-wrapper">
    <!-- Main Content -->
    <div class="main-content">
        <section class="section">
            <div class="section-header d-flex justify-content-between">
                <h1>Daftar Kue</h1>
                <a href="/admin/product/create" class="btn btn-primary " role="button">Buat Kue Baru</a>
            </div>
            <div class="section-body">
                <?php if (session()->getFlashdata('success_message')) : ?>
                    <div class="alert alert-success" role="alert">
                        <?= session()->getFlashdata('success_message'); ?>
                    </div>
                <?php endif; ?>
                <div class="row">
                    <?php foreach ($products as $p) : ?>
                        <div class="col-12 col-sm-6 col-lg-4">
                            <div class="card shadow">
                                <div class="gallery gallery-fw" data-item-height="200">
                                    <div class="gallery-item card-img-top" data-image="<?php echo base_url($p->image); ?>" data-title="<?= $p->title ?>"></div>
                                </div>
                                <div class="card-header pb-0" style="min-height: auto;">
                                    <h3 class="mb-0"><?php echo $p->title ?></h3>
                                </div>
                                <div class="card-body py-0">

                                    <!-- <div class="gallery-item" data-image="../assets/img/news/img10.jpg" data-title="Image 2"></div>
                                    <div class="gallery-item gallery-more" data-image="../assets/img/news/img08.jpg" data-title="Image 3">
                                        <div>+2</div>
                                    </div>
                                    <div class="gallery-item gallery-hide" data-image="../assets/img/news/img01.jpg" data-title="Image 4"></div> -->

                                    <div class="card-title">
                                        <?php if ($p->description == true) : ?>
                                            <div class="description">
                                                <p>
                                                    <?= $p->description ?>
                                                </p>
                                            </div>
                                        <?php endif ?>
                                        <div class="category pb-3">
                                            <div class="row">
                                                <div class="col-4">
                                                    Kategori :
                                                </div>
                                                <div class="col-4">
                                                    <?= $p->category ?>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-4">
                                                    Stok :
                                                </div>
                                                <div class="col-4">
                                                    <?= $p->stok ?>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="price">
                                            <h5>
                                                <?= number_to_currency($p->price, 'IDR','id') ?>
                                            </h5>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-footer pt-0">
                                    <hr>
                                    <div class="row">
                                        <div class="col-6">
                                            <a role="button" type="button" class="btn btn-warning btn-block"  href="<?= site_url('admin/product/update/' . $p->id); ?>">
                                                Ubah
                                            </a>
                                        </div>
                                        <div class="col-6">
                                            <button type="button" class="btn btn-danger btn-block" onclick="return deleteProduct('<?php echo $p->id; ?>');">
                                                Hapus
                                            </button>
                                        </div>
                                    </div>


                                </div>
                            </div>
                        </div>
                    <?php endforeach ?>
                </div>
            </div>
        </section>
    </div>
</div>
<?= $this->endSection() ?>

<?= $this->section('jsLibraries') ?>
<script src="<?= base_url() ?>/stisla-template/assets/chocolat/dist/js/jquery.chocolat.min.js"></script>
<?= $this->endSection() ?>

<?= $this->section('jsCustom') ?>
<script>
    function deleteProduct(id) {
        var confirmation = confirm("Yakin untuk menghapus item ini?");

        if (confirmation == true) {
            fetch("<?php echo site_url('/admin/product/delete'); ?>/" + id, {
                method: 'DELETE'
            }).then(data => {
                location.reload();
            });
        }
    }
</script>
<?= $this->endSection() ?>