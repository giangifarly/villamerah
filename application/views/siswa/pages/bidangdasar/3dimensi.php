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
													Konstruksi Bentuk Dasar 3 Dimensi
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
															<img src="<?php echo base_url('assets/images/16_konstruksi bentuk dasar 3D.png') ?>" width="100%" alt="First slide">
														</div>
														<div class="item">
															<img src="<?php echo base_url('assets/images/10_struktur bentuk_bola_balok.png') ?>" width="100%" alt="Second slide">
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
													Konstruksi Bentuk Lingkaran/Bola
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
															<img src="<?php echo base_url('assets/images/17_konstruksi_bola.png') ?>" width="100%" alt="First slide">
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
												<a data-toggle="collapse" data-parent="#accordion" href="#collapseThree">
													Konstruksi Bentuk Tabung
												</a>
											</h4>
										</div>
										<div id="collapseThree" class="panel-collapse collapse">
											<div class="box-body">
												<div id="carousel-example-generic" class="carousel slide">
													<ol class="carousel-indicators">
														<li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
														<li data-target="#carousel-example-generic" data-slide-to="1" class=""></li>
													</ol>
													<div class="carousel-inner">
														<div class="item active">
															<img src="<?php echo base_url('assets/images/18_konstruksi_tabung.png') ?>" width="100%" alt="First slide">
														</div>
														<div class="item">
															<img src="<?php echo base_url('assets/images/11_struktur bentuk_tabung.png') ?>" width="100%" alt="Second slide">
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
												<a data-toggle="collapse" data-parent="#accordion" href="#collapseFour">
													Konstruksi Bentuk Kerucut
												</a>
											</h4>
										</div>
										<div id="collapseFour" class="panel-collapse collapse">
											<div class="box-body">
												<div id="carousel-example-generic" class="carousel slide">
													<ol class="carousel-indicators">
														<li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
														<li data-target="#carousel-example-generic" data-slide-to="1" class=""></li>
													</ol>
													<div class="carousel-inner">
														<div class="item active">
															<img src="<?php echo base_url('assets/images/19_konstruksi_kerucut.png') ?>" width="100%" alt="First slide">
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
												<a data-toggle="collapse" data-parent="#accordion" href="#collapseFive">
													Konstruksi Bentuk Helm
												</a>
											</h4>
										</div>
										<div id="collapseFive" class="panel-collapse collapse">
											<div class="box-body">
												<div id="carousel-example-generic" class="carousel slide">
													<ol class="carousel-indicators">
														<li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
														<li data-target="#carousel-example-generic" data-slide-to="1" class=""></li>
													</ol>
													<div class="carousel-inner">
														<div class="item active">
															<img src="<?php echo base_url('assets/images/20_konstruksi_helm.png') ?>" width="100%" alt="First slide">
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
												<a data-toggle="collapse" data-parent="#accordion" href="#collapseSix">
													Konstruksi Bentuk Botol
												</a>
											</h4>
										</div>
										<div id="collapseSix" class="panel-collapse collapse">
											<div class="box-body">
												<div id="carousel-example-generic" class="carousel slide">
													<ol class="carousel-indicators">
														<li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
														<li data-target="#carousel-example-generic" data-slide-to="1" class=""></li>
													</ol>
													<div class="carousel-inner">
														<div class="item active">
															<img src="<?php echo base_url('assets/images/21_konstruksi_botol.png') ?>" width="100%" alt="First slide">
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
												<a data-toggle="collapse" data-parent="#accordion2" href="#collapseEight">
													Konstruksi Bentuk Dasar 3 Dimensi
												</a>
											</h4>
										</div>
										<div id="collapseEight" class="panel-collapse collapse">
											<div class="box-body">
												<video controls width="100%" controlsList="nodownload"><source src="<?php echo base_url('assets/videos/bidangdasar/menggambar-3-dimensi.mp4') ?>" type="video/mp4">
												</video>
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


