<title><?php echo "$judul"; ?> | Villa Merah</title>
<div class="content-wrapper">
	<div class="container">
		<section class="content-header">
			<h1><?php echo "$judul"; ?></h1>
			<ol class="breadcrumb">
				<li><a href="<?php echo site_url('siswa') ?>">Beranda</a></li>
				<li><a href="<?php echo site_url('siswa/fsrd1') ?>">Persiapan Sebelum Menggambar</a></li>
				<li class="active"><?php echo "$judul"; ?></li>
			</ol>
		</section>
		<section class="content">
			<div class="row">

				<div class="col-md-3">
					<!-- /.box -->
					<div class="row">
						<div class="box box-default">
							<div class="box-header with-border">
								<h3 class="box-title">Sub Materi Lainnya</h3>
							</div>
							<!-- /.box-header -->
							<div class="box-body">
								<ul class="list-unstyled">
									<li><a href="<?php echo site_url('siswa/peralatan_untuk_menggambar') ?>">Peralatan Untuk Menggambar</a></li>
									<li><a href="<?php echo site_url('siswa/posisi_tangan') ?>">Posisi Tangan saat Memegang Pensil</a></li>
								</ul>
							</div>
							<!-- /.box-body -->
						</div>
						<!-- /.box -->
					</div>

					<?php $this->load->view('siswa/config/sidebar-materi') ?>

				</div>

				<!-- ./col -->
				<div class="col-md-9">
					<div class="nav-tabs-custom">
						<ul class="nav nav-tabs">
							<li class="active"><a href="#tab_1" data-toggle="tab">Teori dan Contoh Gambar</a></li>
							<li><a href="#tab_2" data-toggle="tab">Video</a></li>
						</ul>
						<div class="tab-content">
							<div class="tab-pane active" id="tab_1">
								<b>Kertas</b>

								<p>
									Kertas mempunyai berbagai macam ukuran mulai dari A0-A6, ukuran kertas yang paling besar adalah A0 dan yang paling kecil A6, tetapi biasanya kertas gambar yang dapat Anda temukan ukuran A2-A5. Ketebalan kertas juga harus diperhatikan, ukurannya ada yang 70 gr-300 gr. Paling tipis ukuran 70 gr dan paling tebal ukuran 300 gr. Pada umumnya Anda dapat menemukan ketebalan kertas ukuran 70 gr-120 gr. Semakin tebal kertas gambar yang Anda gunakan semakin baik.
								</p>
								<p>
									Warna kertas pun bermacam-macam, Anda juga dapat mencoba menggunakan berbagai macam warna kertas.
									Memilih kertas gambar sangatlah penting tetapi jika memang Anda memiliki kesempatan untuk membeli kertas gambar impor maka sebaiknya Anda mencobanya, dan lihat perbedaan kualitas gambar yang dihasilkan.
								</p>

								<b>Pensil</b>
								<p>Pilihlah pensil B dan 2B untuk membuat sketsa, kemudian untuk mengarsir gunakanlah pensil 3B sampai 6B</p>
								<p><img src="<?php echo base_url('assets/images/pencil_grades1.png') ?>" width="100%"></p>

								<b>Rautan Pensil</b>
								<p>
									Rautan pensil bisa menggunakan pisau cutter, rautan biasa, dan rautan mekanik. Pisau Cutter lebih direkomndasikan karena ketajaman pensil bisa dihasilkan sesuai dengan kebutuhan. Kadang ada rautan pensil biasa yang justru ketika Anda raut menyebabkan pensil tersebut cepat patah. Menghasilkan ketajaman pensil tergantung dari kebutuhan Anda apakah akan membuat garis tipis dan garis tebal. Pensil ukuran lunak dan keras juga menghasilkan ketajaman yang berbeda.
								</p>

								<b>Penghapus</b>
								<p>
									Penghapus juga bermacam-macam jenisnya mulai dari berbeda ukuran, warna, dan merknya. Sebaiknya Anda memilih penghapus yang memang diproduksi untuk menggambar dan menulis. Biasanya penghapus ini bewarna putih dan hitam. Sebagai pemula kadang Anda terlalu takut untuk melakukan kesalahan sehingga Anda sering menggunakan penghapus. Sebaiknya hindarkan dahulu terlalu sering memakai penghapus. Jika ada garis yang Anda buat tidak sesuai yang diinginkan biarkan saja. Penghapus nantinya akan sangat membantu dalam membuat daerah-daerah terang. Jika ada bagian arsir gelap yang tidak diinginkan maka sangat sulit untuk dihapus, walaupun hilang kadang masih terlihat bekasnya
								</p>

								<p>
									Gambar yang menggunakan media pensil biasanya akan sangat cepat pudar jika tidak segera dilindungi. Ada beberapa cara agar gambar tetap terlindungi yaitu menyemprotkan gambar Anda dengan fixative. Hanya harga satu botol fixative cukup mahal sebagai pilihan lain Anda dapat membeli pylox warna transparan. Cara menyemprotkan gambar dengan fixative atau pylox yaitu semprotlah kertas dalam keadaan posisi berdiri, lakukan dari jarak jauh min 20 cm. Semprotlah tipis-tipis, kemudian tunggu sampai kering dan lakukan berulang kali.
								</p>

								<p>
									Karya yang menggunakan media kertas juga harus dirawat karena mudah terlipat, robek, warna kertas menjadi kuning dan berjamur. Simpanlah karya Anda dalam ruangan yang suhunya tidak terlalu lembab dan bebas dari debu.
								</p>

							</div>
							<!-- /.tab-pane -->
			
							<div class="tab-pane" id="tab_2">
								<video controls width="100%" controlsList="nodownload"><source src="<?php echo base_url('assets/videos/persiapan-menggambar/peralatan-menggambar.mp4') ?>" type="video/mp4">
								</video>
							</div>
							<!-- /.tab-pane -->
						</div>
						<!-- /.tab-content -->
					</div>
					<!-- /.box -->
				</div>
			</div>
		</section>
	</div>
</div>

