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

    <form action="/admin_berita/update/<?= $berita['id_berita'];?>" method="post" enctype="multipart/form-data">
    <div class="card shadow lg">
        <div class="card-header">
            <nav>
                <div class="nav nav-tabs nav-fill" id="nav-tab" role="tablist">
                    <a class="nav-item nav-link active" id="nav-detail-tab" data-toggle="tab" href="#nav-detail" role="tab" aria-controls="nav-detail" aria-selected="true">Detail Berita</a>
                    <a class="nav-item nav-link" id="nav-image-tab" data-toggle="tab" href="#nav-image" role="tab" aria-controls="nav-image" aria-selected="false">Image Berita</a>
                </div>
            </nav>
        </div>
        <div class="card-body">
            <div class="tab-content" id="nav-tabContent">
                <div class="tab-pane fade show active" id="nav-detail" role="tabpanel" aria-labelledby="nav-detail-tab">
                    <div class="row">
                        <div class="col">
                            <div class="form-group">
                               <label for="">Judul Berita</label>
                               <input type="hidden" name="id_berita" value="<?= $berita['id_berita']; ?>">
                               <input type="hidden" name="img_lama" value="<?= $berita['img_berita']; ?>">
                               <input type="text" name="judul" class="form-control" required value="<?= $berita['judul']; ?>">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="form-group">
                                <label for="">Isi Berita</label>
                                <textarea class="form-control" rows="5" name="isi_berita" id="editor"><?= $berita['isi_berita']; ?></textarea>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="tab-pane fade" id="nav-image" role="tabpanel" aria-labelledby="nav-image-tab">
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-6 col-sm-12">
                                <?= form_label('Image'); ?>
                                <br>
                                <div class="image-preview" id="imagePreview">
                                    <img src="/image/berita/<?= $berita['img_berita']; ?>" alt="Image Preview" class="image-preview__image">
                                    <span class="image-preview__default-text"></span>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4 col-sm-6">
                                <?= form_upload('img_berita', 'img_berita', ['class' => 'form-control', 'id' => 'inpFile']); ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="card-footer">
            <a href="<?= base_url('admin_berita'); ?>" class="btn btn-outline-danger">Batal</a>
            <button type="submit" class="btn btn-outline-primary float-right" name="submit">Update</button>
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