<title><?php echo "$judul"; ?> | Villa Merah</title>
<div class="content-wrapper">
	<section class="content-header">
		<h1><?php echo "$judul"; ?><small>List Materi</small></h3>
			<ol class="breadcrumb">
				<li><a href="<?php echo site_url('siswa') ?>">Beranda</a></li>
				<li class="active"><?php echo "$judul"; ?></li>
			</ol>
	</section>
	<section class="content">
		<div class="row">
			<div class="col-md-9">
				<div class="row">
					<?php echo $sub_judul_1; ?>
				</div>
				<div class="row">
					<?php echo $sub_judul_2; ?>
				</div>
				<div class="row">
					<?php echo $sub_judul_3; ?>
				</div>
			</div>
			<div class="col-md-3">
				<?php $this->load->view('siswa/config/sidebar-materi') ?>
			</div>
		</div>
	</section>
</div>
