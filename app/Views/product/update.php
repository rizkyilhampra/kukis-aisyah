<?php echo $this->extend('layouts/layout') ?>
<?= $this->section('cssCustom') ?>
<link rel="stylesheet" href="<?= base_url() ?>/stisla-template/assets/select2/dist/css/select2.min.css">
<?= $this->endSection() ?>
<?php echo $this->section('content'); ?>

<!-- form update -->
<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Update Data Kue <?php echo $product->title ?></h1>
        </div>
        <div class="section-body">
            <!-- alert validation errors -->
            <?php if (service('validation')->getErrors()) : ?>
                <div class="alert alert-danger" role="alert">
                    <?php echo service('validation')->listErrors() ?>
                </div>
            <?php endif; ?>
            <div class="card">
                <div class="card-body">
                    <form method="post" action="<?php echo site_url('admin/product/update/' . $product->id); ?>" enctype="multipart/form-data">
                        <?php echo csrf_field() ?>
                        <input type="hidden" name="_method" value="put">
                        <div class="mb-3">
                            <label class="form-label">Title</label>
                            <input type="text" class="form-control" name="title" value="<?php echo set_value('title', $product->title); ?>">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Description</label>
                            <textarea name="description" class="form-control" rows="4"><?php echo set_value('description', $product->description); ?></textarea>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Image</label>
                            <input type="file" class="form-control" name="image">
                        </div>
                        <div class="mb-3">
                            <?php if ($product->image) : ?>
                                <img src="<?php echo base_url($product->image); ?>" width="100" alt="<?php echo $product->title; ?>">
                            <?php endif; ?>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Kategori</label>s
                            <?php
                            echo form_dropdown('category', $category, $product->category, 'class="form-control select2"')
                            ?>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Stok</label>
                            <input type="number" name="stok" class="form-control" value="<?php echo set_value('stok', $product->stok); ?>">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Harga</label>
                            <input type="text" id="price" name="price" class="form-control currency" value="<?php echo set_value('price', $product->price); ?>">
                        </div>
                        <button type="submit" class="btn btn-primary">Save</button>
                        <a class="btn btn-secondary" href="<?php echo site_url('admin/product'); ?>">Back</a>
                    </form>
                </div>
            </div>
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