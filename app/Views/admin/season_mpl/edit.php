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

    <form action="/admin_season/update/<?= $season['id_season'];?>" method="post" enctype="multipart/form-data">
        <div class="card shadow lg">

            <div class="card-body">

                <div class="row">
                    <div class="col">
                        <label>Nama Season</label>
                        <input type="text" name="nm_season" class="form-control" required value="<?= $season['nama_season']; ?>">
                    </div>

                    <div class="col">
                        <div class="form-group">
                            <label for="">Team Juara</label>
                            <select name="id_juara" class="form-control">
                                <option value="<?= $season['id_team'];?>"><?= $season['nama_team']; ?></option>
                                <?php foreach ($team as $key): ?>
                                    <option value="<?= $key['id_team'] ;?>"><?= $key['nama_team']; ?></option>
                                <?php endforeach ?>
                            </select>
                        </div>
                    </div>

                    <div class="col">
                        <div class="form-group">
                            <label for="">MVP</label>
                            <select name="id_mvp" class="form-control">
                                <option value="<?= $season['id_player'];?>"><?= $season['ign']; ?></option>
                                <?php foreach ($player as $key): ?>
                                    <option value="<?= $key['id_player'] ;?>"><?= $key['ign']; ?></option>
                                <?php endforeach ?>
                            </select>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6 col-sm-12">
                            <?= form_label('Image'); ?>
                            <br>
                            <div class="image-preview" id="imagePreview">
                                <img src="/image/season/<?= $season['img_team_juara']; ?>" class="image-preview__image img-preview">
                            </div>
                        </div>
                    </div>
                <div class="row">
                    <div class="col-md-4 col-sm-6">
                        <input type="hidden" name="img_lama" value="<?= $season['img_team_juara'];?>">
                        <input type="file" class="custome-file-input" id="sampull" name="img_season" onchange="previewImg()">
                        <label for="" class="custome-file-label"></label>
                    </div>
                </div>

            </div>
            <div class="card-footer">
                <a href="<?= base_url('admin_season'); ?>" class="btn btn-outline-danger">Batal</a>
                <button type="submit" class="btn btn-outline-primary float-right">Update</button>
            </div>
        </div>

    </form>

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

</div>
<?= $this->endSection(); ?>