<!DOCTYPE html>
<html>

<head>


	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">

	<link rel="icon" type="image/png" href="<?php echo base_url() ?>assets/images/1.png">

	<link rel="stylesheet" href="<?php echo base_url() ?>assets/bower_components/bootstrap/dist/css/bootstrap.min.css">
	<link rel="stylesheet" href="<?php echo base_url() ?>assets/bower_components/font-awesome/css/font-awesome.min.css">
	<link rel="stylesheet" href="<?php echo base_url() ?>assets/bower_components/Ionicons/css/ionicons.min.css">
	<link rel="stylesheet" href="<?php echo base_url() ?>assets/dist/css/AdminLTE.min.css">
	<link rel="stylesheet" href="<?php echo base_url() ?>assets/dist/css/skins/_all-skins.min.css">
	<link rel="stylesheet" href="<?php echo base_url() ?>assets/users/css/style.css">
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">

</head>

<body class="hold-transition skin-black layout-top-nav fixed">

	<div class="wrapper">

		<header class="main-header">

			<nav class="navbar navbar-static-top">

				<div class="navbar-header">
					<a href="<?php echo site_url('siswa') ?>" class="navbar-brand"><b>Villa</b>Merah</a>
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse">
						<i class="fa fa-bars"></i>
					</button>
				</div>

				<div class="collapse navbar-collapse pull-right" id="navbar-collapse">
					<ul class="nav navbar-nav">
						<li><a href="<?php echo site_url('siswa') ?>">Beranda</a></li>
						<li><a href="<?php echo site_url('siswa/profil') ?>"><b><?php echo $this->session->userdata('username'); ?></b></a></li>
						<li><a href="<?php echo site_url('siswa/logout') ?>">Keluar</a></li>
					</ul>
				</div>

				<div class="collapse navbar-collapse pull-left" id="navbar-collapse">
					<ul class="nav navbar-nav">
						<li>
							<a href="#" class="dropdown-toggle" data-toggle="dropdown">FSRD <span class="caret"></span></a>
							<ul class="dropdown-menu" role="menu">

								<li><a href="<?php echo site_url('siswa/persiapan_sebelum_menggambar') ?>">Persiapan Sebelum Menggambar</a></li>
								<li><a href="<?php echo site_url('siswa/garis') ?>">Garis</a></li>

								<li class="divider"></li>
								<li class="dropdown-header">Bidang Dasar</li>
								<li><a href="<?php echo site_url('siswa/bidang_dasar_2_dimensi') ?>">2 Dimensi</a></li>
								<li><a href="<?php echo site_url('siswa/bidang_dasar_3_dimensi') ?>">3 Dimensi</a></li>
								<li class="divider"></li>

								<li><a href="<?php echo site_url('siswa/arsir') ?>">Arsir</a></li>

								<li><a href="<?php echo site_url('siswa/perspektif') ?>">Perspektif, Interior dan Eksterior</a></li>

								<li><a href="<?php echo site_url('siswa/anatomi') ?>">Anatomi</a></li>

								<li><a href="<?php echo site_url('siswa/kendaraan') ?>">Kendaraan</a></li>

								<li><a href="<?php echo site_url('siswa/pohon') ?>">Pohon</a></li>

								<li><a href="<?php echo site_url('siswa/suasana') ?>">Suasana</a></li>

							</ul>
						</li>
					</ul>
				</div>

			</nav>
		</header>
