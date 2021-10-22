<?= $this->extend('frontend/layout/template'); ?>

<?= $this->section('content'); ?>

<?= $this->include('frontend/layout/navbar'); ?>

<div class="header-tim"></div>


<div class="container-fluid pt-lg-5">
    <div class="row justify-content-center">
        <div class="col text-center">
            <h2 class="text-danger text-uppercase"><?= $team['nama_team'] ;?> </h2>
        </div>
    </div>
</div>

<div class="container mb-3 mt-2">

    <div class="row justify-content-center">
        <div class="col-md-3 col-sm-6">
            <div class="team-logo">
                <img src="/image/team/<?= $team['img_team']; ?>" class="img-fluid">
            </div>
        </div>
    </div>

    <hr class="mb-5 mt-5">

    <div class="row">
        <div class="col-md-6 col-sm-12">
            <div class="card">
                <div class="card-header text-center text-danger"><h5>About</h5></div>
                <div class="card-body scroll">
                    <p>
                        <?= $team['about_team']; ?>
                    </p>
                </div>
            </div>
        </div>

        <div class="col-md-6 col-sm-12">
            <div class="card">
                <div class="card-header text-center text-danger"><h5>Achievements</h5></div>
                <div class="card-body scroll">
                    <p>
                        <?= $team['achievements']; ?>
                    </p>
                </div>
            </div>
        </div>
    </div>

    <hr class="mt-5">

    <div class="row justify-content-center mb-3">
        <div class="col text-center">
            <h3 class="text-danger text-uppercase">Players</h3>
        </div>
    </div>

    <hr class="mb-5 mt-3">

    <div class="row justify-content-center">

        <?php foreach($player as $row) {?>
            <div class="col-md-3 col-sm-6">

                <div class="card text-white text-center">
                    <img src="/image/player/<?= $row['img_player']; ?>" class="card-img-top img-fluid">
                    <div class="card-img-overlay ovl">
                        <div class="card-header mb-3">
                            <h5><?= $row['ign']; ?></h5>
                        </div>
                        <div class="card-footer">
                            <a href="<?= base_url('player/detail/' . $row['id_player']); ?>" class="btn btn-warning btn-sm btn-block">view
                            </a>
                        </div>
                    </div>
                </div>

            </div>
        <?php } ?>
    </div>

    <hr class="mb-5 mt-5">

    <div class="row">
        <div class="col">
            <a href="/team">Kembali ke Teams</a>
        </div>
    </div>

</div>
<?= $this->endSection(); ?>