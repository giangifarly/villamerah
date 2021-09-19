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
			<div class="box-header">
				<h3 class="box-title">Daftar Akun yang Masih Menunggu Konfirmasi Admin</h3>
				<div class="box-tools">
					<a href="<?= site_url('admin/tambah_event'); ?>" class="btn btn-primary">Tambah Event</a>
				</div>
			</div>
			<!-- /.box-header -->
			<div class="box-body">
				<table id="example1" class="table table-bordered table-striped">
					<thead>
						<tr>
							<th>No</th>
							<th>Nama Acara</th>
							<th>Tanggal Acara</th>
							<th colspan="2">Option Tambahan</th>
						</tr>
					</thead>
					<tbody>
						<?php
						$output = '';
						$nomor = 1;
						foreach ($kalender_akademik as $s){
							echo "<tr>
							<td>$nomor</td>
							<td>$s->nama_event</td>
							<td>". longdate_indo("$s->tanggal") ."</td>
							<td>".anchor('admin/edit_event/'.$s->id_event,'Ubah Acara')."</td>
							<td>". anchor('admin/hapus_event/' . $s->id_event, 'Hapus') ."</td>
							</tr>";
							$nomor++;
						}
						?>
					</tbody>
					<tfoot>
						<tr>

						</tr>
					</tfoot>
				</table>
			</div>
			<!-- /.box-body -->
		</div>
	</section>
</div>


