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
<div class="container mb-5 mt-5">

    <div class="row">
        
        <?php if (count($berita) == 0) { //jika hasil kosong, maka tampilkan:
            echo "Maaf, Data berita tidak ditemukan";
        } else {
            foreach ($berita as $row):?>
                <div class="col-md-4 col-sm-6 mb-5">

                    <div class="card">
                        <img src="/image/berita/<?= $row['img_berita']; ?>" class="card-img-top" height="200">
                        <div class="card-body">
                            <h6 class="card-title"><?= $row['judul'];?></h6>
                            <p class="card-text">
                                <small class="text-muted"><?= $row['tgl_post']; ?></small>
                            </p>
                            <a href="<?= base_url('berita/show/' . $row['id_berita']);?>">read more</a>
                        </div>
                    </div>

                </div>
            <?php endforeach;
        } ?>

    </div>

</div>


<?= $this->endSection(); ?>