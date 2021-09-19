<title><?php echo $judul; ?> | Villa Merah Admin</title>

<div class="content-wrapper">
	<section class="content-header">
		<h1>
			<?php echo $judul; ?>
			<small>Villa Merah</small>
		</h1>
	</section>
	<section class="content container-fluid">
		<div class="box">
			<!-- /.box-header -->
			<div class="box-body">
				<div class="row">
					<?php echo form_open("admin/tambah_sekolah"); ?>

					<div class="col-sm-6">
						<label for="jenis_pendidikan">Nama Sekolah</label>
						<div class="row">
							<div class="col-sm-2">
								<div class="form-group has-feedback">
									<select class="form-control" name="jenis_pendidikan" required>
										<option value="SMA">SMA</option>
										<option value="SMK">SMK</option>
										<option value="SMAK">SMAK</option>
										<option value="MA">MA</option>
									</select>
								</div>
							</div>

							<div class="col-sm-3">
								<div class="form-group has-feedback">
									<select class="form-control" name="status_sekolah" required>
										<option value="Negeri">Negeri</option>
										<option value="Swasta">Swasta</option>
									</select>
								</div>
							</div>

							<div class="col-sm-3">
								<div class="form-group has-feedback">
									<input type="text" class="form-control" placeholder="Urutan(boleh kosong)" name="urutan">
								</div>
							</div>

							<div class="col-sm-4">
								<div class="form-group has-feedback">
									<input type="text" class="form-control" placeholder="Instansi" name="instansi">
								</div>
							</div>

						</div>

						<div class="form-group has-feedback">
							<label for="alamat_sekolah">Alamat Sekolah</label>
							<input type="text" class="form-control" name="alamat_sekolah" id="alamat_sekolah" required>
						</div>

						<div class="form-group has-feedback">
							<label for="telp_sekolah">No. Telepon Sekolah</label>
							<input type="text" class="form-control" name="telp_sekolah" id="telp_sekolah">
						</div>

						<div class="form-group has-feedback">
							<label for="email_sekolah">Email Sekolah</label>
							<input type="text" class="form-control" name="email_sekolah" id="email_sekolah">
						</div>
					</div>

				</div>
				<div class="row">
					<div class="col-sm-2">
						<div class="form-group has-feedback">
							<button type="submit" class="btn btn-success btn-block btn-flat">Tambah Sekolah</button>
						</div>
					</div>
				</div>
				<?php echo form_close(); ?>
			</div>
			<!-- /.box-body -->
		</div>
	</section>
</div>
