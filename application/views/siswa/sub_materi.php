<title><?php echo "$judul"; ?> | Villa Merah</title>
<div class="content-wrapper">
	<section class="content">
		<div class="row">
			<div class="box box-solid box-video">

				<div class="box-header">
					<h3 class="title-materi"><?php echo "$judul"; ?></h3>
					<ol class="breadcrumb breadcrumb-materi">
						<li><a href="<?php echo site_url('siswa'); ?>">Beranda</a></li>
						<li><a href="<?php echo site_url(); ?>siswa/<?php echo $link_judul_materi; ?>"><?php echo $judul_materi; ?></a></li>
						<li class="active"><?php echo "$judul"; ?></li>
					</ol>
				</div>

				<div class="box-body">
					<div class="video-player-container">
						<div class="viewport">
							<div class="video-player">
								<video controls width='100%' controlsList='nodownload'>
									<?php echo $video; ?>
								</video>
							</div>
							<div class="playlist">
								<?php echo $list_sub_materi; ?>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="container">
			<div class="content">
				<div class="row">
					<div class="col-md-8">
						<div class="box box-solid">
							<div class="box-body">
								<?php echo $materi; ?>
							</div>
						</div>
					</div>
					<div class="col-md-3">
						<?php $this->load->view('siswa/config/sidebar-materi') ?>
					</div>
				</div>
			</div>
		</div>

	</section>
</div>
