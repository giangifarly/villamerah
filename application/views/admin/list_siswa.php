<title><?= $judul; ?> | Villa Merah Admin</title>

<div class="content-wrapper">
	<section class="content-header">
		<h1>
			<?= $judul; ?>
			<small>Villa Merah</small>
		</h1>
	</section>
	<section class="content container-fluid">
		<div class="row">
			<div class="col-sm-3">
				<div class="box">
					<div class="box-header">
						<h3 class="box-title">Cari</h3>
					</div>
					<div class="box-body">
						<div class="form-group">
							<div class="input-group">
								<span class="input-group-addon">Search</span>
								<input type="text" name="search_text" id="search_text" placeholder="Cari Berdasarkan Nama" class="form-control" />
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-lg-4">
				<div class="box">
					<div class="box-header">
						<h3 class="box-title">Filter</h3>
					</div>
					<div class="box-body">
						<form action="siswa" method="post">
							<div class="form-group">
								<select class="form-control" name="id_sekolah">
									<option value=''>--Pilih Asal Sekolah--</option>
									<?php foreach ($list_sekolah as $s) { ?>
										<option value="<?php echo $s->id_sekolah ?>"><?php echo $s->jenis_pendidikan . ' ' . $s->status_sekolah . ' ' . $s->urutan . ' ' . $s->instansi ?></option>
									<?php } ?>
								</select>
							</div>
							<div class="form-group">
								<input type="submit" value="Filter" class="btn btn-primary">
							</div>
						</form>
					</div>
				</div>
			</div>
			<div class="col-sm-3">
				<div class="box">
					<div class="box-header">
						<h3 class="box-title">Lokasi Belajar</h3>
					</div>
					<div class="box-body">
						<div class="form-group">
							<div class="form-group">
								<a href="<?= site_url('admin/siswa')?>" class="btn btn-primary btn-block btn-social">Semua Lokasi Belajar</a>
							</div>
							<div class="form-group">
								<a href="<?= site_url('admin/siswa_bandung')?>" class="btn btn-primary btn-block btn-social">Bandung</a>
							</div>
							<div class="form-group">
								<a href="<?= site_url('admin/siswa_jaksel')?>" class="btn btn-primary btn-block btn-social">Jakarta Selatan</a>
							</div>
							<div class="form-group">
								<a href="<?= site_url('admin/siswa_jaktim')?>" class="btn btn-primary btn-block btn-social">Jakarta Timur</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="box">
			<div class="box-header">
				<h3 class="box-title">Daftar Akun Aktif</h3>
			</div>
			<div class="box-body">
				<div id="result"></div>
			</div>
			<div style="clear:both"></div>
		</div>
	</section>
</div>
