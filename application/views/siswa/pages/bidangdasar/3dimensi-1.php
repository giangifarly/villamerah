<title><?php echo "$judul"; ?> | Villa Merah</title>
<div class="content-wrapper">
	<div class="container">
		<section class="content-header">
			<h1><?php echo "$judul"; ?></h1>
			<ol class="breadcrumb">
				<li><a href="<?php echo site_url('siswa') ?>">Beranda</a></li>
				<li><a href="<?php echo site_url('siswa/fsrd4') ?>">3 Dimensi</a></li>
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
									<li><a href="<?php echo site_url('siswa/bentuk_dasar_3dimensi') ?>">Konstruksi Bentuk Dasar 3 Dimensi</a></li>
									<li><a href="<?php echo site_url('siswa/bentuk_lingkaran') ?>">Konstruksi Bentuk Lingkaran/Bola</a></li>
									<li><a href="<?php echo site_url('siswa/bentuk_tabung') ?>">Konstruksi Bentuk Tabung</a></li>
									<li><a href="<?php echo site_url('siswa/bentuk_kerucut') ?>">Konstruksi Bentuk Kerucut</a></li>
									<li><a href="<?php echo site_url('siswa/bentuk_helm') ?>">Konstruksi Bentuk Helm</a></li>
									<li><a href="<?php echo site_url('siswa/bentuk_botol') ?>">Konstruksi Bentuk Botol</a></li>
									<li><a href="<?php echo site_url('siswa/bentuk_gelas') ?>">Konstruksi Bentuk Gelas</a></li>
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
							<li class="active"	><a href="#tab_3" data-toggle="tab">Video</a></li>
						</ul>
						<div class="tab-content">
							<div class="tab-pane" id="tab_1">
								Tidak ada data
							</div>
							<!-- /.tab-pane -->
							<div class="tab-pane" id="tab_2">
								<img src="<?php echo base_url('assets/images/16_konstruksi bentuk dasar 3D.png') ?>" width="100%">
								<img src="<?php echo base_url('assets/images/10_struktur bentuk_bola_balok.png') ?>" width="100%">
								
							</div>
							<!-- /.tab-pane -->
							<div class="tab-pane active" id="tab_3">
								<video controls width="100%" controlsList="nodownload"><source src="<?php echo base_url('assets/videos/bidangdasar/menggambar-3-dimensi.mp4') ?>" type="video/mp4">
								</video>
							</div>
							<!-- /.tab-pane -->
						</div>
						<!-- /.tab-content -->
					</div>
					<!-- /.box -->
				</div>
			</div>
		</section>
	</div>
</div>

