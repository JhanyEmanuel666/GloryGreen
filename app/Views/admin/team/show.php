<?= $this->extend('admin/layout/template'); ?>

<?= $this->section('content'); ?>

<div class="container-fluid">
    <div class="card shadow">

        <div class="card-body">
            <div class="row">
                <div class="col-md-4">
                    <dt>Image</dt>
                    <img src="<?= base_url(); ?>/image/team/<?= $team['img_team']; ?>" class="img-fluid">
                </div>
                <div class="col-md-8">
                    <dl class="dl-horizontal">
                        <dt>Nama team</dt>
                        <dd><?= $team['nama_team']; ?></dd>
                        <dt>Jumlah Player</dt>
                        <dd><?= $team['jumlah_player']; ?></dd>
                        <dt>Deskripsi team</dt>
                        <dd><?= $team['about_team']; ?></dd>
                        <dt>Achievemnets</dt>
                        <dd><?= $team['achievements']; ?></dd>
                    </dl>
                </div>
            </div>
        </div>
        <div class="card-footer">
            <a href="<?= base_url('admin_team'); ?>" class="btn btn-outline-danger float-right">Kembali</a>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>