<title><?= $judul ?> | Villa Merah</title>

<div class="content-wrapper">
	<div class="container">
		<section class="content-header">
			<h1>
				<?= $judul ?>
				<small>Villa Merah</small>
			</h1>
			<ol class="breadcrumb">
				<li><a href="<?php echo site_url('siswa') ?>"><i class="fa fa-home"></i> Home</a></li>
				<li class="active"><?= $judul?></li>
			</ol>
		</section>
		<section class="content">
			<div class="row">
				<div class="col-md-3">
					<div class="box">
						<div class="box-body">
							<h3 class="box-title"><?php echo $this->session->userdata('name'); ?></h3>
							<a href="<?php echo site_url('siswa/profil') ?>"><button type="button" class="btn btn-default btn-block btn-flat">Profil</button></a>
							<a href="<?php echo site_url('siswa/ubahpassword') ?>"><button type="button" class="btn btn-danger btn-block btn-flat">Ubah Password</button></a>
						</div>
					</div>
					<!-- /.box -->
				</div>
				<!-- /.col -->

				<div class="col-md-7">
					<div class="box box-default">
						<!-- /.box-header -->
						<div class="box-body">
							<div class="box-header with-border">
								<h3 class="box-title">Form Ganti Password</h3>
								<div class="box-tools pull-right">



								</div>
							</div>

							<!-- /.box-header -->

							<div class="box-body no-padding">
								<?= $this->session->flashdata('message'); ?>
								<form action="<?= site_url('siswa/ubahpassword') ?>" method="post">
									<div class="form-group">

										<label for="current_password">Current Password</label>
										<input type="password" class="form-control" name="current_password" id="current_password">
										<?= form_error('current_password', '<small class="text-danger pl-3">','</small>');?>
									</div>

									<div class="form-group">
										<label for="newPassword1">New Password</label>
										<input type="password" class="form-control" name="newPassword1" id="newPassword1">
										<?= form_error('newPassword1', '<small class="text-danger pl-3">','</small>');?>
									</div>

									<div class="form-group">
										<label for="newPassword2">Confirm New Password</label>
										<input type="password" class="form-control" name="newPassword2" id="newPassword2">
										<?= form_error('newPassword2', '<small class="text-danger pl-3">','</small>');?>
									</div>

									<div class="form-group">
										<input type="submit" value="Konfirmasi" class="btn btn-primary">
									</div>

								</form>
							</div>
						</div>
						<!-- /.box-body -->
					</div>
					<!-- /.box -->
				</div>
				<!-- /.col -->
			</div>
		</section>
	</div>
</div>
