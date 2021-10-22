<?= $this->extend('admin/layout/template'); ?>

<?= $this->section('content'); ?>

<div class="container-fluid">
    <div class="card shadow">

        <div class="card-body">
            <div class="row">
                <div class="col-md-4">
                    <dt>Image</dt>
                    <img src="<?= base_url(); ?>/image/player/<?= $player['img_player']; ?>" class="img-fluid">
                </div>
                <div class="col-md-8">
                    <dl class="dl-horizontal">
                        <dt>Nama</dt>
                        <dd><?= $player['nama_player']; ?></dd>
                        <dt>IGN</dt>
                        <dd><?= $player['ign']; ?></dd>
                        <dt>Role</dt>
                        <dd><?= $player['role']; ?></dd>
                    </dl>
                </div>
            </div>
        </div>
        <div class="card-footer">
            <a href="<?= base_url('admin_player'); ?>" class="btn btn-outline-danger float-right">Kembali</a>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>