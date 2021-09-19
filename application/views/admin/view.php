<table id="example1" class="table table-bordered table-striped">
	<thead>
		<tr>
			<th>No</th>
			<th>Username</th>
			<th>Nama Lengkap</th>
			<th>Email</th>
			<th>Jenis Kelamin</th>
			<th>Tahun Ajaran</th>
			<th colspan="2">Option Tambahan</th>
		</tr>
	</thead>
	<tbody>
		<?php
		$nomor = 1;

		if (!empty($user_data)) {
			foreach ($user_data as $s) {
				echo "<tr>
					<td>$nomor</td>
					<td>$s->username</td>
					<td>$s->nama</td>
					<td>$s->email</td>
					<td>$s->jenis_kelamin</td>
					<td>$s->tahun_ajaran</td>
					<td>" . anchor('admin/edit_akun/' . $s->id_user, 'Edit') . "</td>
					<td><a href='#'>Hapus</a></td>
				</tr>";
				$nomor++;
			}
		}else {
			echo "<tr><td colspan='7'>Data tidak ada</td></tr>";
		}
		?>
	</tbody>
	<tfoot>
		<tr>

		</tr>
	</tfoot>
</table>
