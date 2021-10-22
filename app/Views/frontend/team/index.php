<?= $this->extend('frontend/layout/template'); ?>

<?= $this->section('content'); ?>

<?= $this->include('frontend/layout/navbar'); ?>

<div class="header-tim"></div>


<div class="container-fluid pt-lg-5 mt-3">
    <div class="row justify-content-center">
        <div class="col">
            <h3 class="text-center text-danger text-uppercase">Teams</h3>
        </div>
    </div>
</div>
<div class="container mb-5 mt-5">

    <div class="row">
        
        <?php if (count($team) == 0) { //jika hasil kosong, maka tampilkan:
            echo "Maaf, Data Team tidak ditemukan";
        } else {
            foreach ($team as $row):?>
                <div class="col-xl-3 col-sm-6 mb-5">
                    <div class="card text-white text-center d-block">
                        <img src="/image/team/<?= $row['img_team']; ?>" class="img-fluid w-75 h-75">
                        <div class="card-img-overlay ovl">
                            <div class="card-header mb-3">
                                <h5><?= $row['nama_team']; ?></h5>
                            </div>
                            <div class="card-footer">
                                <a href="<?= base_url('team/detail/' . $row['id_team']); ?>" class="btn btn-success btn-sm btn-block">view
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endforeach;
        } ?>

    </div>

</div>


<?= $this->endSection(); ?>