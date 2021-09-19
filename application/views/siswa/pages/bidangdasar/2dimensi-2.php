<title><?php echo "$judul"; ?> | Villa Merah</title>
<div class="content-wrapper">
	<div class="container">
		<section class="content-header">
			<h1><?php echo "$judul"; ?></h1>
			<ol class="breadcrumb">
				<li><a href="<?php echo site_url('siswa') ?>">Beranda</a></li>
				<li><a href="<?php echo site_url('siswa/fsrd3') ?>">2 Dimensi</a></li>
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
									<li><a href="<?php echo site_url('siswa/konstruksi_bentuk_dasar_2dimensi') ?>">Konstruksi Bentuk Dasar 2 Dimensi</a></li>
									<li><a href="<?php echo site_url('siswa/contoh_menggambar_2dimensi') ?>">Contoh Menggambar 2 Dimensi</a></li>
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
								<div id="carousel-example-generic" class="carousel slide">
									<ol class="carousel-indicators">
										<li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
										<li data-target="#carousel-example-generic" data-slide-to="1" class=""></li>
									</ol>
									<div class="carousel-inner">
										<div class="item active">
											<img src="<?php echo base_url('assets/images/12_struktur bentuk_sejajar_menjari.png') ?>" width="100%" alt="First slide">
										</div>
										<div class="item">
											<img src="<?php echo base_url('assets/images/13_struktur bentuk_duri.png') ?>" width="100%" alt="Second slide">
										</div>
									</div>
									<a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
										<span class="fa fa-angle-left"></span>
									</a>
									<a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
										<span class="fa fa-angle-right"></span>
									</a>
								</div>
							</div>
							<!-- /.tab-pane -->
							<div class="tab-pane" id="tab_2">
								<video controls width="100%" controlsList="nodownload"><source src="<?php echo base_url('assets/videos/2dimensi.mp4') ?>" type="video/mp4"></video>
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

