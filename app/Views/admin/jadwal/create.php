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

    <form action="/admin_jadwal/save" method="post" enctype="multipart/form-data">
    <div class="card shadow lg">
        <div class="card-body">
            <div class="row">
                <div class="col">
                    <label for="">Jadwal Reguler</label>
                    <select name="id_reguler" class="form-control">
                        <option>Pilih Reguler</option>
                        <?php foreach($reguler as $row): ?>
                            <option value="<?= $row['id'];?>"><?= $row['nama']; ?></option>
                        <?php endforeach; ?>
                    </select>
                </div>
            </div> <br>
            <div class="row">
                <div class="col-md-6 col-sm-12">
                    <?= form_label('Image'); ?>
                    <br>
                    <div class="image-preview" id="imagePreview">
                        <img src="" alt="Image Preview" class="image-preview__image">
                        <span class="image-preview__default-text"></span>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 col-sm-6">
                    <?= form_upload('img_jadwal', 'image_player', ['class' => 'form-control', 'id' => 'inpFile']); ?>
                </div>
            </div>
        </div>

        <div class="card-footer">
            <a href="<?= base_url('admin_jadwal'); ?>" class="btn btn-outline-danger">Batal</a>
            <button type="submit" class="btn btn-outline-primary float-right" name="submit">Simpan</button>
        </div>
    </div>
    </form>

</div>

<?= $this->endSection(); ?>

<?= $this->section('script'); ?>
<script>
    const inpFile = document.getElementById("inpFile");
    const previewContainer = document.getElementById("imagePreview");
    const previewImage = previewContainer.querySelector(".image-preview__image");
    const previewDefaultText = previewContainer.querySelector(".image-preview__default-text");

    inpFile.addEventListener("change", function() {
        const file = this.files[0];

        if (file) {
            const reader = new FileReader();

            previewDefaultText.style.display = "none";
            previewImage.style.display = "block";

            reader.addEventListener("load", function() {
                previewImage.setAttribute("src", this.result);
            });

            reader.readAsDataURL(file);
        } else {
            previewDefaultText.style.display = null;
            previewImage.style.display = null;
            previewImage.setAttribute("src", "");
        }
    });
</script>

<?= $this->endSection(); ?>
