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

    <form action="/admin_team/update/<?= $team['id_team'];?>" method="post" enctype="multipart/form-data">
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
                                   <input type="text" name="nm_team" class="form-control" required value="<?= $team['nama_team']; ?>">
                                </div>
                            </div>
                            <div class="col">
                                <div class="form-group">
                                    <label for="">Jumlah Player</label>
                                    <input type="text" name="jlh_player" class="form-control" required value="<?= $team['jumlah_player']; ?>">
                                </div>
                            </div>
                        </div><br>

                        <div class="form-group">
                            <label for="">Tentang Team</label>
                            <textarea id="editor" class="form-control" rows="5" name="about_team"><?= $team['about_team'];?></textarea>
                        </div><br>
                        <div class="form-group">
                            <label for="">Achievements</label>
                            <textarea id="editor2" class="form-control" rows="5" name="achiev"><?= $team['achievements']; ?></textarea>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="nav-image" role="tabpanel" aria-labelledby="nav-image-tab">
                         <div class="form-group">
                            <div class="row">
                                <div class="col-md-6 col-sm-12">
                                    <?= form_label('Image'); ?>
                                    <br>
                                    <div class="image-preview" id="imagePreview">
                                        <img src="/image/team/<?= $team['img_team']; ?>" class="image-preview__image img-preview">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4 col-sm-6">
                                    <input type="hidden" name="img_lama" value="<?= $team['img_team'];?>">
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