<title><?php echo "$judul"; ?> | Villa Merah</title>
<div class="content-wrapper">
	<div class="container">
		<section class="content-header">
			<h1><?php echo "$judul"; ?></h1>
			<ol class="breadcrumb">
				<li><a href="<?php echo site_url('siswa') ?>">Beranda</a></li>
				<li><a href="<?php echo site_url('siswa/fsrd1') ?>">Persiapan Sebelum Menggambar</a></li>
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
									<li><a href="<?php echo site_url('siswa/peralatan_untuk_menggambar') ?>">Peralatan Untuk Menggambar</a></li>
									<li><a href="<?php echo site_url('siswa/posisi_tangan') ?>">Posisi Tangan saat Memegang Pensil</a></li>
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
							<li class="active"><a href="#tab_1" data-toggle="tab">Teori dan Contoh Gambar</a></li>
							<li><a href="#tab_2" data-toggle="tab">Video</a></li>
						</ul>
						<div class="tab-content">
							<div class="tab-pane active" id="tab_1">
								<img src="<?php echo base_url('assets/images/1_grip a pencil.png') ?>" width="100%">
							</div>
							<!-- /.tab-pane -->
							<div class="tab-pane" id="tab_2">
								Tidak ada data.
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

