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
			<div class="box">
				<div class="box-body">
					<div class="row">
						<div class="col-md-6">
							<div class="alert alert-warning alert-dismissible">
								<h4><?php echo "$judul"; ?></h4>
								PESAN DAPAT DITULIS DISINI
							</div>
						</div>
					</div>
					<a href="<?php echo site_url('siswa/sederhana') ?>" class="btn btn-lg btn-default btn-social btn-block"><i class="fa fa-book"></i> Gambar Suasana Sederhana</a>
					<a href="<?php echo site_url('siswa/imajinasi') ?>" class="btn btn-lg btn-default btn-social btn-block"><i class="fa fa-book"></i> Gambar Suasana Imajinasi</a>
				</div>
			</div>
		</section>
	</div>
</div>