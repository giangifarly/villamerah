<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/stylesheet.css') ?>">
	<link rel="icon" type="image/png" href="<?php echo base_url() ?>assets/images/1.png">

	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
	
	<link rel="stylesheet" href="<?php echo base_url('assets/bower_components') ?>/bootstrap/dist/css/bootstrap.min.css">
	<link rel="stylesheet" href="<?php echo base_url('assets/bower_components') ?>/font-awesome/css/font-awesome.min.css">
	<link rel="stylesheet" href="<?php echo base_url('assets/bower_components') ?>/Ionicons/css/ionicons.min.css">
	<link rel="stylesheet" href="<?php echo base_url('assets/dist') ?>/css/AdminLTE.min.css">
	<link rel="stylesheet" href="<?php echo base_url('assets/bower_components') ?>/bootstrap-daterangepicker/daterangepicker.css">
	<link rel="stylesheet" href="<?php echo base_url('assets/bower_components') ?>/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css">

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="<?php echo base_url('assets/dist') ?>/css/skins/skin-blue.min.css">
	<!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->
	<script src="<?php echo base_url("assets/js/jquery.min.js"); ?>"></script>
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<!--
|---------------------------------------------------------|
| SKINS         | skin-blue                               |
|               | skin-black                              |
|               | skin-purple                             |
|               | skin-yellow                             |
|               | skin-red                                |
|               | skin-green                              |
|---------------------------------------------------------|
|LAYOUT OPTIONS | fixed                                   |
|               | layout-boxed                            |
|               | layout-top-nav                          |
|               | sidebar-collapse                        |
|               | sidebar-mini                            |
|---------------------------------------------------------|
-->

<body class="hold-transition skin-blue sidebar-mini fixed">
	<div class="wrapper">

		<header class="main-header">

			<a href="<?php echo site_url('admin') ?>" class="logo">
				<span class="logo-mini"><b>VM</b>A</span>
				<span class="logo-lg"><b>VillaMerah</b>Admin</span>
			</a>

			<nav class="navbar navbar-static-top" role="navigation">
				<a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
					<span class="sr-only">Toggle navigation</span>
				</a>
				<div class="navbar-custom-menu">
					<ul class="nav navbar-nav">
						<li class="dropdown user user-menu">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown">
								<span class="hidden-xs"><?php echo $this->session->userdata("username"); ?></span>
							</a>
							<ul class="dropdown-menu">
								<li class="user-header">
									<p>
										<?php echo $this->session->userdata("username"); ?>
										<small>Member since Nov. 2012</small>
									</p>
								</li>
								<li class="user-footer">
									<div class="pull-right">
										<a href="<?php echo site_url('admin/logout'); ?>" class="btn btn-default btn-flat">Sign out</a>
									</div>
								</li>
							</ul>
						</li>
					</ul>
				</div>
			</nav>
		</header>
		<aside class="main-sidebar">

			<section class="sidebar">
				<ul class="sidebar-menu" data-widget="tree">
					<li class="header">Copyright &copy; 2018 Villa Merah</li>
					<li><a href="<?php echo site_url('admin'); ?>"><i class="fa fa-dashboard"></i> <span>Dashboard</span></a></li>
					<li><a href="<?php echo site_url('admin/tambah_pengguna'); ?>"><i class="fa fa-user-plus"></i> <span>Tambah Pengguna</span></a></li>
					<li><a href="<?php echo site_url('admin/siswa'); ?>"><i class="fa fa-group"></i> <span>Daftar Siswa</span></a></li>

					<li><a href="<?php echo site_url('admin/pendingsiswa'); ?>"><i class="fa fa-user"></i> <span>Siswa Pending</span></a></li>
					<li class="treeview">
						<a href="#"><i class="fa fa-gear"></i> <span>Preferensi</span>
							<span class="pull-right-container">
								<i class="fa fa-angle-left pull-right"></i>
							</span>
						</a>

						<ul class="treeview-menu"> 
							<li><a href="#">Tahun Ajaran</a></li>
							<li><a href="#">List Program</a></li>
							<li><a href="#">List Kelas</a></li>
						</ul>
					</li>
					<li class="header">Preferensi</li>
					<li><a href="<?= site_url('admin/kalender_akademik') ?>"><i class="fa fa-calendar"></i> Kalender Akademik</a></li>
					<li><a href="<?php echo site_url('admin/list_sekolah'); ?>"><i class="fa fa-building-o"></i> <span>List Sekolah</span></a></li>
					<li><a href="<?php echo site_url('admin/logout') ?>"><i class="fa fa-sign-out"></i> <span>Keluar</span></a></li>
				</ul>
			</section>
		</aside>
