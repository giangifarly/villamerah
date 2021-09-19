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
						<h3 class="box-title"><?php echo $this->session->userdata('name'); ?></h3>
						<a href="<?php echo site_url('siswa/profil') ?>"><button type="button" class="btn btn-danger btn-block btn-flat">Profil</button></a>
						<a href="<?php echo site_url('siswa/jenjangsekolah') ?>"><button type="button" class="btn btn-default btn-block btn-flat">Jenjang Sekolah</button></a>
						<a href="<?php echo site_url('siswa/ubahpassword') ?>"><button type="button" class="btn btn-default btn-block btn-flat">Ubah Password</button></a>
					</div>
				</div>
				<!-- /.box -->
			</div>
			<!-- /.col -->

			<div class="col-md-6">
				<div class="box box-default">
					<!-- /.box-header -->
					<form action="<?php echo site_url('siswa/edit_profil') ?>" method="post">
						<div class="box-body">
							<div class="box-header with-border">
								<h3 class="box-title">Profil</h3>
								<div class="box-tools pull-right">
									<button type="submit" class="btn btn-info">Edit Profil</button>
								</div>
							</div>
							<div class="box-body no-padding">

								<table class="table table-condensed">
									<tr>
										<td>User ID</td>
										<td>
											<input type="text" class="form-control" name="id_user" value="<?php echo $this->session->userdata('id_user') ?>" disabled>
										</td>
									</tr>
									<tr>
										<td>Username</td>
										<td>
											<input type="text" class="form-control" name="username" value="<?php echo $this->session->userdata('username') ?>" disabled>
										</td>
									</tr>
									<tr>
										<td>Nama Lengkap<font color="#ff0000">*</font></td>
										<td>
											<input type="text" class="form-control" name="nama" value="<?php echo $this->session->userdata('name') ?>" >
										</td>
									</tr>
									<tr>
										<td>Email<font color="#ff0000">*</font></td>
										<td>
											<input type="text" class="form-control" name="email" value="<?php echo $this->session->userdata('email') ?>" >
										</td>
									</tr>
									<tr>
										<td>Jenis Kelamin<font color="#ff0000">*</font></td>
										<td>
											<div class="form-group">
												<label>
													<input type="radio" name="r1" class="minimal" checked> Laki-laki
												</label>
												<label>
													<input type="radio" name="r1" class="minimal"> Perempuan
												</label>
											</div>
										</td>
									</tr>
									<tr>
										<td>Tempat Lahir<font color="#ff0000">*</font></td>
										<td>
											<input type="text" class="form-control" name="tempatlahir" value="" placeholder="Tempat Lahir" >
										</td>
									</tr>
									<tr>
										<td>Tanggal Lahir<font color="#ff0000">*</font></td>
										<td>


											<div class="input-group">
												<div class="input-group-addon">
													<i class="fa fa-calendar"></i>
												</div>
												<input type="text" class="form-control" data-inputmask="'alias': 'dd/mm/yyyy'" data-mask >
											</div>
										</td>
									</tr>
									<tr>
										<td>Alamat<font color="#ff0000">*</font></td>
										<td>
											<input type="text" class="form-control" name="alamat" value="" >
										</td>
									</tr>
								</table>
								</form>
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

<script>
	$(function() {
		//Initialize Select2 Elements
		$('.select2').select2()

		//Datemask dd/mm/yyyy
		$('#datemask').inputmask('dd/mm/yyyy', {'placeholder': 'dd/mm/yyyy'})
		//Datemask2 mm/dd/yyyy
		$('#datemask2').inputmask('mm/dd/yyyy', {'placeholder': 'mm/dd/yyyy'})
		//Money Euro
		$('[data-mask]').inputmask()

		//Date range picker
		$('#reservation').daterangepicker()
		//Date range picker with time picker
		$('#reservationtime').daterangepicker({timePicker: true, timePickerIncrement: 30, format: 'MM/DD/YYYY h:mm A'})
		//Date range as a button
		$('#daterange-btn').daterangepicker(
				  {
					  ranges: {
						  'Today': [moment(), moment()],
						  'Yesterday': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
						  'Last 7 Days': [moment().subtract(6, 'days'), moment()],
						  'Last 30 Days': [moment().subtract(29, 'days'), moment()],
						  'This Month': [moment().startOf('month'), moment().endOf('month')],
						  'Last Month': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
					  },
					  startDate: moment().subtract(29, 'days'),
					  endDate: moment()
				  },
				  function(start, end) {
					  $('#daterange-btn span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'))
				  }
		)

		//Date picker
		$('#datepicker').datepicker({
			autoclose: true
		})

		//iCheck for checkbox and radio inputs
		$('input[type="checkbox"].minimal, input[type="radio"].minimal').iCheck({
			checkboxClass: 'icheckbox_minimal-blue',
			radioClass: 'iradio_minimal-blue'
		})
		//Red color scheme for iCheck
		$('input[type="checkbox"].minimal-red, input[type="radio"].minimal-red').iCheck({
			checkboxClass: 'icheckbox_minimal-red',
			radioClass: 'iradio_minimal-red'
		})
		//Flat red color scheme for iCheck
		$('input[type="checkbox"].flat-red, input[type="radio"].flat-red').iCheck({
			checkboxClass: 'icheckbox_flat-green',
			radioClass: 'iradio_flat-green'
		})

		//Colorpicker
		$('.my-colorpicker1').colorpicker()
		//color picker with addon
		$('.my-colorpicker2').colorpicker()

		//Timepicker
		$('.timepicker').timepicker({
			showInputs: false
		})
	})
</script>


