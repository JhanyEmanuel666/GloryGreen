<?= $this->extend('admin/layout/template'); ?>

<?= $this->section('content'); ?>

<div class="container-fluid">
    <div class="card shadow">

        <div class="card-body">
            <div class="row">
                <div class="col-md-4">
                    <dt>Image</dt>
                    <img src="<?= base_url(); ?>/image/berita/<?= $berita['img_berita']; ?>" class="img-fluid">
                </div>
                <div class="col-md-8">
                    <dl class="dl-horizontal">
                        <dt>Judul</dt>
                        <dd><?= $berita['judul']; ?></dd>
                        <dt>Jumlah Player</dt>
                        <dd><?= $berita['tgl_post']; ?></dd>
                        <dt>Isi Berita</dt>
                        <dd><?= $berita['isi_berita']; ?></dd>
                    </dl>
                </div>
            </div>
        </div>
        <div class="card-footer">
            <a href="<?= base_url('admin_berita'); ?>" class="btn btn-outline-danger float-right">Kembali</a>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>