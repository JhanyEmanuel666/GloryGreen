<?= $this->extend('admin/layout/template'); ?>

<?= $this->section('content'); ?>

<div class="container-fluid">
	
	<div class="row justify-content-center mb-5">

		<div class="col-md-6 col-sm-12">
			<div class="card shadow-lg">
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
				<div class="card-body p-4">
					<form action="/admin_profile/update/<?= $profile['id_user']; ?>" method="post" enctype="multipart/form-data">
                       	<div class="form-group">
                            <div class="row pb-3" style="background-color: black;">
                                <div class="col">
                                    <div class="mx-auto image-preview" id="imagePreview">
                                        <img src="/image/admin/<?= $profile['img_user']; ?>" class="image-preview__image img-preview rounded-circle">
                                    </div>
                                </div>
                            </div><hr>
                            <div class="row">
                                <div class="col">
                                    <input type="hidden" name="img_lama" value="<?= $profile['img_user'];?>">
                                    <input type="file" class="custome-file-input" id="sampull" name="image_admin" onchange="previewImg()">
                                    <label class="custome-file-label"></label>
                                </div>
                            </div>
                        </div> <hr>
					  	<div class="form-group">
					    	<label>Nama Lengkap</label>
					    	<input type="text" class="form-control" value="<?= $profile['nama_lengkap'] ?>" name="nama_userr">
					 	 </div>
					  	<div class="form-group">
					    	<label>Username</label>
					    	<input type="text" class="form-control" value="<?= $profile['username'] ?>">
					  	</div>
					  	<div class="form-group">
					    	<label>Email</label>
					    	<input type="text" class="form-control" value="<?= $profile['email'] ?>">
					  	</div>
					  	<div class="form-group">
					    	<label>No Telp</label>
					    	<input type="text" class="form-control" value="<?= $profile['no_telp'] ?>" name="telpp">
					  	</div>
						<div class="form-group">
						   	<div class="row text-center">
						   		<div class="col">
						   			<a href="<?= base_url('admin_dashboard'); ?>" class="btn btn-outline-danger">Batal</a>
						   			<button class="btn btn-outline-primary" type="submit" name="submit">Update</button>
						   		</div>
						   	</div>
						</div>
					</form>
				</div>
			</div>
		</div>
		
	</div>

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