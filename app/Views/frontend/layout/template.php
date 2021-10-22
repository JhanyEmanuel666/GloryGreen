<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?= base_url(); ?>/css/bootstrap/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?= base_url(); ?>/fa5/css/all.min.css">
    <!-- my css -->
    <link rel="stylesheet" href="<?= base_url(); ?>/css/style.css">
    <!-- plugin utk image -->
    <link rel="stylesheet" href="<?= base_url(); ?>/plugins/light-gallery/css/lightgallery.css">
    <script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
    <title><?= $title; ?></title>
</head>

<body>

    <?= $this->renderSection('content'); ?>
    
    <div class="jumbo mt-5"></div>

    <div class="container-fluid">
        <div class="row mt-5">
            <div class="col-md-4 col-sm-3 text-center"></div>
            <div class="col-md-4 col-sm-6 text-center">
                <a href="#"><i class="fab fa-facebook-f fa-2x ml-3" style="color:black"></i></a>
                <a href="#"><i class=" fab fa-instagram fa-2x ml-3" style="color:black"></i></a>
                <a href="#"><i class="fab fa-youtube fa-2x ml-3" style="color:black"></i></a>
                <a href="#"><i class="fab fa-twitter fa-2x ml-3" style="color:black"></i></a>
                <hr style="color:black;">
                <p style="color:black">&copy; 2021 | Glory Green Official Website</p>
            </div>
            <div class="col-md-4 col-sm-3 text-center"></div>
        </div>
    </div>

    <script src="<?= base_url(); ?>/js/jquery-3.6.0.min.js"></script>
    <script src="<?= base_url(); ?>/js/bootstrap.bundle.min.js"></script>
    <script src="<?= base_url(); ?>/js/popper.min.js"></script>

    <!-- Light Gallery Plugin Js -->
    <script src="<?= base_url(); ?>/plugins/light-gallery/js/lightgallery-all.js"></script>
    <script src="<?= base_url(); ?>/js/image-gallery.js"></script>

    <script >
        $(function() {
            $('#navvv a[href~="' + location.href + '"]').parents('li').addClass('active');
        });
    </script>

    <?= $this->renderSection('script') ?>

</body>

</html>