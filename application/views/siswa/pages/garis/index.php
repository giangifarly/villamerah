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
													Mengenal Garis dan Tekanan
												</a>
											</h4>
										</div>
										<div id="collapseOne" class="panel-collapse collapse in">
											<div class="box-body">
												Tidak ada data.
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
													Mengenal Garis dan Tekanan
												</a>
											</h4>
										</div>
										<div id="collapseThree" class="panel-collapse collapse in">
											<div class="box-body">
												<video controls width="100%" controlsList="nodownload"><source src="<?php echo base_url('assets/videos/garis/garis.mp4') ?>" type="video/mp4">
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

