<title><?php echo $judul; ?> | Villa Merah Admin</title>

<div class="content-wrapper">
	<section class="content-header">
		<h1>
			<?php echo $judul; ?>
			<small>Villa Merah</small>
		</h1>
	</section>
	<section class="content container-fluid">
		<?php if ($this->session->flashdata('result_reset')) : ?>
			<div class="alert alert-success alert-sm">
				<?php echo $this->session->flashdata('result_reset'); ?>
			</div>
		<?php endif; ?>
		<div class="row">
			<div class="col-sm-9">
				<div class="box">
					<div class="box-header">
						<h3 class="box-title">Profil <b><?= $edit_akun['nama'] ?></b></h3>
						<div class="box-tools">
							<a href="<?= site_url('admin/edit_akun/' . $this->uri->segment(3)); ?>" class="btn btn-primary">Edit Data Siswa</a>
						</div>
					</div>
					<div class="box-body">
						<div class="row">
							<?php echo form_open("admin/proses_edit_akun"); ?>
							<?php echo form_hidden('id_user', $this->uri->segment(3)); ?>
							<?php echo form_hidden('id_user_data', $edit_akun['id_user_data']); ?>

							<?php if (validation_errors()) : ?>
								<div class="alert alert-danger alert-sm">
									<?php echo validation_errors(); ?>
								</div>
							<?php endif; ?>

							<?php if ($this->session->flashdata('result_register')) : ?>
								<div class="alert alert-success alert-sm">
									<?php echo $this->session->flashdata('result_edit'); ?>
								</div>
							<?php endif; ?>

							<div class="col-sm-5">

								<div class="form-group has-feedback">
									<label for="nama">Nama Lengkap</label>
									<input type="text" class="form-control" placeholder="Nama Lengkap" name="nama" value="<?php echo $edit_akun['nama']; ?>" disabled>
								</div>

								<div class="form-group has-feedback">
									<label for="email">Email</label>
									<input type="text" class="form-control" placeholder="Email" name="email" value="<?php echo $edit_akun['email']; ?>" disabled>
								</div>

								<div class="form-group has-feedback">
									<label for="username">Username</label>
									<input type="text" class="form-control" placeholder="Username" name="username" value="<?php echo $edit_akun['username']; ?>" disabled>
								</div>

								<div class="form-group has-feedback">
									<label for="tempat_lahir">Tempat Lahir</label>
									<input type="text" class="form-control" placeholder="Tempat Lahir"" name=" tempat_lahir" value="<?php echo $edit_akun['tempat_lahir']; ?>" disabled>
								</div>

								<div class="form-group has-feedback">
									<label for="tgl_lahir">Tanggal Lahir</label>
									<input type="text" class="form-control" placeholder="dd-mm-yyyy" name="tgl_lahir" value="<?php echo date('d-m-Y', strtotime($edit_akun['tgl_lahir'])); ?>" disabled>
								</div>

								<div class="form-group has-feedback">
									<label for="username">Status Akun</label>
									<select class="form-control" name="status" disabled>
										<?php if ($edit_akun['status'] == 0) : ?>
											<option value="0" selected>Pending</option>
											<option value="1">Aktif</option>
											<option value="2">Tidak Aktif</option>

										<?php elseif ($edit_akun['status'] == 1) : ?>
											<option value="0">Pending</option>
											<option value="1" selected>Aktif</option>
											<option value="2">Tidak Aktif</option>

										<?php elseif ($edit_akun['status'] == 2) : ?>
											<option value="0">Pending</option>
											<option value="1">Aktif</option>
											<option value="2" selected>Tidak Aktif</option>

										<?php endif; ?>
									</select>
								</div>


							</div>
							<div class="col-sm-5">

								<div class="form-group has-feedback">
									<label for="orang_tua">Nama Orang Tua</label>
									<input type="text" class="form-control" placeholder="Nama Orang Tua" name="orang_tua" value="<?php echo $edit_akun['orang_tua']; ?>" disabled>
								</div>

								<div class="form-group has-feedback">
									<label for="alamat">Alamat</label>
									<input type="text" class="form-control" placeholder="Alamat" name="alamat" value="<?php echo $edit_akun['alamat']; ?>" disabled>
								</div>

								<div class="form-group has-feedback">
									<label for="alamat">Nomor HP/Telepon</label>
									<input type="text" class="form-control" placeholder="Nomor HP/Telepon" name="telepon" value="<?php echo $edit_akun['telepon']; ?>" disabled>
								</div>

								<div class="form-group has-feedback">
									<label for="id_jenis_kelamin">Jenis Kelamin</label>
									<select class="form-control" name="id_jenis_kelamin" disabled>
										<?php if ($edit_akun['id_jenis_kelamin'] == 1) : ?>
											<option value="">--Pilih Jenis Kelamin--</option>
											<option value="1" selected>Laki-laki</option>
											<option value="2">Perempuan</option>

										<?php elseif ($edit_akun['id_jenis_kelamin'] == 2) : ?>
											<option value="">--Pilih Jenis Kelamin--</option>
											<option value="1">Laki-laki</option>
											<option value="2" selected>Perempuan</option>

										<?php endif; ?>
									</select>
								</div>

								<div class="form-group has-feedback">
									<label for="id_lokasi">Lokasi Belajar</label>
									<select class="form-control" name="id_lokasi" disabled>
										<?php if ($edit_akun['id_lokasi'] == 1) : ?>
											<option value="">--Pilih Lokasi Belajar--</option>
											<option value="1" selected>Bandung</option>
											<option value="2">Jakarta Selatan</option>
											<option value="3">Jakarta Timur</option>

										<?php elseif ($edit_akun['id_lokasi'] == 2) : ?>
											<option value="">--Pilih Lokasi Belajar--</option>
											<option value="1">Bandung</option>
											<option value="2" selected>Jakarta Selatan</option>
											<option value="3">Jakarta Timur</option>

										<?php elseif ($edit_akun['id_lokasi'] == 3) : ?>
											<option value="">--Pilih Lokasi Belajar--</option>
											<option value="1">Bandung</option>
											<option value="2">Jakarta Selatan</option>
											<option value="3" selected>Jakarta Timur</option>

										<?php elseif ($edit_akun['id_lokasi'] == null) : ?>
											<option value="">--Pilih Lokasi Belajar--</option>
											<option value="1">Bandung</option>
											<option value="2">Jakarta Selatan</option>
											<option value="3">Jakarta Timur</option>
										<?php endif; ?>
									</select>
								</div>

							</div>
							<?php echo form_close(); ?>
						</div>
					</div>
					<!-- /.box-body -->
				</div>
			</div>
			<div class="col-sm-3">
				<div class="box">
					<div class="box-header">
						<div class="box-title">Option</div>
					</div>
					<div class="box-body">

						<div class="form-group">
							<form action="<?= site_url('admin/reset_password') ?>" method="post">
								<input type="hidden" name="id_user" value="<?= $this->uri->segment(3); ?>">
								<input type="hidden" name="username" value="<?= $edit_akun['username']; ?>">
								<button type="submit" class="btn btn-default btn-block">Reset Password</button>
							</form>
						</div>
						<div class="form-group">
							<form action="#" method="post">
								<input type="hidden" name="id_user" value="<?= $this->uri->segment(3); ?>">
								<input type="hidden" name="username" value="<?= $edit_akun['username']; ?>">
								<button type="submit" class="btn btn-warning btn-block">Nonaktifkan Akun</button>
							</form>
						</div>
						<div class="form-group">
							<form action="<?= site_url('admin/hapus_akun') ?>" method="post">
								<input type="hidden" name="id_user" value="<?= $this->uri->segment(3); ?>">
								<input type="hidden" name="id_user_data" value="<?= $this->uri->segment(4); ?>">
								<input type="hidden" name="username" value="<?= $edit_akun['username']; ?>">
								<button type="submit" class="btn btn-danger btn-block">Hapus Akun</button>
							</form>
						</div>

					</div>
				</div>
			</div>
		</div>
		
		<div class="box">
			<div class="box-header">
				<div class="box-title">Tambah Karya Siswa</div>
			</div>
			<div class="box-body">
				<form action="<?= site_url('admin/tambah_karya_siswa') ?>" method="post">
					<input type="hidden" name="id_user" value="<?= $this->uri->segment(3); ?>">
					<input type="hidden" name="id_user_data" value="<?= $this->uri->segment(4); ?>">
					<input type="hidden" name="tanggal_upload" value="<?php echo date("Y-m-d") ?>">
					<div class="form-group">
						<label for="karya_siswa"></label>
						<input type="file" name="karya_siswa">
						<small class="text-muted">Foto Karya Siswa yang akan di Upload</small>
					</div>
					<div class="form-group">
						<label for="upload_file"></label>
						<input type="submit" value="Upload Karya Siswa" class="btn btn-primary">
					</div>
				</form>
			</div>
		</div>
		
		<div class="box">
			<div class="box-header">
				<div class="box-title">Karya Siswa</div>
			</div>
			<div class="box-body">
				Tidak ada karya siswa.
			</div>
		</div>

	</section>
</div>
