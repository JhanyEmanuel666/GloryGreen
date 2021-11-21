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

    <form action="/admin_jadwal/update/<?= $jadwal['id_jadwal'];?>" method="post" enctype="multipart/form-data">
        <div class="card shadow lg">
            <div class="card-body">

                    <div class="row">
                        <div class="col-10">
                            <?= form_label('Image'); ?>
                            <br>
                            <div class=",image-preview" id="imagePreview">
                                <img src="/image/jadwal/<?= $jadwal['img_jadwal']; ?>" class="image-preview__image img-preview">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <input type="hidden" name="img_lama" value="<?= $jadwal['img_jadwal'];?>">
                            <input type="file" class="custome-file-input" id="sampull" name="img_jadwal" onchange="previewImg()">
                            <label for="" class="custome-file-label"></label>
                        </div>
                    </div>

            </div>
            <div class="card-footer">
                <a href="<?= base_url('admin_jadwal'); ?>" class="btn btn-outline-danger">Batal</a>
                <button type="submit" class="btn btn-outline-primary float-right">Update</button>
            </div>
        </div>
    </form>

</div>

<script>
    function previewImg(){
        const sampul = document.querySelector('#sampull');
        const sampulLabel = document.querySelector('.custome-file-label');
        const imgPreview = document.querySelector('.img-preview');

        sampulLabel.textContent = sampul.files[0].name;

        const fileSampul = new FileReader();
        fileSampul.readAsDataURL(sampul.files[0]);

        fileSampul.onload = function(e){
            imgPreview.src = e.target.result;
        }
    }
</script>

<?= $this->endSection(); ?>