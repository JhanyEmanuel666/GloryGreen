<?= $this->extend('frontend/layout/template'); ?>

<?= $this->section('content'); ?>

<?= $this->include('frontend/layout/navbar'); ?>

<div class="header-tim mb-3"></div>


<div class="container-fluid pt-lg-5">

    <div class="row">
        <div class="col-md-3 col-sm-12">
            <h5 class="text-danger">News</h5>
            <div class="card">
                <ul class="list-group list-group-flush">
                    <?php foreach ($list as $row) { ?>
                    <li class="list-group-item mb-2">
                        <a href="<?= base_url('berita/show/'. $row['id_berita']); ?>"><?= $row['judul']; ?></a><br>
                        <small class="text-muted"><?= $row['tgl_post']; ?></small>
                    </li>
                    <?php } ?>
                </ul>
            </div>
        </div>

        <div class="col-md-8 col-sm-12 mr-lg-2">
            <h4 class="text-danger text-uppercase"><?= $berita['judul'] ;?></h4>
            <p>Post: <?= $berita['tgl_post']; ?></p> <br><br>
            <img src="/image/berita/<?= $berita['img_berita']; ?>" class="img-fluid"> <br><br>
            <p class="text-left">
                <?= $berita['isi_berita']; ?>
            </p>
        </div>
    </div>

</div>

<?= $this->endSection(); ?>