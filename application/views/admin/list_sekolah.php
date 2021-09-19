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
			<div class="box-header">
				<h3 class="box-title"><?= $judul;?></h3>
				<div class="box-tools">
					<a href="<?= site_url('admin/tambah_sekolah'); ?>" class="btn btn-primary">Tambah Sekolah</a>
				</div>
			</div>
			<!-- /.box-header -->
			<div class="box-body">
				<div class="form-group">
					<div class="input-group">
						<span class="input-group-addon">Search</span>
						<input type="text" name="search_text" id="search_text" placeholder="Cari Berdasarkan Nama Sekolah" class="form-control" />
					</div>
				</div>
				<br />
				<div id="result"></div>
			</div>
			<div style="clear:both"></div>
			<!-- /.box-body -->
		</div>
	</section>
</div>


