<?= $this->extend('layouts/layout') ?>
<?= $this->section('cssCustom') ?>
<link rel="stylesheet" href="<?= base_url() ?>/stisla-template/assets/select2/dist/css/select2.min.css">
<link rel="stylesheet" href="<?= base_url() ?>/stisla-template/assets/bootstrap-daterangepicker/daterangepicker.css">

<?= $this->endSection() ?>
<?= $this->section('content'); ?>

<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Edit Pesanan</h1>
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
                    <form method="post" action="<?= site_url('admin/pesanan/edit/' . $pesanan->id) ?>" enctype="multipart/form-data">
                        <?php echo csrf_field() ?>
                        <input type="hidden" name="_method" value="put">
                        <div class="mb-3">
                            <label for="status" class="form-label">Status</label>
                            <?php
                            echo form_dropdown('status', $pesananCustom, $pesanan->status, 'class="form-control select2"')
                            ?>
                        </div>
                        <div class="mb-3">
                            <label for="date">Estimasi Tanggal Selesai</label>
                            <input type="date" id="estimate" name="date" value="<?= $pesanan->estimation ?>" class="form-control">
                        </div>
                        <button type="submit" class="btn btn-primary">Save</button>
                        <a class="btn btn-secondary" href="<?php echo site_url('admin/pesanan'); ?>">Back</a>
                    </form>
                </div>
            </div>
        </div>
    </section>
</div>


<?= $this->endSection(); ?>
<?= $this->section('jsLibraries') ?>
<script src="<?= base_url() ?>/stisla-template/assets/select2/dist/js/select2.full.min.js"></script>
<script src="<?= base_url() ?>/stisla-template/assets/bootstrap-daterangepicker/daterangepicker.js"></script>

<?= $this->endSection() ?>
<?= $this->section('jsCustom') ?>

<script type="text/javascript">
    const inputDate = document.getElementById("estimate");

    inputDate.addEventListener("click", function(evt) {
        if (this.getAttribute("type") === "date") {
            this.showPicker();
        }
    });
</script>
<?= $this->endSection() ?>