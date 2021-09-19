<title><?php echo "$judul"; ?> | Villa Merah</title>
<div class="content-wrapper">
	<div class="container">
		<section class="content-header">
			<h1><?php echo "$judul"; ?></h1>
			<ol class="breadcrumb">
				<li><a href="<?php echo site_url('siswa') ?>">Beranda</a></li>
				<li><a href="<?php echo site_url('siswa/fsrd6') ?>">Perspektif</a></li>
				<li class="active"><?php echo "$judul"; ?></li>
			</ol>
		</section>
		<section class="content">
			<div class="row">

				<div class="col-md-3">
					<!-- /.box -->
					<div class="row">
						<div class="box box-default">
							<div class="box-header with-border">
								<h3 class="box-title">Sub Materi Lainnya</h3>
							</div>
							<!-- /.box-header -->
							<div class="box-body">
								<ul class="list-unstyled">
									<li><a href="<?php echo site_url('siswa/perspektif') ?>">Perspektif</a></li>
									<li><a href="<?php echo site_url('siswa/interior_1_titik_hilang') ?>">1 Titik Hilang Interior</a></li>
									<li><a href="<?php echo site_url('siswa/interior_2_titik_hilang') ?>">2 Titik Hilang Interior</a></li>
									<li><a href="<?php echo site_url('siswa/eksterior_1_titik_hilang') ?>">1 Titik Hilang Eksterior</a></li>
									<li><a href="<?php echo site_url('siswa/eksterior_2_titik_hilang') ?>">2 Titik Hilang Eksterior</a></li>
									<li><a href="<?php echo site_url('siswa/contoh_pengaplikasian_sederhana') ?>">Contoh Pengaplikasian Perspektif Sederhana</a></li>
									<li><a href="<?php echo site_url('siswa/posisi_daun_pintu') ?>">Posisi Daun Pintu</a></li>
									<li><a href="<?php echo site_url('siswa/contoh_pembuatan_varian_2_titik_hilang') ?>">Contoh Pembuatan Varian Benda 2 Titik Hilang</a></li>
									<li><a href="<?php echo site_url('siswa/logika_gambar_2_titik_hilang') ?>">Logika Gambar 2 Titik hilang</a></li>
									<li><a href="<?php echo site_url('siswa/arah_datang_cahaya') ?>">Arah Datang Cahaya</a></li>
									<li><a href="<?php echo site_url('siswa/perbedaan_ukuran_berdasarkan_posisi') ?>">Perbedaan Ukuran Berdasarkan Posisi</a></li>
									<li><a href="<?php echo site_url('siswa/posisi_lampu_diatas_meja_makan') ?>">Posisi Lampu Di Atas Meja Makan</a></li>
								</ul>
							</div>
							<!-- /.box-body -->
						</div>
						<!-- /.box -->
					</div>

					<?php $this->load->view('siswa/config/sidebar-materi') ?>

				</div>

				<!-- ./col -->
				<div class="col-md-9">
					<div class="nav-tabs-custom">
						<ul class="nav nav-tabs">
							<li><a href="#tab_1" data-toggle="tab">Teori</a></li>
							<li><a href="#tab_2" data-toggle="tab">Contoh Gambar</a></li>
							<li class="active"><a href="#tab_3" data-toggle="tab">Video</a></li>
						</ul>
						<div class="tab-content">
							<div class="tab-pane" id="tab_1">
								Tidak ada data.
							</div>
							<!-- /.tab-pane -->
							<div class="tab-pane" id="tab_2">
								Tidak ada data.
							</div>
							<!-- /.tab-pane -->
							<div class="tab-pane active" id="tab_3">
								<video controls width="100%" controlsList="nodownload"><source src="<?php echo base_url('assets/videos/perspektif/2th-ext.mp4') ?>" type="video/mp4">
								</video>
							</div>
							<!-- /.tab-pane -->
						</div>
						<!-- /.tab-content -->
					</div>
					<!-- /.box -->
				</div>
				<!-- ./col -->
			</div>
		</section>
	</div>
</div>

