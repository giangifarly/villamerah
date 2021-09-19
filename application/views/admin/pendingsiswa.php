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
			</div>
			<!-- /.box-header -->
			<div class="box-body">
				<table id="example1" class="table table-bordered table-striped">
					<thead>
						<tr>
							<th>No</th>
							<th>Username</th>
							<th>Nama Lengkap</th>
							<th>Email</th>
							<th colspan="2">Option Tambahan</th>
						</tr>
					</thead>
					<tbody>
						<?php
						$nomor = 1;
						foreach ($pending_siswa as $s){
							echo "<tr>
							<td>$nomor</td>
							<td>$s->username</td>
							<td>$s->nama</td>
							<td>$s->email</td>
							<td>".anchor('Admin/active_account/'.$s->id_user,'Aktifkan Akun')."</td>
							<td><a href='#'>Hapus</a></td>
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


