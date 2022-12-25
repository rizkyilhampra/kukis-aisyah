<?= $this->extend('layouts/layout') ?>

<?php echo $this->section('cssCustom'); ?>
<link rel="stylesheet" href="<?= base_url() ?>/stisla-template/assets/datatables.net-bs4/css/dataTables.bootstrap4.min.css">
<link rel="stylesheet" href="<?= base_url() ?>/stisla-template/assets/datatables.net-select-bs4/css/select.bootstrap4.min.css">

<?php
echo $this->endSection();
?>

<?= $this->section('content'); ?>

<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Daftar Pesanan</h1>
        </div>
        <div class="section-body">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-striped" id="table-2">
                                    <thead>
                                        <tr>
                                            <th class="text-center">No</th>
                                            <th>Pesanan ID</th>
                                            <th>Nama Pelanggan</th>
                                            <th>Waktu Dibuat</th>
                                            <th>Status</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $no = 1;
                                        foreach ($row as $r) : ?>
                                            <tr>
                                                <td><?= $no++ ?></td>
                                                <td><?= 'PI' . $r['id'] ?></td>
                                                <td><?= $r['name'] ?></td>
                                                <td><?= $r['created_at'] ?></td>
                                                <td><?= $r['status'] ?></td>
                                                <td><a href="<?php echo site_url('admin/pesanan/detailpesanan/' . $r['id']); ?>" class="btn btn-secondary">Detail</a>
                                                <td>
                                            </tr>
                                        <?php endforeach; ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>


<?= $this->endSection(); ?>
<?= $this->section('jsLibraries') ?>
<script src="<?php echo base_url(); ?>/stisla-template/assets/datatables/media/js/jquery.dataTables.min.js"></script>
<script src="<?php echo base_url(); ?>/stisla-template/assets/datatables.net-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="<?php echo base_url(); ?>/stisla-template/assets/datatables.net-select-bs4/js/select.bootstrap4.min.js"></script>
<?= $this->endSection() ?>
<?= $this->section('jsCustom'); ?>
<script src="<?php echo base_url(); ?>/stisla-template/assets/js/page/modules-datatables.js"></script>
<?php echo $this->endSection(); ?>