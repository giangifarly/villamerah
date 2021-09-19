<title><?php echo "$judul"; ?> | Villa Merah</title>
<div class="content-wrapper">
	<div class="container">
		<section class="content-header">
			<h1><?php echo "$judul"; ?></h1>
			<ol class="breadcrumb">
				<li><a href="<?php echo site_url('siswa') ?>">Beranda</a></li>
				<li><a href="<?php echo site_url('siswa/fsrd2') ?>">Garis</a></li>
				<li class="active"><?php echo "$judul"; ?></li>
			</ol>
		</section>
		<section class="content">
			<div class="row">

				<div class="col-md-3">
					<!-- /.box -->

					<?php $this->load->view('siswa/config/sidebar-materi') ?>

				</div>

				<!-- ./col -->
				<div class="col-md-9">
					<div class="nav-tabs-custom">
						<ul class="nav nav-tabs">
							<li><a href="#tab_1" data-toggle="tab">Teori dan Contoh Gambar</a></li>
							<li class="active"><a href="#tab_2" data-toggle="tab">Video</a></li>
						</ul>
						<div class="tab-content">
							<div class="tab-pane" id="tab_1">
								Tidak ada data.
							</div>
							<!-- /.tab-pane -->
							<div class="tab-pane active" id="tab_2">
								<video controls width="100%" controlsList="nodownload"><source src="<?php echo base_url('assets/videos/garis/garis.mp4') ?>" type="video/mp4">
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

