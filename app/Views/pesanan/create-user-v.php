<?php echo $this->extend('layouts/layout') ?>
<?= $this->section('cssCustom') ?>
<link rel="stylesheet" href="<?= base_url() ?>/stisla-template/assets/select2/dist/css/select2.min.css">
<?= $this->endSection() ?>
<?php echo $this->section('content'); ?>
<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Halaman Buat Pesanan</h1>
        </div>
        <?php if (service('validation')->getErrors()) : ?>
            <div class="alert alert-danger" role="alert">
                <?= service('validation')->listErrors() ?>
            </div>
        <?php endif; ?>
        <div class="card">
            <div class="card-body">
                <form method="post" action="/create" enctype="multipart/form-data">
                    <?php echo csrf_field() ?>
                    <div class="mb-3">
                        <label class="form-label">Product</label>
                        <?php 
                        echo form_dropdown('products_id', $dataProduct, '', 'class="form-control select2"')
                        ?>
                    </div>

                    <button type="submit" class="btn btn-primary">Save</button>
                    <a class="btn btn-secondary" href="<?php echo site_url('admin'); ?>">Back</a>
                </form>
            </div>
        </div>

        <div class="section-body">
        </div>
    </section>
</div>

<?php echo $this->endSection(); ?>
<?= $this->section('jsLibraries') ?>
<script src="<?= base_url() ?>/stisla-template/assets/select2/dist/js/select2.full.min.js"></script>
<?= $this->endSection() ?>