<title><?php echo "$judul"; ?> | Villa Merah</title>
<div class="content-wrapper">
	<div class="container">
		<section class="content-header">
			<h1><?php echo "$judul"; ?></h1>
			<ol class="breadcrumb">
				<li><a href="<?php echo site_url('siswa') ?>">Beranda</a></li>
				<li class="active"><?php echo "$judul"; ?></li>
			</ol>
		</section>
		<section class="content">
			<div class="row">

				<!-- ./col -->
				<div class="col-md-9">
					<div class="nav-tabs-custom">
						<ul class="nav nav-tabs">
							<li class="active"><a href="#tab_1" data-toggle="tab">Teori dan Contoh Gambar</a></li>
							<li><a href="#tab_2" data-toggle="tab">Video</a></li>
						</ul>
						<div class="tab-content">
							<div class="tab-pane active" id="tab_1">

								<div class="box-group" id="accordion">
									<!-- we are adding the .panel class so bootstrap.js collapse plugin detects it -->
									<div class="panel box box-primary">
										<div class="box-header with-border">
											<h4 class="box-title">
												<a data-toggle="collapse" data-parent="#accordion" href="#collapseOne">
													Konstruksi Bentuk Dasar 2 Dimensi
												</a>
											</h4>
										</div>
										<div id="collapseOne" class="panel-collapse collapse">
											<div class="box-body">

												<div id="carousel-example-generic" class="carousel slide">
													<ol class="carousel-indicators">
														<li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
														<li data-target="#carousel-example-generic" data-slide-to="1" class=""></li>
													</ol>
													<div class="carousel-inner">
														<div class="item active">
															<img src="<?php echo base_url('assets/images/14_bentuk dasar 2D_2.png') ?>" width="100%" alt="First slide">
														</div>
														<div class="item">
															<img src="<?php echo base_url('assets/images/15_konstruksi bentuk 2D.png') ?>" width="100%" alt="Second slide">
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
										</div>
									</div>
									<div class="panel box box-primary">
										<div class="box-header with-border">
											<h4 class="box-title">
												<a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">
													Contoh Menggambar 2 Dimensi
												</a>
											</h4>
										</div>
										<div id="collapseTwo" class="panel-collapse collapse">
											<div class="box-body">
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
										</div>
									</div>
								</div>


							</div>
							<!-- /.tab-pane -->

							<div class="tab-pane" id="tab_2">



								<div class="box-group" id="accordion2">
									<!-- we are adding the .panel class so bootstrap.js collapse plugin detects it -->
									<div class="panel box box-primary">
										<div class="box-header with-border">
											<h4 class="box-title">
												<a data-toggle="collapse" data-parent="#accordion2" href="#collapseThree">
													Konstruksi Bentuk Dasar 2 Dimensi
												</a>
											</h4>
										</div>
										<div id="collapseThree" class="panel-collapse collapse">
											<div class="box-body">
												<video controls width="100%" controlsList="nodownload">
													<source src="<?php echo base_url('assets/videos/bidangdasar/2dimensi.mp4') ?>" type="video/mp4"></source>
												</video>
											</div>
										</div>
									</div>
									<div class="panel box box-primary">
										<div class="box-header with-border">
											<h4 class="box-title">
												<a data-toggle="collapse" data-parent="#accordion2" href="#collapseFour">
													Contoh Menggambar 2 Dimensi
												</a>
											</h4>
										</div>
										<div id="collapseFour" class="panel-collapse collapse">
											<div class="box-body">
												Tidak Ada Data.
												.
											</div>
										</div>
									</div>
								</div>


							</div>
							<!-- /.tab-pane -->
						</div>
						<!-- /.tab-content -->
					</div>
					<!-- /.box -->
				</div>

				<div class="col-md-3">
					<?php $this->load->view('siswa/config/sidebar-materi') ?>
				</div>
				
			</div>
		</section>
	</div>
</div>


