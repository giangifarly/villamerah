<title>Siswa Jakarta Selatan | Villa Merah Admin</title>

<div class="content-wrapper">
	<section class="content-header">
		<h1>
			Siswa Jakarta Selatan
			<small>Villa Merah</small>
		</h1>
	</section>
	<section class="content container-fluid">
		<div class="box">
			<div class="box-header">
				<h3 class="box-title">Daftar Akun Aktif</h3>
			</div>
			<!-- /.box-header -->
			<div class="box-body">
				<table id="example1" class="table table-bordered table-striped">
					<thead>
						<tr>
							<th>No</th>
							<th>Nama Lengkap</th>
							<th>Username</th>
							<th>Email</th>
							<th>Jenis Kelamin</th>
							<th>Tahun Ajaran</th>
						</tr>
					</thead>
					<tbody>
						<?php
						$nomor = 1;
						foreach ($dataSiswaJaksel as $s){
							echo "<tr>
							<td>$nomor</td>
							<td>".anchor('Admin/edit_akun/'.$s->id_user, $s->nama)."</td>
							<td>$s->username</td>
							<td>$s->email</td>
							<td>$s->jenis_kelamin</td>
							<td>$s->tahun_ajaran</td>
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


