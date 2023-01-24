<?= $this->extend('layouts/layout2') ?>
<?= $this->section('cssCustom') ?>
<link rel="stylesheet" href="<?php echo base_url() ?>/stisla-template/assets/chocolat/dist/css/chocolat.css">
<?= $this->endSection() ?>
<?= $this->section('cssCustom2') ?>
<link rel="stylesheet" href="<?php echo base_url() ?>/assets/main.css">
<?= $this->endSection() ?>

<?= $this->section('content') ?>
<section class="inner-page">
    <div class="container">
        <?php if (service('validation')->getErrors()) : ?>
            <div class="alert alert-danger" role="alert">
                <?php echo service('validation')->listErrors() ?>
            </div>
        <?php endif; ?>
        <div class="row row-cols-1 row-cols-md-3 g-4">
            <?php foreach ($product as $p) : ?>
                <div class="col">
                    <div class="card h-100 shadow">
                        <div class="gallery gallery-fw" data-item-height="200">
                            <div class="gallery-item card-img-top m-0" data-image="<?php echo base_url($p->image); ?>" data-title="<?= $p->title ?>"></div>
                        </div>
                        <div class="card-body">
                            <h3 style="font-weight: 600;"><?= $p->title ?></h3>
                            <p>
                                <?= $p->description ?>
                            </p>
                            <div class="row pt-3">
                                <div class="col-4 ">
                                    Kategory:
                                </div>
                                <div class="col-4">
                                    <?= $p->category ?>
                                </div>
                            </div>
                            <div class="row row-auto">
                                <div class="col-4">
                                    Stok:
                                </div>
                                <div class="col-4">
                                    <?= $p->stok ?>
                                </div>
                            </div>
                            <h5 class="fw-bold pt-3 " style="font-family: inherit;"><?= number_to_currency($p->price, 'IDR', 'id_ID'); ?></h5>
                        </div>
                        <div class="card-footer">
                            <!-- <small class="text-muted">Last updated 3 mins ago</small> -->
                            <form method="post" action="<?= site_url('user/konfirmasipesanan/'.$p->id) ?>" enctype="multipart/form-data">
                            <?= csrf_field() ?>
                            <input type="hidden" name="_method" value="put">
                                <div class="mb-3">
                                    <label for="jumlah">Jumlah</label>
                                    <input type="number" value="" max="<?= $p->stok ?>" min="1" oninvalid="this.setCustomValidity('Stok tidak mencukupi/sesuai')" onvalid="this.setCustomValidity('')" required class="form-control" name="jumlahStok" id="jumlahStok">
                                </div>
                                <div class="d-grid">
                                    <button type="submit" class="btn btn-primary ">
                                        Pesan
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            <?php endforeach ?>
        </div>
    </div>
</section>

</main><!-- End #main -->
<?= $this->endSection() ?>
<?= $this->section('jsLibraries') ?>
<script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="<?= base_url() ?>/stisla-template/assets/chocolat/dist/js/jquery.chocolat.min.js"></script>
<?= $this->endSection() ?>
<?= $this->section('jsCustom') ?>
<script>
    $(function() {
        let sidebar_nicescroll_opts = {
                cursoropacitymin: 0,
                cursoropacitymax: .8,
                zindex: 892
            },
            now_layout_class = null;
        // Gallery
        $(".gallery .gallery-item").each(function() {
            var me = $(this);

            me.attr('href', me.data('image'));
            me.attr('title', me.data('title'));
            if (me.parent().hasClass('gallery-fw')) {
                me.css({
                    height: me.parent().data('item-height'),
                });
                me.find('div').css({
                    lineHeight: me.parent().data('item-height') + 'px'
                });
            }
            me.css({
                backgroundImage: 'url("' + me.data('image') + '")'
            });
        });
        if (jQuery().Chocolat) {
            $(".gallery").Chocolat({
                className: 'gallery',
                imageSelector: '.gallery-item',
            });
        }
    });
</script>
<?= $this->endSection() ?>