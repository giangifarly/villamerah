<title>Profil | Villa Merah</title>

<div class="content-wrapper">
	<section class="content-header">
		<h1>
			Villa Merah
			<small>Bimbel Gambar dan Bimbel Arsiterktur ITB</small>
		</h1>
		<ol class="breadcrumb">
			<li><a href="<?php echo site_url('siswa') ?>"><i class="fa fa-home"></i> Home</a></li>
			<li class="active">Profil</li>
		</ol>
	</section>
	<section class="content">
		<h2 class="page-header fa fa-user"> Profil Saya</h2>
		<div class="row">
			<div class="col-md-4">
				<div class="box">
					<div class="box-body">
						<h3 class="box-title"><?php echo $this->session->userdata('name');?></h3>
						<a href="<?php echo site_url('siswa/profil') ?>"><button type="button" class="btn btn-default btn-block btn-flat">Profil</button></a>
						<a href="<?php echo site_url('siswa/jenjangsekolah') ?>"><button type="button" class="btn btn-danger btn-block btn-flat">Jenjang Sekolah</button></a>
						<a href="<?php echo site_url('siswa/ubahpassword') ?>"><button type="button" class="btn btn-default btn-block btn-flat">Ubah Password</button></a>
					</div>
				</div>
				<!-- /.box -->
			</div>
			<!-- /.col -->

			<div class="col-md-6">
				<div class="box box-default">
					<!-- /.box-header -->
					<div class="box-body">
						<div class="box-header with-border">
							<h3 class="box-title">Profil Saya</h3>
							<div class="box-tools pull-right">
								<button class="btn btn-default">
									<a href="#">Edit</a>
								</button>
							</div>
						</div>

						<!-- /.box-header -->

						<div class="box-body no-padding">
							<table class="table table-condensed">
								<tr>
									<td>User ID</td>
									<td>
										<font color="#bcbcbc">
											#<?php echo $this->session->userdata('id_user') ?>
										</font>
									</td>
								</tr>
								
							</table>
						</div>
					</div>
					<!-- /.box-body -->
				</div>
				<!-- /.box -->
			</div>
			<!-- /.col -->
		</div> 
	</section>
</div>


