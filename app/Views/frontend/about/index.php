<?= $this->extend('frontend/layout/template'); ?>

<?= $this->section('content'); ?>

<?= $this->include('frontend/layout/navbar'); ?>

<div class="header-tim"></div>


<div class="container-fluid pt-lg-5 mt-3">
    <div class="row justify-content-center">
        <div class="col">
            <h3 class="text-center text-danger text-uppercase"><?= $title; ?></h3>
        </div>
    </div>
</div>

<div class="container mb-5 mt-5">

    <div class="row justify-content-center">
        
        <?php if (count($about) == 0) { //jika hasil kosong, maka tampilkan:
            echo "Maaf, Data about tidak ditemukan";
        } else {
            foreach ($about as $row):?>
                <div class="col-xl-6 col-sm-12 mb-5">
                    <div class="card text-center d-block">
                        <div class="card-body">
                            <p><?= $row['about']; ?></p> <br><br>
                            <p>Follow us:</p>
                            <a href="<?= $row['facebook']; ?>"><i class="fab fa-facebook-f fa-2x ml-3" style="color:black"></i></a>
                            <a href="<?= $row['instagram']; ?>"><i class=" fab fa-instagram fa-2x ml-3" style="color:black"></i></a>
                            <a href="<?= $row['twitter']; ?>"><i class="fab fa-twitter fa-2x ml-3" style="color:black"></i></a>
                        </div>
                    </div>
                </div>
        <?php endforeach; } ?>

    </div>

</div>


<?= $this->endSection(); ?>