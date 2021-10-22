<?= $this->extend('admin/layout/template'); ?>

<?= $this->section('content'); ?>

<div class="container-fluid">
	
	<div class="card shadow-lg">
		<div class="card-header">
			<a href="<?= base_url('admin_player/create'); ?>" class="btn btn-outline-success"><i class="fa fa-plus"></i></a>
		</div>
		
		<div class="card-body">
			<?php
            if (!empty(session()->getFlashdata('success'))) { ?>
                <div class="alert alert-success">
                    <?= session()->getFlashdata('success'); ?>
                </div>
            <?php } ?>

            <?php if (!empty(session()->getFlashdata('info'))) { ?>
                <div class="alert alert-info">
                    <?= session()->getFlashdata('info'); ?>
                </div>
            <?php } ?>

            <?php if (!empty(session()->getFlashdata('warning'))) { ?>
                <div class="alert alert-warning">
                    <?= session()->getFlashdata('warning'); ?>
                </div>
            <?php } ?>
			
			<div class="table-responsive">
                <table class="table table-bordered table-hover" id="example" width="100%" cellspacing="0">
                	<thead class="text-center">
                		<tr>
                			<th>No</th>
                			<th>Image</th>
                			<th>Nama Player</th>
                            <th>IGN</th>
                            <th>Role</th>
                            <th>Team</th>
                            <th>Opsi</th>
                		</tr>
                	</thead>
                	<tbody class="text-center">
                		<?php $no=1; foreach($player as $row) {?>
                			<tr>
                				<td><?= $no++; ?></td>
                				<td>
                                    <img src="<?= base_url(); ?>/image/player/<?= $row['img_player']; ?>" class="rounded" width="100" height="100">
                                </td>
                				<td><?= $row['nama_player']; ?></td>
                                <td><?= $row['ign']; ?></td>
                                <td><?= $row['role']; ?></td>
                                <td><?= $row['nama_team']; ?></td>
                				<td class="text-center">
                                    <a href="<?= base_url('admin_player/show/' . $row['id_player']); ?>" class="btn btn-outline-info">
                                        <i class="fa fa-eye"></i>
                                    </a>
                					<a href="<?= base_url('admin_player/edit/' . $row['id_player']); ?>" class="btn btn-outline-warning">
                                        <i class="fa fa-edit"></i>               
                                    </a>
                					<a href="<?= base_url('admin_player/delete/' . $row['id_player']); ?>" class="btn btn-outline-danger" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?');"><i class="fa fa-trash-alt"></i></a>
                				</td>
                			</tr>
                		<?php } ?>
                	</tbody>
                </table>
            </div>

		</div>
	</div>

</div>

<?= $this->endSection(); ?>