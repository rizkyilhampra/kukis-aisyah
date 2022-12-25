<?= $this->extend('layouts/layout2'); ?>
<?= $this->section('content'); ?>
<?php
    if(url_is('/product')):?>
    <?php
    foreach($products as $p):?>
    <li><?php echo $p->title?></li>
    <?php endforeach ?>
    <?php else: ?>
        Kontol
    <?php endif ?>

<?= $this->endSection(); ?>