<title>Profil | Villa Merah</title>
<div class="content-wrapper">
	<div class="container">
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
				<div class="col-md-3">
					<div class="box">
						<div class="box-body">
							<h3 class="box-title"><?php echo $this->session->userdata('name'); ?></h3>
							<a href="<?php echo site_url('siswa/profil') ?>"><button type="button" class="btn btn-danger btn-block btn-flat">Profil</button></a>
							<a href="<?php echo site_url('siswa/ubahpassword') ?>"><button type="button" class="btn btn-default btn-block btn-flat">Ubah Password</button></a>
						</div>
					</div>
					<!-- /.box -->
				</div>
				<!-- /.col -->

				<div class="col-md-9">
					<div class="box box-default">
						<!-- /.box-header -->
						<div class="box-body">
							<div class="box-header with-border">
								<h3 class="box-title">Profil</h3>
								<div class="box-tools pull-right">
									<a href="<?php echo site_url('siswa/edit_profil') ?>">
										<button type="submit" class="btn btn-info">Edit Profil</button>
									</a>
								</div>
							</div>
							<div class="box-body no-padding">

								<?php foreach ($data_siswa as $row) { ?>

								<table class="table table-condensed">
									<tr>
										<td>User ID</td>
										<td>
											<input type="text" class="form-control" name="id_user" value="<?php echo $row->id_user; ?>" disabled>
										</td>
									</tr>
									<tr>
										<td>Username</td>
										<td>
											<input type="text" class="form-control" name="username" value="<?php echo $row->username; ?>" disabled>
										</td>
									</tr>
									<tr>
										<td>Nama Lengkap<font color="#ff0000">*</font></td>
										<td>
											<input type="text" class="form-control" name="nama" value="<?php echo $row->nama; ?>" disabled>
										</td>
									</tr>
									<tr>
										<td>Email<font color="#ff0000">*</font></td>
										<td>
											<input type="text" class="form-control" name="email" value="<?php echo $row->email; ?>" disabled>
										</td>
									</tr>
									<tr>
										<td>Jenis Kelamin<font color="#ff0000">*</font></td>
										<td>
											<input type="text" class="form-control" name="jeniskelamin" value="<?php echo $row->jenis_kelamin; ?>" disabled>
										</td>
									</tr>
									<tr>
										<td>Tempat Lahir<font color="#ff0000">*</font></td>
										<td>
											<input type="text" class="form-control" name="tempatlahir" value="<?php echo $row->tempat_lahir; ?>" disabled>
										</td>
									</tr>
									<tr>
										<td>Tanggal Lahir<font color="#ff0000">*</font></td>
										<td>


											<div class="input-group">
												<div class="input-group-addon">
													<i class="fa fa-calendar"></i>
												</div>
												<input type="text" class="form-control" data-inputmask="'alias': 'dd/mm/yyyy'" value="<?php echo $row->tgl_lahir; ?>" data-mask disabled>
											</div>
										</td>
									</tr>
									<tr>
										<td>Alamat<font color="#ff0000">*</font></td>
										<td>
											<input type="text" class="form-control" name="alamat" value="<?php echo $row->alamat; ?>" disabled>
										</td>
									</tr>
								</table>

								<?php } ?>

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
</div>




