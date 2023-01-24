<?= $this->extend('layouts/layout2') ?>
<?= $this->section('content') ?>
<section class="inner-page">
    <div class="container">
        <?php if (service('validation')->getErrors()) : ?>
            <div class="alert alert-danger" role="alert">
                <?= service('validation')->getError('jumlah') ?>
            </div>
        <?php endif; ?>
        <div class="card shadow">
            <div class="card-header text-center py-3">
                <h3 style="font-weight: 600;" class="m-0">
                    Konfirmasi Pesanan
                </h3>
            </div>
            <div class="card-body">
                <p>Apakah anda yakin untuk membeli <?= $product->title ?>?</p>
                <div class="col-lg-6 col-12">
                    <div class="row">
                        <div class="col">
                            Harga :
                        </div>
                        <div class="col">
                            Rp. <?= $product->price ?>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            Jumlah :
                        </div>
                        <div class="col">
                            <?= $jumlahProduct?>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            Total Harga :
                        </div>
                        <div class="col">
                            <b>Rp. <?= $totalharga[0]['totalharga'] ?>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card-footer">
                <div class="form-group">
                    <form method="post" action="" enctype="multipart/form-data">
                        <?php echo csrf_field()?>
                        <input type="hidden" name="totalharga" value="<?php session()->set('d', $totalharga[0]['totalharga']) ?>">
                        <input type="hidden" name="jumlahproduct" value="<?php session()->set('e', $jumlahProduct) ?>">
                        <button class="btn btn-primary" type="submit">Konfirmasi</button>
                    </form>
                </div>
            </div>
        </div>
</section>
</main>
<?= $this->endSection() ?>