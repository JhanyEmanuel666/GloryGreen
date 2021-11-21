<?= $this->extend('admin/layout/template'); ?>

<?= $this->section('content'); ?>

<div class="container-fluid">
    <div class="card shadow">

        <div class="card-body">
            <div class="row">
                <div class="col-md-6">
                    <dt>Image</dt>
                    <img src="<?= base_url(); ?>/image/season/<?= $season['img_team_juara']; ?>" class="img-fluid">
                </div>
                <div class="col-md-6">
                    <dl class="dl-horizontal">
                        <dt>Nama Season</dt>
                        <dd><?= $season['nama_season']; ?></dd>
                        <dt>Team Juara</dt>
                        <dd><?= $season['nama_team']; ?></dd>
                        <dt>MVP</dt>
                        <dd><?= $season['nama_player']; ?></dd>
                    </dl>
                </div>
            </div>
        </div>
        <div class="card-footer">
            <a href="<?= base_url('admin_season'); ?>" class="btn btn-outline-danger float-right">Kembali</a>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>