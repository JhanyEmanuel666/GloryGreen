<?= $this->extend('admin/layout/template'); ?>

<?= $this->section('content'); ?>

<div class="container-fluid">
    
    <!-- Content Row -->
    <div class="row">

        <div class="col-xl-6 col-md-6 mb-4">
            <div class="card border-left-primary shadow-lg h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                JUMLAH TEAM</div>
                            <div class="h5 mb-0 font-weight-bold text-primary">
                                <?= $team; ?>
                            </div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-users fa-2x text-primary"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-xl-6 col-md-6 mb-4">
            <div class="card border-left-success shadow-lg h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                JUMLAH PLAYERS</div>
                            <div class="h5 mb-0 font-weight-bold text-success">
                                <?= $player; ?>
                            </div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-users fa-2x text-success"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection(); ?>