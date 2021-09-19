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
					<?php echo form_open("admin/proses_edit_sekolah"); ?>
					<?php echo form_hidden('id_sekolah', $this->uri->segment(3)); ?>

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

					<div class="col-sm-6">

						<label for="jenis_pendidikan">Nama Sekolah</label>
						<div class="row">
							<div class="col-sm-2">
								<div class="form-group has-feedback">

									<select class="form-control" name="jenis_pendidikan" required>
										<?php if ($edit_sekolah['jenis_pendidikan'] == 'SMA') : ?>
											<option value="SMA" selected>SMA</option>
											<option value="SMK">SMK</option>

										<?php elseif ($edit_sekolah['jenis_pendidikan'] == 'SMK') : ?>
											<option value="SMA">SMA</option>
											<option value="SMK" selected>SMK</option>

										<?php endif; ?>
									</select>
								</div>
							</div>

							<div class="col-sm-3">
								<div class="form-group has-feedback">
									<select class="form-control" name="status_sekolah" required>
										<?php if ($edit_sekolah['status_sekolah'] == 'Negeri') : ?>
											<option value="Negeri" selected>Negeri</option>
											<option value="Swasta">Swasta</option>

										<?php elseif ($edit_sekolah['status_sekolah'] == 'Swasta') : ?>
											<option value="Negeri">Negeri</option>
											<option value="Swasta" selected>Swasta</option>

										<?php endif; ?>
									</select>
								</div>
							</div>

							<div class="col-sm-3">
								<div class="form-group has-feedback">
									<input type="text" class="form-control" placeholder="Urutan(boleh kosong)" name="urutan" value="<?php echo $edit_sekolah['urutan']; ?>">
								</div>
							</div>

							<div class="col-sm-4">
								<div class="form-group has-feedback">
									<input type="text" class="form-control" placeholder="Instansi" name="instansi" value="<?php echo $edit_sekolah['instansi']; ?>">
								</div>
							</div>

						</div>

						<div class="form-group has-feedback">
							<label for="alamat_sekolah">Alamat Sekolah</label>
							<input type="text" class="form-control" placeholder="Alamat Sekolah" name="alamat_sekolah" value="<?php echo $edit_sekolah['alamat_sekolah']; ?>">
						</div>

						<div class="form-group has-feedback">
							<label for="telp_sekolah">No. Telepon Sekolah</label>
							<input type="text" class="form-control" placeholder="No. Telepon Sekolah" name="telp_sekolah" value="<?php echo $edit_sekolah['telp_sekolah']; ?>">
						</div>

						<div class="form-group has-feedback">
							<label for="email_sekolah">Email Sekolah</label>
							<input type="text" class="form-control" placeholder="Email Sekolah" name="email_sekolah" id="email_sekolah" value="<?= $edit_sekolah['email_sekolah']; ?>">
						</div>

						<div class="row">
							<div class="col-sm-3">
								<div class="form-group has-feedback">
									<button type="submit" class="btn btn-success btn-block btn-flat">Edit Data</button>
								</div>
							</div>
						</div>

					</div>
					<?php echo form_close(); ?>
				</div>
			</div>
			<!-- /.box-body -->
		</div>
	</section>
</div>
