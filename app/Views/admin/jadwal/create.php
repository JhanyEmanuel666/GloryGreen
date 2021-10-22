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

    <form action="/admin_jadwal/save" method="post">
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
                <div class="col">
                    <label for="">Waktu</label>
                    <input type="datetime-local" name="waktu" class="form-control">
                </div>
            </div> <br>
            <div class="row">
                <div class="col">
                    <label for="">Tim 1</label>
                    <select name="team_1" class="form-control">
                        <option>Pilih Team 1</option>
                        <?php foreach($team as $row): ?>
                            <option value="<?= $row['nama_team'];?>"><?= $row['nama_team']; ?></option>
                        <?php endforeach; ?>
                    </select>
                </div>
                <div class="col">
                    <label for="">Tim 2</label>
                    <select name="team_2" class="form-control">
                        <option>Pilih Team 2</option>
                        <?php foreach($team as $row): ?>
                            <option value="<?= $row['nama_team'];?>"><?= $row['nama_team']; ?></option>
                        <?php endforeach; ?>
                    </select>
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
