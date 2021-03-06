<?= $this->extend('frontend/layout/template'); ?>

<?= $this->section('content'); ?>

<?= $this->include('frontend/layout/navbar'); ?>
 
    <div class="header-home img-fluid"></div>

    <div class="container-fluid pt-lg-5 bggg">

        <div class="row justify-content-center pb-5">
            <div class="col-lg-10">
                <div id="demo" class="carousel slide" data-ride="carousel">

                    <ul class="carousel-indicators">
                        <?php
                        $i = 0;
                        foreach ($team as $row) {
                            $actives = '';
                            if ($i == 0) {
                                $actives = 'active';
                            }
                        ?>
                            <li data-target="#demo" data-slide-to="<?= $i; ?>" class="<?= $actives; ?>"></li>
                        <?php $i++; }?>
                    </ul>

                    <div class="carousel-inner text-center">
                        <?php
                        $i = 0;
                        foreach ($team as $row) {
                            $actives = '';
                            if ($i == 0) {
                                $actives = 'active';
                            } ?>
                            <div class="carousel-item <?= $actives; ?>">
                                <div class="row justify-content-center">
                                    <div class="col-md-3 col-sm-6">
                                        <img src="/image/team/<?= $row['img_team']; ?>" class="card-img-top img_bggg">
                                    </div>
                                </div>
                            </div>
                        <?php $i++; } ?>
                    </div>
                </div>

            </div>
        </div>
        <div class="row justify-content-center mb-0">
            <div class="col-4">
                <div class=" d-flex flex-wrap align-content-end">
                </div>
            </div>
        </div>
    </div>

<?= $this->endSection(); ?>