<?= $this->extend('admin/layout/template'); ?>

<?= $this->section('content'); ?>

<div class="container-fluid">
    <div class="card shadow">

        <div class="card-body">
            <div class="row">
                <div class="col">
                    <dl class="dl-horizontal">
                        <dt>Facebook</dt>
                        <dd><?= $about['facebook']; ?></dd>
                        <dt>Instagram</dt>
                        <dd><?= $about['instagram']; ?></dd>
                        <dt>Twitter</dt>
                        <dd><?= $about['twitter']; ?></dd>
                        <dt>About</dt>
                        <dd><?= $about['about']; ?></dd>
                    </dl>
                </div>
            </div>
        </div>
        <div class="card-footer">
            <a href="<?= base_url('admin_about'); ?>" class="btn btn-outline-danger float-right">Kembali</a>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>