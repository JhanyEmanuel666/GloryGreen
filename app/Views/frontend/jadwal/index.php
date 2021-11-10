<?= $this->extend('frontend/layout/template'); ?>

<?= $this->section('content'); ?>

<?= $this->include('frontend/layout/navbar'); ?>

<div class="header-tim"></div>


<div class="container-fluid pt-lg-5 mt-3">
    <div class="row justify-content-center">
        <div class="col">
            <h3 class="text-center text-danger text-uppercase"><?= $title; ?></h3>
        </div>
    </div>
</div>
<div class="container-fluid mb-5 mt-5">

    <div class="row mb-5">
        <div class="col">
            <ul class="nav justify-content-center">
                <?php foreach ($list as $row) { ?>
                <li class="nav-item">
                    <a class="nav-link" href="<?= base_url('jadwal/jadwal/'. $row['id']); ?>"><?= $row['nama']; ?></a>
                </li>
                <?php } ?>
            </ul>
        </div>
    </div>

    <div class="row justify-content-center">
        <div class="col-md-10 col-sm-12">
            <?php foreach ($jadwal as $row) { ?>
                <h6><?= $row['nama']; ?></h6>
                <img src="/image/jadwal/<?= $row['img_jadwal']; ?>" class="img-fluid" >
            <?php }?>
        </div>

    </div>

</div>


<?= $this->endSection(); ?>