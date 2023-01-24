<?= $this->extend('layouts/layout2') ?>
<?= $this->section('cssCustom') ?>
<link rel="stylesheet" href="<?php echo base_url() ?>/stisla-template/assets/chocolat/dist/css/chocolat.css">
<?= $this->endSection() ?>
<?= $this->section('content') ?>
<main id="main">

    <section class="inner-page">
        <div class="container">
            <?php if (session()->getFlashdata('success_message')) : ?>
                <div class="alert alert-success" role="alert">
                    <?= session()->getFlashdata('success_message'); ?>
                </div>
            <?php endif; ?>
            <div class="card shadow">
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-striped" id="table-1">
                            <thead>
                                <tr>
                                    <th class="text-center">No</th>
                                    <th>Nama Kue</th>
                                    <th>Kategori Kue</th>
                                    <th>Status</th>
                                    <th>Jumlah</th>
                                    <th>Estimasi Selesai</th>
                                    <th>Total Harga</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $no = 1;
                                foreach ($pesananDetail as $r) : ?>
                                    <tr>
                                        <td><?= $no++ ?></td>
                                        <td><?= $r['title'] ?></td>
                                        <td><?= $r['category'] ?></td>
                                        <td><?= $r['status'] ?></td>
                                        <td><?= $r['jumlah'] ?></td>
                                        <td><?= $r['estimation'] ?></td>
                                        <td><?= number_to_currency($r['total_harga'],'IDR','id') ?></td>
                                    </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                </div>

            </div>
        </div>
    </section>

</main><!-- End #main -->
<?= $this->endSection() ?>