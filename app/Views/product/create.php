<?php echo $this->extend('layouts/layout') ?>
<?= $this->section('cssCustom') ?>
<link rel="stylesheet" href="<?= base_url() ?>/stisla-template/assets/select2/dist/css/select2.min.css">
<?= $this->endSection() ?>
<?php echo $this->section('content'); ?>
<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Halaman Buat Kue</h1>
        </div>
        <?php if (service('validation')->getErrors()) : ?>
            <div class="alert alert-danger" role="alert">
                <?= service('validation')->listErrors() ?>
            </div>
        <?php endif; ?>
        <div class="card">
            <div class="card-body">
                <form method="post" action="/admin/product/create" enctype="multipart/form-data">
                    <?php echo csrf_field() ?>
                    <div class="mb-3">
                        <label class="form-label">Nama</label>
                        <input type="text" class="form-control" name="title" value="<?php echo set_value('title', ''); ?>">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Deskripsi</label>
                        <textarea name="description" class="form-control" rows="4"><?php echo set_value('description', ''); ?></textarea>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Gambar</label>
                        <input type="file" class="form-control" name="image">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Kategori</label>
                        <?php
                        echo form_dropdown('category', $category, '', 'class="form-control select2"')
                        ?>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Stok</label>
                        <input type="number" class="form-control" name="stok" id="stok" value="<?php echo set_value('stok', '') ?>">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Harga</label>
                        <input type="text" class="form-control currency" name="price" id="price" value="<?php echo set_value('price', '') ?>">
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
<script src="<?= base_url() ?>/stisla-template/assets/cleave.js/dist/cleave.min.js"></script>
<script src="<?= base_url() ?>/stisla-template/assets/select2/dist/js/select2.full.min.js"></script>
<?= $this->endSection() ?>
<?= $this->section('jsCustom') ?>
<script>
    var cleaveC = new Cleave('.currency', {
        numeral: true,
        numeralDecimalMark: ',',
        delimiter: '.',
        swapHiddenInput: true
    });
</script>
<?= $this->endSection() ?>