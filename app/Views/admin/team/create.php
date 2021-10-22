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

    <?= form_open_multipart("admin_team/save"); ?>
    <div class="card shadow lg">
        <div class="card-header">
            <nav>
                <div class="nav nav-tabs nav-fill" id="nav-tab" role="tablist">
                    <a class="nav-item nav-link active" id="nav-detail-tab" data-toggle="tab" href="#nav-detail" role="tab" aria-controls="nav-detail" aria-selected="true">Team Detail</a>
                    <a class="nav-item nav-link" id="nav-image-tab" data-toggle="tab" href="#nav-image" role="tab" aria-controls="nav-image" aria-selected="false">Team Image</a>
                </div>
            </nav>
        </div>
        <div class="card-body">
            <div class="tab-content" id="nav-tabContent">
                <div class="tab-pane fade show active" id="nav-detail" role="tabpanel" aria-labelledby="nav-detail-tab">

                    <div class="form-row">
                        <div class="col">
                            <div class="form-group">
                               <label for="">Nama Team</label>
                               <input type="text" name="nm_team" class="form-control" required>
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-group">
                                <label for="">Jumlah Player</label>
                                <input type="text" name="jlh_player" class="form-control" required>
                            </div>
                        </div>
                    </div><br>

                    <div class="form-group">
                        <label for="">Tentang Team</label>
                        <textarea class="form-control" rows="5" name="about_team" id="editor"></textarea>
                    </div><br>
                    <div class="form-group">
                        <label for="">Achievements</label>
                        <textarea class="form-control" rows="5" name="achiev" id="editor2"></textarea>
                    </div>
                </div>
                <div class="tab-pane fade" id="nav-image" role="tabpanel" aria-labelledby="nav-image-tab">
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-6 col-sm-12">
                                <?= form_label('Image'); ?>
                                <br>
                                <div class="image-preview" id="imagePreview">
                                    <img src="" class="image-preview__image img-preview">
                                    <span class="image-preview__default-text"></span>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4 col-sm-6">
                                <input type="file" class="custome-file-input" id="sampull" name="image_team" onchange="previewImg()">
                                <label for="" class="custome-file-label"></label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="card-footer">
            <a href="<?= base_url('admin_team'); ?>" class="btn btn-outline-danger">Batal</a>
            <button type="submit" class="btn btn-outline-primary float-right">Simpan</button>
        </div>
    </div>
    <?= form_close(); ?>

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

