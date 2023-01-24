<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
    <title>Kukis Aisyah</title>

    <!-- Favicons -->
    <link href="<?php echo base_url() ?>/favicon.ico" rel="icon">
    <link href="<?php echo base_url() ?>/favicon.ico" rel="apple-touch-icon">

    <!-- General CSS Files -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

    <!-- CSS Libraries -->
    <?php echo $this->renderSection('cssCustom');?>

    <!-- Template CSS -->
    <link rel="stylesheet" href="<?php echo base_url() ?>/stisla-template/assets/css/style.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>/stisla-template/assets/css/components.css">

</head>

<body>
    <div id="app">
        <div class="main-wrapper">

            <?php echo $this->include('partials/navbar'); ?>

            <?php echo $this->include('partials/sidebar'); ?>

            <?php echo $this->renderSection('content'); ?>

            <?php echo $this->include('partials/footer'); ?>

        </div>
    </div>
    <!-- General JS Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.nicescroll/3.7.6/jquery.nicescroll.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment.min.js"></script>
    <script src="<?php echo base_url() ?>/stisla-template/assets/js/stisla.js"></script>

    <!-- JS Libraies -->
    <?php echo $this->renderSection('jsLibraries');?>

    <!-- Template JS File -->
    <script src="<?php echo base_url() ?>/stisla-template/assets/js/scripts.js"></script>
    <script src="<?php echo base_url() ?>/stisla-template/assets/js/custom.js"></script>

    <!-- Spesific JS -->
    <?php echo $this->renderSection('jsCustom');?>
</body>

</html>