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
					<?php echo form_open("admin/proses_tambah_pengguna"); ?>

					<?php if (validation_errors()) : ?>
						<div class="alert alert-danger alert-sm">
							<?php echo validation_errors(); ?>
						</div>
					<?php endif; ?>

					<?php if ($this->session->flashdata('result_register')) : ?>
						<div class="alert alert-success alert-sm">
							<?php echo $this->session->flashdata('result_tambah'); ?>
						</div>
					<?php endif; ?>

					<div class="col-sm-5">

						<div class="form-group has-feedback">
							<label for="level">Role</label>
							<select class="form-control" name="level" required>
								<option value="3">Siswa Offline</option>
								<option value="2">Siswa Online</option>
								<option value="1">Administrator</option>
							</select>
						</div>

						<div class="form-group has-feedback">
							<label for="nama">Nama Lengkap</label>
							<input type="text" class="form-control" placeholder="Nama Lengkap" name="nama" required>
						</div>

						<div class="form-group has-feedback">
							<label for="email">Email</label>
							<input type="text" class="form-control" placeholder="Email" name="email" required>
						</div>

						<div class="form-group has-feedback">
							<label for="id_sekolah">Asal Sekolah</label>
							<select class="form-control" name="id_sekolah">
								<option value="">--Pilih Asal Sekolah--</option>
								<?php foreach ($list_sekolah as $s) { ?>
									<option value="<?php echo $s->id_sekolah ?>"><?php echo $s->jenis_pendidikan.' '.$s->status_sekolah.' '.$s->urutan.' '.$s->instansi ?></option>
								<?php } ?>
							</select>
						</div>

						<div class="form-group has-feedback">
							<label for="id_kelas">Pemilihan Kelas</label>
							<select class="form-control" name="id_kelas">
								<option value="">--Pilih Kelas--</option>
								<?php foreach ($kelas as $k) { ?>
									<option value="<?php echo $k->id_kelas ?>"><?php echo $k->nama_kelas ?></option>
								<?php } ?>
							</select>
						</div>

						<div class="form-group has-feedback">
							<label for="id_program">Pemilihan Program</label>
							<select class="form-control" name="id_program">
								<option value="">--Pilih Program--</option>
								<?php foreach ($program as $p) { ?>
									<option value="<?php echo $p->id_program ?>"><?php echo $p->nama_program ?></option>
								<?php } ?>
							</select>
						</div>
						
						<div class="form-group has-feedback">
							<label for="tempat_lahir">Tempat Lahir</label>
							<input type="text" class="form-control" placeholder="Tempat Lahir"" name=" tempat_lahir">
						</div>

						<div class="form-group has-feedback">
							<label for="tgl_lahir">Tanggal Lahir</label>
							<input type="text" class="form-control" placeholder="dd-mm-yyyy" name="tgl_lahir">
						</div>

					</div>
					<div class="col-sm-5">

						<div class="form-group has-feedback">
							<label for="orang_tua">Nama Orang Tua</label>
							<input type="text" class="form-control" placeholder="Nama Orang Tua" name="orang_tua">
						</div>

						<div class="form-group has-feedback">
							<label for="alamat">Alamat</label>
							<input type="text" class="form-control" placeholder="Alamat" name="alamat">
						</div>

						<div class="form-group has-feedback">
							<label for="telp">Nomor HP/Telepon</label>
							<input type="text" class="form-control" placeholder="Nomor HP/Telepon" name="telepon">
						</div>

						<div class="form-group has-feedback">
							<label for="id_jenis_kelamin">Jenis Kelamin</label>
							<select class="form-control" name="id_jenis_kelamin" required>
								<option value="">--Pilih Jenis Kelamin--</option>
								<?php foreach ($jenis_kelamin as $j) { ?>
									<option value="<?php echo $j->id_jenis_kelamin ?>"><?php echo $j->jenis_kelamin ?></option>
								<?php } ?>
							</select>
						</div>

						<div class="form-group has-feedback">
							<label for="id_lokasi">Lokasi Belajar</label>
							<select class="form-control" name="id_lokasi" required>
								<option value="">--Pilih Lokasi Belajar--</option>
								<?php foreach ($lokasi_belajar as $l) { ?>
									<option value="<?php echo $l->id_lokasi ?>"><?php echo $l->lokasi_belajar ?></option>
								<?php } ?>
							</select>
						</div>

						<div class="form-group has-feedback">
							<label for="id_tahun">Tahun Ajaran</label>
							<select class="form-control" name="id_tahun">
								<option value="">--Pilih Tahun Ajaran--</option>
								<?php foreach ($tahun_ajaran as $t) { ?>
									<option value="<?php echo $t->id_tahun ?>"><?php echo $t->tahun_ajaran ?></option>
								<?php } ?>
							</select>
						</div>

						<div class="form-group has-feedback">
							<label for="username">Status Akun</label>
							<select class="form-control" name="status">
								<option value="0">Pending</option>
								<option value="1">Aktif</option>
								<option value="2">Tidak Aktif</option>
							</select>
						</div>

					</div>
					
				</div>
				<div class="row">
					<div class="col-sm-5">
						<div class="form-group has-feedback">
							<button type="submit" class="btn btn-success btn-block btn-flat">Tambah Akun</button>
							<a href="<?php echo site_url('Admin/'); ?>" class="btn btn-danger btn-block btn-flat">Kembali</a>
						</div>
					</div>
				</div>
				<?php echo form_close(); ?>
			</div>
			<!-- /.box-body -->
		</div>
	</section>
</div>
