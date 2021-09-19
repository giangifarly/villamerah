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
							<li><a href="#tab_1" data-toggle="disabled">Teori dan Contoh Gambar</a></li>
							<li class="active"><a href="#tab_2" data-toggle="tab">Video</a></li>
						</ul>
						<div class="tab-content">
							<div class="tab-pane" id="tab_1">

								<div class="box-group" id="accordion">
									<!-- we are adding the .panel class so bootstrap.js collapse plugin detects it -->


									<div class="panel box box-primary">
										<div class="box-header with-border">
											<h4 class="box-title">
												<a data-toggle="collapse" data-parent="#accordion" href="#collapse1">
													<?php echo "$subjudul_1";?>
												</a>
											</h4>
										</div>
										<div id="collapse1" class="panel-collapse collapse">
											<div class="box-body">
												Tidak ada data.

											</div>
										</div>
									</div>


									<div class="panel box box-primary">
										<div class="box-header with-border">
											<h4 class="box-title">
												<a data-toggle="collapse" data-parent="#accordion" href="#collapse2">
													<?php echo "$subjudul_2";?>
												</a>
											</h4>
										</div>
										<div id="collapse2" class="panel-collapse collapse">
											<div class="box-body">
												Tidak ada data.
											</div>
										</div>
									</div>


									<div class="panel box box-primary">
										<div class="box-header with-border">
											<h4 class="box-title">
												<a data-toggle="collapse" data-parent="#accordion" href="#collapse3">
													<?php echo "$subjudul_3";?>
												</a>
											</h4>
										</div>
										<div id="collapse3" class="panel-collapse collapse">
											<div class="box-body">
												Tidak ada data.
											</div>
										</div>
									</div>

									<div class="panel box box-primary">
										<div class="box-header with-border">
											<h4 class="box-title">
												<a data-toggle="collapse" data-parent="#accordion" href="#collapse4">
													<?php echo "$subjudul_4";?>
												</a>
											</h4>
										</div>
										<div id="collapse4" class="panel-collapse collapse">
											<div class="box-body">
												Tidak ada data.
											</div>
										</div>
									</div>

									<div class="panel box box-primary">
										<div class="box-header with-border">
											<h4 class="box-title">
												<a data-toggle="collapse" data-parent="#accordion" href="#collapse5">
													<?php echo "$subjudul_5";?>
												</a>
											</h4>
										</div>
										<div id="collapse5" class="panel-collapse collapse">
											<div class="box-body">
												Tidak ada data.
											</div>
										</div>
									</div>

									
								</div>


							</div>
							<!-- /.tab-pane -->


							<!--  Tab Ke 2  -->

							<div class="tab-pane active" id="tab_2">



								<div class="box-group" id="accordion2">
									<!-- we are adding the .panel class so bootstrap.js collapse plugin detects it -->

									<div class="panel box box-primary">
										<div class="box-header with-border">
											<h4 class="box-title">
												<a data-toggle="collapse" data-parent="#accordion2" href="#collapseVideo1">
													<?php echo "$subjudul_1";?>
												</a>
											</h4>
										</div>
										<div id="collapseVideo1" class="panel-collapse collapse">
											<div class="box-body">
												<video controls width="100%" controlsList="nodownload"><source src="<?php echo base_url('assets/videos/anatomi/1-pengenalan.mp4') ?>" type="video/mp4">
												</video>
											</div>
										</div>
									</div>

									<div class="panel box box-primary">
										<div class="box-header with-border">
											<h4 class="box-title">
												<a data-toggle="collapse" data-parent="#accordion2" href="#collapseVideo2">
													<?php echo "$subjudul_2";?>
												</a>
											</h4>
										</div>
										<div id="collapseVideo2" class="panel-collapse collapse">
											<div class="box-body">
												<video controls width="100%" controlsList="nodownload"><source src="<?php echo base_url('assets/videos/anatomi/2-wajah.mp4') ?>" type="video/mp4">
												</video>
												<video controls width="100%" controlsList="nodownload"><source src="<?php echo base_url('assets/videos/anatomi/2-wajah-2.mp4') ?>" type="video/mp4">
												</video>

											</div>
										</div>
									</div>

									<div class="panel box box-primary">
										<div class="box-header with-border">
											<h4 class="box-title">
												<a data-toggle="collapse" data-parent="#accordion2" href="#collapseVideo3">
													<?php echo "$subjudul_3";?>
												</a>
											</h4>
										</div>
										<div id="collapseVideo3" class="panel-collapse collapse">
											<div class="box-body">
												<video controls width="100%" controlsList="nodownload"><source src="<?php echo base_url('assets/videos/anatomi/3-ekspresi-wajah.mp4') ?>" type="video/mp4">
												</video>
											</div>
										</div>
									</div>

									<div class="panel box box-primary">
										<div class="box-header with-border">
											<h4 class="box-title">
												<a data-toggle="collapse" data-parent="#accordion2" href="#collapseVideo4">
													<?php echo "$subjudul_4";?>
												</a>
											</h4>
										</div>
										<div id="collapseVideo4" class="panel-collapse collapse">
											<div class="box-body">
												<video controls width="100%" controlsList="nodownload"><source src="<?php echo base_url('assets/videos/anatomi/4-tangan-dan-kaki.mp4') ?>" type="video/mp4">
												</video>
											</div>
										</div>
									</div>

									<div class="panel box box-primary">
										<div class="box-header with-border">
											<h4 class="box-title">
												<a data-toggle="collapse" data-parent="#accordion2" href="#collapseVideo5">
													<?php echo "$subjudul_5";?>
												</a>
											</h4>
										</div>
										<div id="collapseVideo5" class="panel-collapse collapse">
											<div class="box-body">
												<video controls width="100%" controlsList="nodownload"><source src="<?php echo base_url('assets/videos/anatomi/5-gesture.mp4') ?>" type="video/mp4">
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

