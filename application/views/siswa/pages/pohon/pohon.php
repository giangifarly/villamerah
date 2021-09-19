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
								<p>
									Pohon perdu merupakan Tumbuhan berkayu yang bercabang-cabang, tumbuh rendah dekat dengan permukaan tanah, dan tidak mempunyai batang yang tegak. Tidak berbatang besar, kadang kadang berdaun lebar, dan ada jugaa jenis rumput-rumputan.
								</p>
								<p>
									Contoh pohon perdu :
									<ol>
										<li>Putri Malu</li>
										<li>Talas</li>
										<li>Sintrong</li>
										<li>Pohon Salak</li>
									</ol>
								</p>
							</div>
						</div>
					</div>
					<a href="<?php echo site_url('siswa/pohon_besar') ?>" class="btn btn-lg btn-default btn-social btn-block"><i class="fa fa-book"></i> Pohon Besar</a>
					  <a href="<?php echo site_url('siswa/pohon_perdu') ?>" class="btn btn-lg btn-default btn-social btn-block"><i class="fa fa-book"></i> Pohon Perdu</a>
				</div>
			</div>
		</section>
	</div>
</div>