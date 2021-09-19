<title><?php echo $judul; ?> | Villa Merah Admin</title>

<div class="content-wrapper">
	<section class="content-header">
		<h1>
			<?php echo $judul; ?>
			<small>Villa Merah</small>
		</h1>
	</section>
	<section class="content container-fluid">
		<div class="box">
			<!-- /.box-header -->
			<div class="box-body">
				<div class="row">
					<?php echo form_open("admin/tambah_event"); ?>

					<div class="col-sm-6">
						<div class="form-group has-feedback">
							<label for="nama_event">Nama Acara</label>
							<input type="text" class="form-control" name="nama_event" id="nama_event" required>
						</div>

						<div class="form-group has-feedback">
							<label for="tanggal">Tanggal Acara</label>

							<div class="input-group date" data-provide="datepicker">
								<div class="input-group-addon">
									<i class="fa fa-calendar"></i>
								</div>
								<input type="text" class="form-control pull-right" id="datepicker" name="tanggal">
							</div>
							<!-- /.input group -->
						</div>
					</div>

				</div>
				<div class="row">
					<div class="col-sm-2">
						<div class="form-group has-feedback">
							<button type="submit" class="btn btn-success btn-block btn-flat">Tambah Sekolah</button>
						</div>
					</div>
				</div>
				<?php echo form_close(); ?>
			</div>
			<!-- /.box-body -->
		</div>
	</section>
</div>
<script>
	//Date picker
	$('#datepicker').datepicker({
		autoclose: true
	})
</script>
