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
            <!-- menampilkan pesan sukses dari flashdata -->
            <?php if (session()->getFlashdata('success_message')) : ?>
                <div class="alert alert-success" role="alert">
                    <?= session()->getFlashdata('success_message'); ?>
                </div>
            <?php endif; ?>
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-striped" id="table-1">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Pesanan ID</th>
                                            <th>Username</th>
                                            <th>Waktu Dipesan</th>
                                            <th>Status</th>
                                            <th>Estimasi</th>
                                            <th>Total Harga</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $no = 1;
                                        foreach ($row as $r) : ?>
                                            <tr>
                                                <td><?= $no++ ?></td>
                                                <td><?= 'PI' . $r['id'] ?></td>
                                                <td><?= $r['username'] ?></td>
                                                <td><?= $r['created_at'] ?></td>
                                                <td><?= $r['status'] ?></td>
                                                <td><?= $r['estimation'] ?></td>
                                                <td><?= number_to_currency($r['total_harga'],'IDR','id')  ?></td>
                                                <td>
                                                    <a href="<?php echo site_url('admin/pesanan/detailpesanan/' . $r['id']); ?>" class="btn btn-primary">Detail</a>
                                                    <a href="<?php echo site_url('admin/pesanan/edit/' . $r['id']); ?>" class="btn btn-warning">Edit</a>
                                                </td>
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