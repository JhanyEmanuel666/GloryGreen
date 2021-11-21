<?= $this->extend('admin/layout/template'); ?>

<?= $this->section('content'); ?>
<div class="container justify-content-center">

    <?php
    $inputs = session()->getFlashdata('inputs');
    $errors = session()->getFlashdata('errors');
    if (!empty($errors)) { ?>
        <div class="alert alert-danger" role="alert">
            Whoops! Ada kesalahan saat input data, yaitu:
            <ul>
                <?php foreach ($errors as $error) : ?>
                    <li><?= esc($error) ?></li>
                <?php endforeach ?>
            </ul>
        </div>
    <?php } ?>

    <form action="/admin_about/update/<?= $about['id_about']; ?>" method="post">
        <div class="card shadow lg">
            <div class="card-body">
                <div class="row">
                    <div class="col">
                        <div class="form-group">
                            <label for="">Facebook</label>
                            <input type="text" name="fb" class="form-control" required value="<?= $about['facebook']; ?>">
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-group">
                            <label for="">Instagram</label>
                            <input type="text" name="ig" class="form-control" required value="<?= $about['instagram']; ?>">
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-group">
                            <label for="">Twitter</label>
                            <input type="text" name="tw" class="form-control" required value="<?= $about['twitter']; ?>">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <div class="form-group">
                            <label for="">About</label>
                            <textarea class="form-control" rows="5" name="about" id="editor"><?= $about['about']; ?></textarea>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card-footer">
                <a href="<?= base_url('admin_about'); ?>" class="btn btn-outline-danger">Batal</a>
                <button type="submit" class="btn btn-outline-primary float-right" name="submit">Update</button>
            </div>
        </div>
    </form>

</div>

<?= $this->endSection(); ?>
