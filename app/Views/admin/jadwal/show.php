<?= $this->extend('admin/layout/template'); ?>

<?= $this->section('content'); ?>

<div class="container-fluid">
    <div class="card shadow">

        <div class="card-body">
            <div class="row">
                <div class="col">
                    <img src="<?= base_url(); ?>/image/jadwal/<?= $jadwal['img_jadwal']; ?>" class="img-fluid">
                </div>
            </div>
        </div>
        <div class="card-footer">
            <a href="<?= base_url('admin_jadwal'); ?>" class="btn btn-outline-danger float-right">Kembali</a>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>