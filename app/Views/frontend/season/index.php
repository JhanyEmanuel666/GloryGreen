<?= $this->extend('frontend/layout/template'); ?>

<?= $this->section('content'); ?>

<?= $this->include('frontend/layout/navbar'); ?>

<div class="header-tim"></div>

<div class="container-fluid pt-lg-5">

    <div class="row">
        
        <div class="col-md-2 col-sm-12 pt-lg-5">
            <div class="card">
                <ul class="list-group list-group-flush">
                    <?php foreach ($season as $row) { ?>
                    <li class="list-group-item mb-2">
                        <a href="<?= base_url('season/show/' . $row['id_season']);?>"><?= $row['nama_season'];?></a>
                    </li>
                    <?php } ?>
                </ul>
            </div>
        </div>

        <div class="col-md-10 col-sm-12 text-center">

            <?php foreach ($seasonNow as $row) { ?>
                <h4 class="mb-4 text-danger"><?= $row['nama_season']; ?> Champion</h4>
                <picture>
                    <img src="/image/season/<?= $row['img_team_juara']; ?>"; class="img-fluid img-thumbnail h75">
                </picture>
            <?php } ?>
        </div>

    </div>

</div>

<?= $this->endSection(); ?>