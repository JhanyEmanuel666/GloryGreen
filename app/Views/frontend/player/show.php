<?= $this->extend('frontend/layout/template'); ?>

<?= $this->section('content'); ?>

<?= $this->include('frontend/layout/navbar'); ?>

<div class="header-tim"></div>


<div class="container-fluid pt-lg-5 mb-5">
    <div class="row justify-content-center">
        <div class="col text-center">
            <h2 class="text-danger text-uppercase"><?= $player['nama_team'] ;?></h2>
            <span class="text-danger">Player</span>
        </div>
    </div>
</div>

<div class="container mb-3">

    <div class="row justify-content-center">
        
        <div class="col-md-10 col-sm-12">
            <div class="card shadow-lg mb-3">
                <div class="row no-gutters">
                    <div class="col-md-5">
                      <img src="/image/player/<?= $player['img_player']; ?>" class="img-fluid">
                    </div>
                    <div class="col-md-7">
                        <table class="table table-borderless table-responsive">
                            <tr>
                                <td><strong>Nama Lengkap</strong></td>
                                <td><strong>:</strong></td>
                                <td><?= $player['nama_player']; ?></td>
                            </tr>
                            <tr>
                                <td><strong>IGN</strong></td>
                                <td><strong>:</strong></td>
                                <td><?= $player['ign']; ?></td>
                            </tr>
                            <tr>
                                <td><strong>Role</strong></td>
                                <td><strong>:</strong></td>
                                <td><?= $player['role']; ?></td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <hr class="mb-3 mt-3">

    <div class="row">
        <div class="col">
            <a href="/team/detail/<?= $player['id_team']; ?>">kembali ke <?= $player['nama_team']; ?></a>
        </div>
    </div>

</div>

<?= $this->endSection(); ?>