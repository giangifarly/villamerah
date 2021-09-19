
<?php

if (!defined('BASEPATH'))
	exit('No direct script access allowed');

class siswa extends MY_Controller
{

	public function __construct()
	{
		parent::__construct();
		
		if ($this->session->userdata('username') == "") {
			redirect('');
		} elseif ($this->session->userdata('level') == 1) {
			redirect('admin/admin');
		} elseif ($this->session->userdata('level') == 2) {
			redirect('guru/guru');
		}

		if ($this->session->userdata('status') != 1) {

			$this->session->sess_destroy();
			$this->session->set_flashdata('result_login', '<div class="alert alert-danger">Akun ada belum aktif!</div>');


			redirect('');
		}
	}

	public function index()
	{
		$this->render_page_siswa('siswa/home');
	}

	/* ================================= PAGES ================================= */

	/* ========= PERSIAPAN SEBELUM MENGGAMBAR ========== */
	function persiapan_sebelum_menggambar()
	{
		$link1 = site_url('siswa/peralatan_untuk_menggambar');
		$link2 = site_url('siswa/posisi_tangan');

		$foto1 = base_url('assets/images/pencil_grades1.png');
		$foto2 = base_url('assets/images/1_grip_a_pencil.png');

		$judul1 = '#1 Peralatan Untuk Menggambar';
		$judul2 = '#2 Posisi Tangan saat Memegang Pensil';

		$data = array(
			'judul' 			=> 'Persiapan Sebelum Menggambar',

			'sub_judul_1'			=> "<a href='$link1'>
			<div class='col-md-3'>
				<div class='box box-danger'>

					<div class='box-header'>
						<div class='box-title'>$judul1</div>
					</div>

					<div class='box-body'>
						<img src='$foto1' width=100%>
					</div>

					<div class='box-footer'>
						Lihat Selengkapnya
					</div>

				</div>
			</div>
		</a>

		<a href='$link2'>
			<div class='col-md-3'>
				<div class='box box-danger'>

					<div class='box-header'>
						<div class='box-title'>$judul2</div>
					</div>

					<div class='box-body'>
					<img src='$foto2' width='100%'>
					</div>

					<div class='box-footer'>
						Lihat Selengkapnya
					</div>

				</div>
			</div>
		</a>",

		'sub_judul_2' => '',
		'sub_judul_3' => ""
		);
		

		//---- Load Menu
		$this->render_page_siswa('siswa/materi', $data);
	}

	function peralatan_untuk_menggambar()
	{
		$gambar1	= "<img src=" . base_url('assets/images/pencil_grades1.png') . " width=100%>";

		$materi1	= anchor('siswa/peralatan_untuk_menggambar', '1. Peralatan Untuk Menggambar', 'class="page page-materi aktif"');
		$materi2	= anchor('siswa/posisi_tangan', '2. Posisi Tangan saat Memegang Pensil', 'class="page page-materi"');

		$video1		= "<source src=" . base_url('assets/videos/persiapan-menggambar/peralatan-menggambar.mp4') . " type='video/mp4'>";	

		$data = array(
			'link_judul_materi'	=> 'persiapan_sebelum_menggambar',
			'judul_materi'		=> 'Persiapan Sebelum Menggambar',
			'judul' 			=> 'Peralatan Untuk Menggambar',
			'materi'			=> "<b>Kertas</b>
			<p>
				Kertas mempunyai berbagai macam ukuran mulai dari A0-A6, ukuran kertas yang paling besar adalah A0 dan yang paling kecil A6, 
				tetapi biasanya kertas gambar yang dapat Anda temukan ukuran A2-A5. Ketebalan kertas juga harus diperhatikan, ukurannya ada yang 
				70 gr-300 gr. Paling tipis ukuran 70 gr dan paling tebal ukuran 300 gr. Pada umumnya Anda dapat menemukan ketebalan kertas ukuran 
				70 gr-120 gr. Semakin tebal kertas gambar yang Anda gunakan semakin baik.
			</p>
			<p>
				Warna kertas pun bermacam-macam, Anda juga dapat mencoba menggunakan berbagai macam warna kertas.
				Memilih kertas gambar sangatlah penting tetapi jika memang Anda memiliki kesempatan untuk membeli kertas gambar impor maka sebaiknya Anda mencobanya, dan lihat perbedaan kualitas gambar yang dihasilkan.
			</p>
			<b>Pensil</b>
			<p>Pilihlah pensil B dan 2B untuk membuat sketsa, kemudian untuk mengarsir gunakanlah pensil 3B sampai 6B</p>
			<p>$gambar1</p>
			<b>Rautan Pensil</b>
			<p>Rautan pensil bisa menggunakan pisau cutter, rautan biasa, dan rautan mekanik. Pisau Cutter lebih direkomndasikan karena ketajaman pensil bisa dihasilkan sesuai dengan kebutuhan. Kadang ada rautan pensil biasa yang justru ketika Anda raut menyebabkan pensil tersebut cepat patah. Menghasilkan ketajaman pensil tergantung dari kebutuhan Anda apakah akan membuat garis tipis dan garis tebal. Pensil ukuran lunak dan keras juga menghasilkan ketajaman yang berbeda.</p>
			<b>Penghapus</b>
			<p>Penghapus juga bermacam-macam jenisnya mulai dari berbeda ukuran, warna, dan merknya. Sebaiknya Anda memilih penghapus yang memang diproduksi untuk menggambar dan menulis. Biasanya penghapus ini bewarna putih dan hitam. Sebagai pemula kadang Anda terlalu takut untuk melakukan kesalahan sehingga Anda sering menggunakan penghapus. Sebaiknya hindarkan dahulu terlalu sering memakai penghapus. Jika ada garis yang Anda buat tidak sesuai yang diinginkan biarkan saja. Penghapus nantinya akan sangat membantu dalam membuat daerah-daerah terang. Jika ada bagian arsir gelap yang tidak diinginkan maka sangat sulit untuk dihapus, walaupun hilang kadang masih terlihat bekasnya</p>

			<p>
				Gambar yang menggunakan media pensil biasanya akan sangat cepat pudar jika tidak segera dilindungi. Ada beberapa cara agar gambar tetap terlindungi yaitu menyemprotkan gambar Anda dengan fixative. Hanya harga satu botol fixative cukup mahal sebagai pilihan lain Anda dapat membeli pylox warna transparan. Cara menyemprotkan gambar dengan fixative atau pylox yaitu semprotlah kertas dalam keadaan posisi berdiri, lakukan dari jarak jauh min 20 cm. Semprotlah tipis-tipis, kemudian tunggu sampai kering dan lakukan berulang kali.
			</p>

			<p>
				Karya yang menggunakan media kertas juga harus dirawat karena mudah terlipat, robek, warna kertas menjadi kuning dan berjamur. Simpanlah karya Anda dalam ruangan yang suhunya tidak terlalu lembab dan bebas dari debu.
			</p>",


			'video'				=> $video1,
			'list_sub_materi'	=> $materi1 . $materi2
		);


		$this->render_page_siswa('siswa/sub_materi', $data);
	}
	function posisi_tangan()
	{
		$gambar1	= "<img src=" . base_url('assets/images/1_grip_a_pencil.png') . " width=100%>";

		$materi1	= anchor('siswa/peralatan_untuk_menggambar', '1. Peralatan Untuk Menggambar', 'class="page page-materi"');
		$materi2	= anchor('siswa/posisi_tangan', '2. Posisi Tangan saat Memegang Pensil', 'class="page page-materi aktif"');

		$data = array(
			'link_judul_materi'	=> 'persiapan_sebelum_menggambar',
			'judul_materi'		=> 'Persiapan Sebelum Menggambar',
			'judul' 			=> 'Posisi Tangan saat Memegang Pensil',
			'video'				=> "",
			'list_sub_materi'	=> $materi1 . $materi2,
			'materi'			=> $gambar1
		);

		$this->render_page_siswa('siswa/sub_materi', $data);
	}
	/* ======== /PERSIAPAN SEBELUM MENGGAMBAR/ ========= */

	/* ==================== GARIS ====================== */
	function garis()
	{
		$link1 = site_url('siswa/mengenal_garis_dan_tekanan');

		$foto1 = base_url('assets/images/pencil_grades1.png');

		$judul1 = '#1 Mengenal Garis dan Tekanan';

		$data = array(
			'judul' 			=> 'Garis',

			'sub_judul_1'			=> "<a href='$link1'>
			<div class='col-md-3'>
				<div class='box box-danger'>

					<div class='box-header'>
						<div class='box-title'>$judul1</div>
					</div>

					<div class='box-body'>
						<img src='$foto1' width=100%>
					</div>

					<div class='box-footer'>
						Lihat Selengkapnya
					</div>

				</div>
			</div>
		</a>",
		'sub_judul_2' => "",
		'sub_judul_3' => ""
		);

		//---- Load Menu
		$this->render_page_siswa('siswa/materi', $data);
	}
	function mengenal_garis_dan_tekanan()
	{
		$gambar1	= "Tidak ada data.";
		$materi1	= anchor('siswa/mengenal_garis_dan_tekanan', '1. Mengenal Garis dan Tekanan', 'class="page page-materi aktif"');
		$video1		= "<source src=" . base_url('assets/videos/garis/garis.mp4') . " type='video/mp4'>";

		$data = array(
			'link_judul_materi'	=> 'garis',
			'judul_materi'		=> 'Garis',
			'judul' 			=> 'Mengenal Garis dan Tekanan',
			'video'				=> $video1,
			'list_sub_materi'	=> $materi1,
			'materi'			=> $gambar1
		);

		$this->render_page_siswa('siswa/sub_materi', $data);
	}

	/* =================== /GARIS/ ===================== */

	/* ================= BIDANG DASAR ================== */

	/* 2 Dimensi */
	function bidang_dasar_2_dimensi()
	{
		$link1 = site_url('siswa/konstruksi_bentuk_dasar_2dimensi');
		$link2 = site_url('siswa/contoh_menggambar_2dimensi');

		$foto1 = base_url('assets/images/14_bentuk_dasar_2D_2.png');
		$foto2 = base_url('assets/images/12_struktur_bentuk_sejajar_menjari.png');

		$judul1 = '#1 Konstruksi Bentuk Dasar 2 Dimensi';
		$judul2 = '#2 Contoh Menggambar 2 Dimensi';

		$data = array(
			'judul' 			=> 'Bidang Dasar 2 Dimensi',

			'sub_judul_1'			=> "<a href='$link1'>
			<div class='col-md-3'>
				<div class='box box-danger'>

					<div class='box-header'>
						<div class='box-title'>$judul1</div>
					</div>

					<div class='box-body'>
						<img src='$foto1' width=100%>
					</div>

					<div class='box-footer'>
						Lihat Selengkapnya
					</div>

				</div>
			</div>
		</a>

		<a href='$link2'>
			<div class='col-md-3'>
				<div class='box box-danger'>

					<div class='box-header'>
						<div class='box-title'>$judul2</div>
					</div>

					<div class='box-body'>
						<img src='$foto2' width=100%>
					</div>

					<div class='box-footer'>
						Lihat Selengkapnya
					</div>

				</div>
			</div>
		</a>
		",
		'sub_judul_2' => "",
		'sub_judul_3' => ""
		);

		//---- Load Menu
		$this->render_page_siswa('siswa/materi', $data);

	}

	function konstruksi_bentuk_dasar_2dimensi()
	{
		$gambar1	= "<img src=".base_url('assets/images/14_bentuk_dasar_2D_2.png')." width=100%>";
		$gambar2	= "<img src=".base_url('assets/images/15_konstruksi_bentuk_2D.png')." width=100%>";

		$materi1	= anchor('siswa/konstruksi_bentuk_dasar_2dimensi', '1. Konstruksi Bentuk Dasar 2 Dimensi', 'class="page page-materi aktif"');
		$materi2	= anchor('siswa/contoh_menggambar_2dimensi', '2. Contoh Menggambar 2 Dimensi', 'class="page page-materi"');

		$video1		= "<source src=" . base_url('assets/videos/bidangdasar/2dimensi.mp4') . " type='video/mp4'>";

		$data = array(
			'link_judul_materi'	=> 'bidang_dasar_2_dimensi',
			'judul_materi'		=> 'Bidang Dasar 2 Dimensi',
			'judul' 			=> 'Konstruksi Bidang Dasar 2 Dimensi',
			'video'				=> $video1,
			'list_sub_materi'	=> $materi1.$materi2,
			'materi'			=> $gambar1.$gambar2
		);

		$this->render_page_siswa('siswa/sub_materi', $data);
	}
	function contoh_menggambar_2dimensi()
	{
		$gambar1	= "<img src=".base_url('assets/images/12_struktur_bentuk_sejajar_menjari.png')." width=100%>";
		$gambar2	= "<img src=".base_url('assets/images/13_struktur_bentuk_duri.png')." width=100%>";

		$materi1	= anchor('siswa/konstruksi_bentuk_dasar_2dimensi', '1. Konstruksi Bentuk Dasar 2 Dimensi', 'class="page page-materi"');
		$materi2	= anchor('siswa/contoh_menggambar_2dimensi', '2. Contoh Menggambar 2 Dimensi', 'class="page page-materi aktif"');

		$video1		= "<source src=" . base_url('assets/videos/bidangdasar/CONTOH_MENGGAMBAR_2D.mp4') . " type='video/mp4'>";

		$data = array(
			'link_judul_materi'	=> 'bidang_dasar_2_dimensi',
			'judul_materi'		=> 'Bidang Dasar 2 Dimensi',
			'judul' 			=> 'Contoh Menggambar 2 Dimensi',
			'video'				=> $video1,
			'list_sub_materi'	=> $materi1.$materi2,
			'materi'			=> $gambar1.$gambar2
		);

		$this->render_page_siswa('siswa/sub_materi', $data);
	}
	/* /2 Dimensi/ */

	/* 3 Dimensi */
	function bidang_dasar_3_dimensi()
	{
		$judul_utama = "Bidang Dasar 3 Dimensi";

		$link1 = site_url('siswa/bentuk_dasar_3dimensi');
		$link2 = site_url('siswa/isometri');
		$link3 = site_url('siswa/bentuk_lingkaran');
		$link4 = site_url('siswa/bentuk_tabung');
		$link5 = site_url('siswa/bentuk_kerucut');
		$link6 = site_url('siswa/bentuk_helm');
		$link7 = site_url('siswa/bentuk_botol');
		$link8 = site_url('siswa/bentuk_gelas');

		$foto1 = base_url('assets/images/16_konstruksi_bentuk_dasar_3D.png');
		$foto2 = base_url('assets/images/materi/bidangdasar/isometri.png');
		$foto3 = base_url('assets/images/17_konstruksi_bola.png');
		$foto4 = base_url('assets/images/18_konstruksi_tabung.png');
		$foto5 = base_url('assets/images/19_konstruksi_kerucut.png');
		$foto6 = base_url('assets/images/20_konstruksi_helm.png');
		$foto7 = base_url('assets/images/21_konstruksi_botol.png');
		$foto8 = base_url('assets/images/23_konstruksi_gelas.png');

		$judul1 = '#1 Konstruksi Bentuk Dasar 3 Dimensi';
		$judul2 = '#2 Isometri';
		$judul3 = '#3 Konstruksi Bentuk Lingkaran/Bola';
		$judul4 = '#4 Konstruksi Bentuk Tabung';
		$judul5 = '#5 Konstruksi Bentuk Kerucut';
		$judul6 = '#6 Konstruksi Bentuk Helm';
		$judul7 = '#7 Konstruksi Bentuk Botol';
		$judul8 = '#8 Konstruksi Bentuk Gelas';

		$data = array(
			'judul' 			=> $judul_utama,

			'sub_judul_1'			=> "<a href='$link1'>
			<div class='col-md-3'>
				<div class='box box-danger'>

					<div class='box-header'>
						<div class='box-title'>$judul1</div>
					</div>

					<div class='box-body'>
						<img src='$foto1' width=100%>
					</div>

					<div class='box-footer'>
						Lihat Selengkapnya
					</div>

				</div>
			</div>
		</a>

		<a href='$link2'>
			<div class='col-md-3'>
				<div class='box box-danger'>

					<div class='box-header'>
						<div class='box-title'>$judul2</div>
					</div>

					<div class='box-body'>
						<img src='$foto2' width=100%>
					</div>

					<div class='box-footer'>
						Lihat Selengkapnya
					</div>

				</div>
			</div>
		</a>

		<a href='$link3'>
			<div class='col-md-3'>
				<div class='box box-danger'>

					<div class='box-header'>
						<div class='box-title'>$judul3</div>
					</div>

					<div class='box-body'>
						<img src='$foto3' width=100%>
					</div>

					<div class='box-footer'>
						Lihat Selengkapnya
					</div>

				</div>
			</div>
		</a>

		<a href='$link4'>
			<div class='col-md-3'>
				<div class='box box-danger'>

					<div class='box-header'>
						<div class='box-title'>$judul4</div>
					</div>

					<div class='box-body'>
						<img src='$foto4' width=100%>
					</div>

					<div class='box-footer'>
						Lihat Selengkapnya
					</div>

				</div>
			</div>
		</a>
		",

		'sub_judul_2' => "
		<a href='$link5'>
			<div class='col-md-3'>
				<div class='box box-danger'>

					<div class='box-header'>
						<div class='box-title'>$judul5</div>
					</div>

					<div class='box-body'>
						<img src='$foto5' width=100%>
					</div>

					<div class='box-footer'>
						Lihat Selengkapnya
					</div>

				</div>
			</div>
		</a>

		<a href='$link6'>
			<div class='col-md-3'>
				<div class='box box-danger'>

					<div class='box-header'>
						<div class='box-title'>$judul6</div>
					</div>

					<div class='box-body'>
						<img src='$foto6' width=100%>
					</div>

					<div class='box-footer'>
						Lihat Selengkapnya
					</div>

				</div>
			</div>
		</a>
		
		<a href='$link7'>
			<div class='col-md-3'>
				<div class='box box-danger'>

					<div class='box-header'>
						<div class='box-title'>$judul7</div>
					</div>

					<div class='box-body'>
						<img src='$foto7' width=100%>
					</div>

					<div class='box-footer'>
						Lihat Selengkapnya
					</div>

				</div>
			</div>
		</a>

		<a href='$link8'>
			<div class='col-md-3'>
				<div class='box box-danger'>

					<div class='box-header'>
						<div class='box-title'>$judul8</div>
					</div>

					<div class='box-body'>
						<img src='$foto8' width=100%>
					</div>

					<div class='box-footer'>
						Lihat Selengkapnya
					</div>

				</div>
			</div>
		</a>",
		'sub_judul_3' => ""
		);

		//---- Load Menu
		$this->render_page_siswa('siswa/materi', $data);
	}

	function list_materi_3dimensi()
	{
		
	}

	function bentuk_dasar_3dimensi()
	{
		$judul_utama	= "Konstruksi Bentuk Dasar 3 Dimensi";
		$judul_materi	= "Bidang Dasar 3 Dimensi";
		$link_materi	= "bidang_dasar_3_dimensi";

		$gambar1	= "<img src=".base_url('assets/images/16_konstruksi_bentuk_dasar_3D.png')." width=100%>";
		$gambar2	= "<img src=".base_url('assets/images/10_struktur_bentuk_bola_balok.png')." width=100%>";

		$materi1	= anchor('siswa/bentuk_dasar_3dimensi'	, '1. Konstruksi Bentuk Dasar 3 Dimensi'	, 'class="page page-materi aktif"');
		$materi2	= anchor('siswa/isometri'				, '2. Isometri'								, 'class="page page-materi"');
		$materi3	= anchor('siswa/bentuk_lingkaran'		, '3. Konstruksi Bentuk Lingkaran/Bola'		, 'class="page page-materi"');
		$materi4	= anchor('siswa/bentuk_tabung'			, '4. Konstruksi Bentuk Tabung'				, 'class="page page-materi"');
		$materi5	= anchor('siswa/bentuk_kerucut'			, '5. Konstruksi Bentuk Kerucut'			, 'class="page page-materi"');
		$materi6	= anchor('siswa/bentuk_helm'			, '6. Konstruksi Bentuk Helm'				, 'class="page page-materi"');
		$materi7	= anchor('siswa/bentuk_botol'			, '7. Konstruksi Bentuk Botol'				, 'class="page page-materi"');
		$materi8	= anchor('siswa/bentuk_gelas'			, '8. Konstruksi Bentuk Gelas'				, 'class="page page-materi"');

		$video1		= "<source src=" . base_url('assets/videos/bidangdasar/menggambar-3-dimensi.mp4') . " type='video/mp4'>";

		$data = array(
			'link_judul_materi'	=> $link_materi,
			'judul_materi'		=> $judul_materi,
			'judul' 			=> $judul_utama,
			'video'				=> $video1,
			'list_sub_materi'	=> $materi1.$materi2.$materi3.$materi4.$materi5.$materi6.$materi7.$materi8,
			'materi'			=> $gambar1.$gambar2
		);

		$this->render_page_siswa('siswa/sub_materi', $data);
	}
	function isometri()
	{
		$judul_utama	= "Isometri";
		$judul_materi	= "Bidang Dasar 3 Dimensi";
		$link_materi	= "bidang_dasar_3_dimensi";

		$gambar1	= "Tidak Ada Data.";
		$gambar2	= "";

		$materi1	= anchor('siswa/bentuk_dasar_3dimensi'	, '1. Konstruksi Bentuk Dasar 3 Dimensi'	, 'class="page page-materi"');
		$materi2	= anchor('siswa/isometri'				, '2. Isometri'								, 'class="page page-materi aktif"');
		$materi3	= anchor('siswa/bentuk_lingkaran'		, '3. Konstruksi Bentuk Lingkaran/Bola'		, 'class="page page-materi"');
		$materi4	= anchor('siswa/bentuk_tabung'			, '4. Konstruksi Bentuk Tabung'				, 'class="page page-materi"');
		$materi5	= anchor('siswa/bentuk_kerucut'			, '5. Konstruksi Bentuk Kerucut'			, 'class="page page-materi"');
		$materi6	= anchor('siswa/bentuk_helm'			, '6. Konstruksi Bentuk Helm'				, 'class="page page-materi"');
		$materi7	= anchor('siswa/bentuk_botol'			, '7. Konstruksi Bentuk Botol'				, 'class="page page-materi"');
		$materi8	= anchor('siswa/bentuk_gelas'			, '8. Konstruksi Bentuk Gelas'				, 'class="page page-materi"');

		$video1		= "<source src=" . base_url('assets/videos/bidangdasar/ISOMETRI.mp4') . " type='video/mp4'>";

		$data = array(
			'link_judul_materi'	=> $link_materi,
			'judul_materi'		=> $judul_materi,
			'judul' 			=> $judul_utama,
			'video'				=> $video1,
			'list_sub_materi'	=> $materi1.$materi2.$materi3.$materi4.$materi5.$materi6.$materi7.$materi8,
			'materi'			=> $gambar1.$gambar2
		);

		$this->render_page_siswa('siswa/sub_materi', $data);
	}
	function bentuk_lingkaran()
	{
		$judul_utama	= "Konstruksi Bentuk Lingkaran/Bola";
		$judul_materi	= "Bidang Dasar 3 Dimensi";
		$link_materi	= "bidang_dasar_3_dimensi";

		$gambar1	= "<img src=".base_url('assets/images/17_konstruksi_bola.png')." width=100%>";
		$gambar2	= "";

		$materi1	= anchor('siswa/bentuk_dasar_3dimensi'	, '1. Konstruksi Bentuk Dasar 3 Dimensi'	, 'class="page page-materi"');
		$materi2	= anchor('siswa/isometri'				, '2. Isometri'								, 'class="page page-materi"');
		$materi3	= anchor('siswa/bentuk_lingkaran'		, '3. Konstruksi Bentuk Lingkaran/Bola'		, 'class="page page-materi aktif"');
		$materi4	= anchor('siswa/bentuk_tabung'			, '4. Konstruksi Bentuk Tabung'				, 'class="page page-materi"');
		$materi5	= anchor('siswa/bentuk_kerucut'			, '5. Konstruksi Bentuk Kerucut'			, 'class="page page-materi"');
		$materi6	= anchor('siswa/bentuk_helm'			, '6. Konstruksi Bentuk Helm'				, 'class="page page-materi"');
		$materi7	= anchor('siswa/bentuk_botol'			, '7. Konstruksi Bentuk Botol'				, 'class="page page-materi"');
		$materi8	= anchor('siswa/bentuk_gelas'			, '8. Konstruksi Bentuk Gelas'				, 'class="page page-materi"');

		$video1		= "<source src=" . base_url('assets/videos/bidangdasar/LINGKARAN_BENTUK_DASAR_BOLA.mp4') . " type='video/mp4'>";

		$data = array(
			'link_judul_materi'	=> $link_materi,
			'judul_materi'		=> $judul_materi,
			'judul' 			=> $judul_utama,
			'video'				=> $video1,
			'list_sub_materi'	=> $materi1.$materi2.$materi3.$materi4.$materi5.$materi6.$materi7.$materi8,
			'materi'			=> $gambar1.$gambar2
		);

		$this->render_page_siswa('siswa/sub_materi', $data);
	}
	function bentuk_tabung()
	{
		$judul_utama	= "Konstruksi Bentuk Tabung";
		$judul_materi	= "Bidang Dasar 3 Dimensi";
		$link_materi	= "bidang_dasar_3_dimensi";

		$gambar1	= "<img src=".base_url('assets/images/18_konstruksi_tabung.png')." width=100%>";
		$gambar2	= "<img src=".base_url('assets/images/11_struktur_bentuk_tabung.png')." width=100%>";

		$materi1	= anchor('siswa/bentuk_dasar_3dimensi'	, '1. Konstruksi Bentuk Dasar 3 Dimensi'	, 'class="page page-materi"');
		$materi2	= anchor('siswa/isometri'				, '2. Isometri'								, 'class="page page-materi"');
		$materi3	= anchor('siswa/bentuk_lingkaran'		, '3. Konstruksi Bentuk Lingkaran/Bola'		, 'class="page page-materi"');
		$materi4	= anchor('siswa/bentuk_tabung'			, '4. Konstruksi Bentuk Tabung'				, 'class="page page-materi aktif"');
		$materi5	= anchor('siswa/bentuk_kerucut'			, '5. Konstruksi Bentuk Kerucut'			, 'class="page page-materi"');
		$materi6	= anchor('siswa/bentuk_helm'			, '6. Konstruksi Bentuk Helm'				, 'class="page page-materi"');
		$materi7	= anchor('siswa/bentuk_botol'			, '7. Konstruksi Bentuk Botol'				, 'class="page page-materi"');
		$materi8	= anchor('siswa/bentuk_gelas'			, '8. Konstruksi Bentuk Gelas'				, 'class="page page-materi"');

		$video1		= "<source src=" . base_url('assets/videos/bidangdasar/KONTRUKSI_BENTUK_TABUNG.mp4') . " type='video/mp4'>";

		$data = array(
			'link_judul_materi'	=> $link_materi,
			'judul_materi'		=> $judul_materi,
			'judul' 			=> $judul_utama,
			'video'				=> $video1,
			'list_sub_materi'	=> $materi1.$materi2.$materi3.$materi4.$materi5.$materi6.$materi7.$materi8,
			'materi'			=> $gambar1.$gambar2
		);

		$this->render_page_siswa('siswa/sub_materi', $data);
	}
	function bentuk_kerucut()
	{
		$judul_utama	= "Konstruksi Bentuk Kerucut";
		$judul_materi	= "Bidang Dasar 3 Dimensi";
		$link_materi	= "bidang_dasar_3_dimensi";

		$gambar1	= "<img src=".base_url('assets/images/19_konstruksi_kerucut.png')." width=100%>";
		$gambar2	= "";

		$materi1	= anchor('siswa/bentuk_dasar_3dimensi'	, '1. Konstruksi Bentuk Dasar 3 Dimensi'	, 'class="page page-materi"');
		$materi2	= anchor('siswa/isometri'				, '2. Isometri'								, 'class="page page-materi"');
		$materi3	= anchor('siswa/bentuk_lingkaran'		, '3. Konstruksi Bentuk Lingkaran/Bola'		, 'class="page page-materi"');
		$materi4	= anchor('siswa/bentuk_tabung'			, '4. Konstruksi Bentuk Tabung'				, 'class="page page-materi"');
		$materi5	= anchor('siswa/bentuk_kerucut'			, '5. Konstruksi Bentuk Kerucut'			, 'class="page page-materi aktif"');
		$materi6	= anchor('siswa/bentuk_helm'			, '6. Konstruksi Bentuk Helm'				, 'class="page page-materi"');
		$materi7	= anchor('siswa/bentuk_botol'			, '7. Konstruksi Bentuk Botol'				, 'class="page page-materi"');
		$materi8	= anchor('siswa/bentuk_gelas'			, '8. Konstruksi Bentuk Gelas'				, 'class="page page-materi"');

		$video1		= "<source src=" . base_url('assets/videos/bidangdasar/KONTRUKSI_BENTUK_KERUCUT.mp4') . " type='video/mp4'>";

		$data = array(
			'link_judul_materi'	=> $link_materi,
			'judul_materi'		=> $judul_materi,
			'judul' 			=> $judul_utama,
			'video'				=> $video1,
			'list_sub_materi'	=> $materi1.$materi2.$materi3.$materi4.$materi5.$materi6.$materi7.$materi8,
			'materi'			=> $gambar1.$gambar2
		);

		$this->render_page_siswa('siswa/sub_materi', $data);
	}
	function bentuk_helm()
	{
		$judul_utama	= "Konstruksi Bentuk Helm";
		$judul_materi	= "Bidang Dasar 3 Dimensi";
		$link_materi	= "bidang_dasar_3_dimensi";

		$gambar1	= "<img src=".base_url('assets/images/20_konstruksi_helm.png')." width=100%>";
		$gambar2	= "";

		$materi1	= anchor('siswa/bentuk_dasar_3dimensi'	, '1. Konstruksi Bentuk Dasar 3 Dimensi'	, 'class="page page-materi"');
		$materi2	= anchor('siswa/isometri'				, '2. Isometri'								, 'class="page page-materi"');
		$materi3	= anchor('siswa/bentuk_lingkaran'		, '3. Konstruksi Bentuk Lingkaran/Bola'		, 'class="page page-materi"');
		$materi4	= anchor('siswa/bentuk_tabung'			, '4. Konstruksi Bentuk Tabung'				, 'class="page page-materi"');
		$materi5	= anchor('siswa/bentuk_kerucut'			, '5. Konstruksi Bentuk Kerucut'			, 'class="page page-materi"');
		$materi6	= anchor('siswa/bentuk_helm'			, '6. Konstruksi Bentuk Helm'				, 'class="page page-materi aktif"');
		$materi7	= anchor('siswa/bentuk_botol'			, '7. Konstruksi Bentuk Botol'				, 'class="page page-materi"');
		$materi8	= anchor('siswa/bentuk_gelas'			, '8. Konstruksi Bentuk Gelas'				, 'class="page page-materi"');

		$video1		= "";

		$data = array(
			'link_judul_materi'	=> $link_materi,
			'judul_materi'		=> $judul_materi,
			'judul' 			=> $judul_utama,
			'video'				=> $video1,
			'list_sub_materi'	=> $materi1.$materi2.$materi3.$materi4.$materi5.$materi6.$materi7.$materi8,
			'materi'			=> $gambar1.$gambar2
		);

		$this->render_page_siswa('siswa/sub_materi', $data);
	}
	function bentuk_botol()
	{
		$judul_utama	= "Konstruksi Bentuk Botol";
		$judul_materi	= "Bidang Dasar 3 Dimensi";
		$link_materi	= "bidang_dasar_3_dimensi";

		$gambar1	= "<img src=".base_url('assets/images/21_konstruksi_botol.png')." width=100%>";
		$gambar2	= "<source src=" . base_url('assets/videos/bidangdasar/KONTRUKSI_BOTOL.mp4') . " type='video/mp4'>";

		$materi1	= anchor('siswa/bentuk_dasar_3dimensi'	, '1. Konstruksi Bentuk Dasar 3 Dimensi'	, 'class="page page-materi"');
		$materi2	= anchor('siswa/isometri'				, '2. Isometri'								, 'class="page page-materi"');
		$materi3	= anchor('siswa/bentuk_lingkaran'		, '3. Konstruksi Bentuk Lingkaran/Bola'		, 'class="page page-materi"');
		$materi4	= anchor('siswa/bentuk_tabung'			, '4. Konstruksi Bentuk Tabung'				, 'class="page page-materi"');
		$materi5	= anchor('siswa/bentuk_kerucut'			, '5. Konstruksi Bentuk Kerucut'			, 'class="page page-materi"');
		$materi6	= anchor('siswa/bentuk_helm'			, '6. Konstruksi Bentuk Helm'				, 'class="page page-materi"');
		$materi7	= anchor('siswa/bentuk_botol'			, '7. Konstruksi Bentuk Botol'				, 'class="page page-materi aktif"');
		$materi8	= anchor('siswa/bentuk_gelas'			, '8. Konstruksi Bentuk Gelas'				, 'class="page page-materi"');

		$video1		= "<source src=" . base_url('assets/videos/bidangdasar/KONTRUKSI_BOTOL.mp4') . " type='video/mp4'>";

		$data = array(
			'link_judul_materi'	=> $link_materi,
			'judul_materi'		=> $judul_materi,
			'judul' 			=> $judul_utama,
			'video'				=> $video1,
			'list_sub_materi'	=> $materi1.$materi2.$materi3.$materi4.$materi5.$materi6.$materi7.$materi8,
			'materi'			=> $gambar1.$gambar2
		);

		$this->render_page_siswa('siswa/sub_materi', $data);
	}
	function bentuk_gelas()
	{
		$judul_utama	= "Konstruksi Bentuk Gelas";
		$judul_materi	= "Bidang Dasar 3 Dimensi";
		$link_materi	= "bidang_dasar_3_dimensi";

		$gambar1	= "<img src=".base_url('assets/images/23_konstruksi_gelas.png')." width=100%>";
		$gambar2	= "";

		$materi1	= anchor('siswa/bentuk_dasar_3dimensi'	, '1. Konstruksi Bentuk Dasar 3 Dimensi'	, 'class="page page-materi"');
		$materi2	= anchor('siswa/isometri'				, '2. Isometri'								, 'class="page page-materi"');
		$materi3	= anchor('siswa/bentuk_lingkaran'		, '3. Konstruksi Bentuk Lingkaran/Bola'		, 'class="page page-materi"');
		$materi4	= anchor('siswa/bentuk_tabung'			, '4. Konstruksi Bentuk Tabung'				, 'class="page page-materi"');
		$materi5	= anchor('siswa/bentuk_kerucut'			, '5. Konstruksi Bentuk Kerucut'			, 'class="page page-materi"');
		$materi6	= anchor('siswa/bentuk_helm'			, '6. Konstruksi Bentuk Helm'				, 'class="page page-materi"');
		$materi7	= anchor('siswa/bentuk_botol'			, '7. Konstruksi Bentuk Botol'				, 'class="page page-materi"');
		$materi8	= anchor('siswa/bentuk_gelas'			, '8. Konstruksi Bentuk Gelas'				, 'class="page page-materi aktif"');

		$video1		= "<source src=" . base_url('assets/videos/bidangdasar/KONTRUKSI_GAMBAR_GELAS.mp4') . " type='video/mp4'>";

		$data = array(
			'link_judul_materi'	=> $link_materi,
			'judul_materi'		=> $judul_materi,
			'judul' 			=> $judul_utama,
			'video'				=> $video1,
			'list_sub_materi'	=> $materi1.$materi2.$materi3.$materi4.$materi5.$materi6.$materi7.$materi8,
			'materi'			=> $gambar1.$gambar2
		);

		$this->render_page_siswa('siswa/sub_materi', $data);
	}
	/* /3 Dimensi/ */
	/* ================ /BIDANG DASAR/ ================= */


	/* ARSIR =========================================== */

	function arsir()
	{
		$judul_utama = "Arsir";

		$link1 = site_url('siswa/arsir_1');
		$link2 = site_url('siswa/arsir_2');

		$foto1 = base_url('assets/images/materi/arsir/arsir_1.png');
		$foto2 = base_url('assets/images/materi/arsir/arsir_2.png');

		$judul1 = '#1 Arsir (Part 1)';
		$judul2 = '#2 Arsir (Part 2)';

		$data = array(
			'judul' 		=> $judul_utama,

			'sub_judul_1'	=> "
			<a href='$link1'>
				<div class='col-md-3'>
					<div class='box box-danger'>

						<div class='box-header'>
							<div class='box-title'>$judul1</div>
						</div>

						<div class='box-body'>
							<img src='$foto1' width=100%>
						</div>

						<div class='box-footer'>
							Lihat Selengkapnya
						</div>

					</div>
				</div>
			</a>
			
			<a href='$link2'>
				<div class='col-md-3'>
					<div class='box box-danger'>

						<div class='box-header'>
							<div class='box-title'>$judul2</div>
						</div>

						<div class='box-body'>
							<img src='$foto2' width=100%>
						</div>

						<div class='box-footer'>
							Lihat Selengkapnya
						</div>

					</div>
				</div>
			</a>",

			'sub_judul_2' => "",
			'sub_judul_3' => ""
			);

		//---- Load Menu
		$this->render_page_siswa('siswa/materi', $data);
	}
	function arsir_1()
	{
		$judul_utama	= "Arsir (Part 1)";
		$judul_materi	= "Arsir";
		$link_materi	= "arsir";

		$gambar1	= "Tidak ada data.";
		$gambar2	= "";

		$materi1	= anchor('siswa/arsir_1'	, '1. Arsir (Part 1)'	, 'class="page page-materi aktif"');
		$materi2	= anchor('siswa/arsir_2'	, '2. Arsir (Part 2)'	, 'class="page page-materi"');

		$video1		= "<source src=" . base_url('assets/videos/arsir/ARSIR_PART_1.mp4') . " type='video/mp4'>";

		$data = array(
			'link_judul_materi'	=> $link_materi,
			'judul_materi'		=> $judul_materi,
			'judul' 			=> $judul_utama,
			'video'				=> $video1,
			'list_sub_materi'	=> $materi1.$materi2,
			'materi'			=> $gambar1.$gambar2
		);

		$this->render_page_siswa('siswa/sub_materi', $data);
	}
	function arsir_2()
	{
		$judul_utama	= "Arsir (Part 2)";
		$judul_materi	= "Arsir";
		$link_materi	= "arsir";

		$gambar1	= "Tidak ada data.";
		$gambar2	= "";

		$materi1	= anchor('siswa/arsir_1'	, '1. Arsir (Part 1)'	, 'class="page page-materi"');
		$materi2	= anchor('siswa/arsir_2'	, '2. Arsir (Part 2)'	, 'class="page page-materi aktif"');

		$video1		= "<source src=" . base_url('assets/videos/arsir/ARSIR_PART_2.mp4') . " type='video/mp4'>";

		$data = array(
			'link_judul_materi'	=> $link_materi,
			'judul_materi'		=> $judul_materi,
			'judul' 			=> $judul_utama,
			'video'				=> $video1,
			'list_sub_materi'	=> $materi1.$materi2,
			'materi'			=> $gambar1.$gambar2
		);

		$this->render_page_siswa('siswa/sub_materi', $data);
	}

	/* /ARSIR =========================================== */

	/* PERSPEKTIF INTERIOR DAN EKSTERIOR ======================================== */

	function perspektif()
	{
		$judul_utama = "Perspektif";

		$link1 = site_url('siswa/perspektif_dasar');
		$link2 = site_url('siswa/interior_1_titik_hilang');
		$link3 = site_url('siswa/interior_2_titik_hilang');
		$link4 = site_url('siswa/eksterior_1_titik_hilang');
		$link5 = site_url('siswa/eksterior_2_titik_hilang');
		$link6 = site_url('siswa/contoh_pengaplikasian_sederhana');
		$link7 = site_url('siswa/posisi_daun_pintu');
		$link8 = site_url('siswa/contoh_pembuatan_varian_2_titik_hilang');
		$link9 = site_url('siswa/logika_gambar_2_titik_hilang');
		$link10 = site_url('siswa/arah_datang_cahaya');
		$link11 = site_url('siswa/perbedaan_ukuran_berdasarkan_posisi');
		$link12 = site_url('siswa/posisi_lampu_diatas_meja_makan');

		$foto1 = base_url('assets/images/materi/perspektif/1_perspektif_dasar.png');
		$foto2 = base_url('assets/images/materi/perspektif/2_interior_1_titik_hilang.png');
		$foto3 = base_url('assets/images/materi/perspektif/3_interior_2_titik_hilang.png');
		$foto4 = base_url('assets/images/materi/perspektif/4_eksterior_1_titik_hilang.png');
		$foto5 = base_url('assets/images/materi/perspektif/5_eksterior_2_titik_hilang.png');
		$foto6 = base_url('assets/images/materi/perspektif/6_contoh_aplikasi_sederhana_perspektif.png');
		$foto7 = base_url('assets/images/materi/perspektif/7_posisi_daun_pintu.png');
		$foto8 = base_url('assets/images/materi/perspektif/8_aplikasi_sederhana_perspektif.png');
		$foto9 = base_url('assets/images/materi/perspektif/9_logika_2_titik_hilang.png');
		$foto10 = base_url('assets/images/materi/perspektif/10_arah_datang_cahaya.png');
		$foto11 = base_url('assets/images/materi/perspektif/11_perbedaan_ukuran_berdasarkan_posisi.png');
		$foto12 = base_url('assets/images/materi/perspektif/12_membuat_lamput_di_atas_meja.png');

		$judul1 = '#1 Perspektif Dasar';
		$judul2 = '#2 Interior : 1 Titik Hilang';
		$judul3 = '#3 Interior : 2 Titik Hilang';
		$judul4 = '#4 Eksterior : 1 Titik Hilang';
		$judul5 = '#5 Eksterior : 2 Titik Hilang';
		$judul6 = '#6 Contoh Pengaplikasian Perspektif Sederhana';
		$judul7 = '#7 Posisi Daun Pintu';
		$judul8 = '#8 Contoh Pembuatan Varian 2 Titik Hilang';
		$judul9 = '#9 Logika Gambar 2 Titik Hilang';
		$judul10 = '#10 Arah Datang Cahaya';
		$judul11 = '#11 Perbedaan Ukuran Berdasarkan Posisi';
		$judul12 = '#12 Posisi Lampu di Atas Meja';

		$data = array(
			'judul' 		=> $judul_utama,

			'sub_judul_1'	=> "
			<a href='$link1'>
				<div class='col-md-3'>
					<div class='box box-danger'>

						<div class='box-header'>
							<div class='box-title'>$judul1</div>
						</div>

						<div class='box-body'>
							<img src='$foto1' width=100%>
						</div>

						<div class='box-footer'>
							Lihat Selengkapnya
						</div>

					</div>
				</div>
			</a>
			
			<a href='$link2'>
				<div class='col-md-3'>
					<div class='box box-danger'>

						<div class='box-header'>
							<div class='box-title'>$judul2</div>
						</div>

						<div class='box-body'>
							<img src='$foto2' width=100%>
						</div>

						<div class='box-footer'>
							Lihat Selengkapnya
						</div>

					</div>
				</div>
			</a>

			<a href='$link3'>
				<div class='col-md-3'>
					<div class='box box-danger'>

						<div class='box-header'>
							<div class='box-title'>$judul3</div>
						</div>

						<div class='box-body'>
							<img src='$foto3' width=100%>
						</div>

						<div class='box-footer'>
							Lihat Selengkapnya
						</div>

					</div>
				</div>
			</a>

			<a href='$link4'>
				<div class='col-md-3'>
					<div class='box box-danger'>

						<div class='box-header'>
							<div class='box-title'>$judul4</div>
						</div>

						<div class='box-body'>
							<img src='$foto4' width=100%>
						</div>

						<div class='box-footer'>
							Lihat Selengkapnya
						</div>

					</div>
				</div>
			</a>
			",

			'sub_judul_2' => "
			<a href='$link5'>
				<div class='col-md-3'>
					<div class='box box-danger'>

						<div class='box-header'>
							<div class='box-title'>$judul5</div>
						</div>

						<div class='box-body'>
							<img src='$foto5' width=100%>
						</div>

						<div class='box-footer'>
							Lihat Selengkapnya
						</div>

					</div>
				</div>
			</a>

			<a href='$link6'>
				<div class='col-md-3'>
					<div class='box box-danger'>

						<div class='box-header'>
							<div class='box-title'>$judul6</div>
						</div>

						<div class='box-body'>
							<img src='$foto6' width=100%>
						</div>

						<div class='box-footer'>
							Lihat Selengkapnya
						</div>

					</div>
				</div>
			</a>
		
			<a href='$link7'>
				<div class='col-md-3'>
					<div class='box box-danger'>

						<div class='box-header'>
							<div class='box-title'>$judul7</div>
						</div>

						<div class='box-body'>
							<img src='$foto7' width=100%>
						</div>

						<div class='box-footer'>
							Lihat Selengkapnya
						</div>

					</div>
				</div>
			</a>
			
			<a href='$link8'>
				<div class='col-md-3'>
					<div class='box box-danger'>

						<div class='box-header'>
							<div class='box-title'>$judul8</div>
						</div>

						<div class='box-body'>
							<img src='$foto8' width=100%>
						</div>

						<div class='box-footer'>
							Lihat Selengkapnya
						</div>

					</div>
				</div>
			</a>",
			'sub_judul_3' => "
			<a href='$link9'>
				<div class='col-md-3'>
					<div class='box box-danger'>

						<div class='box-header'>
							<div class='box-title'>$judul9</div>
						</div>

						<div class='box-body'>
							<img src='$foto9' width=100%>
						</div>

						<div class='box-footer'>
							Lihat Selengkapnya
						</div>

					</div>
				</div>
			</a>

			<a href='$link10'>
				<div class='col-md-3'>
					<div class='box box-danger'>

						<div class='box-header'>
							<div class='box-title'>$judul10</div>
						</div>

						<div class='box-body'>
							<img src='$foto10' width=100%>
						</div>

						<div class='box-footer'>
							Lihat Selengkapnya
						</div>

					</div>
				</div>
			</a>
		
			<a href='$link11'>
				<div class='col-md-3'>
					<div class='box box-danger'>

						<div class='box-header'>
							<div class='box-title'>$judul11</div>
						</div>

						<div class='box-body'>
							<img src='$foto11' width=100%>
						</div>

						<div class='box-footer'>
							Lihat Selengkapnya
						</div>

					</div>
				</div>
			</a>
			
			<a href='$link12'>
				<div class='col-md-3'>
					<div class='box box-danger'>

						<div class='box-header'>
							<div class='box-title'>$judul12</div>
						</div>

						<div class='box-body'>
							<img src='$foto12' width=100%>
						</div>

						<div class='box-footer'>
							Lihat Selengkapnya
						</div>

					</div>
				</div>
			</a>"
			);

		//---- Load Menu
		$this->render_page_siswa('siswa/materi', $data);

	}
	function perspektif_dasar()
	{
		$judul_utama	= "Perspektif Dasar";
		$judul_materi	= "Perspektif";
		$link_materi	= "perspektif";

		$gambar1	= "Tidak ada data.";
		$gambar2	= "";

		$materi1	= anchor('siswa/perspektif_dasar'						, '1. Perspektif Dasar'								, 'class="page page-materi aktif"');
		$materi2	= anchor('siswa/interior_1_titik_hilang'				, '2. 1 Titik Hilang Interior'						, 'class="page page-materi"');
		$materi3	= anchor('siswa/interior_2_titik_hilang'				, '3. 2 Titik Hilang Interior'						, 'class="page page-materi"');
		$materi4	= anchor('siswa/eksterior_1_titik_hilang'				, '4. 1 Titik Hilang Eksterior'						, 'class="page page-materi"');
		$materi5	= anchor('siswa/eksterior_2_titik_hilang'				, '5. 2 Titik Hilang Eksterior'						, 'class="page page-materi"');
		$materi6	= anchor('siswa/contoh_pengaplikasian_sederhana'		, '6. Contoh Pengaplikasian Perspektif Sederhana'	, 'class="page page-materi"');
		$materi7	= anchor('siswa/posisi_daun_pintu'						, '7. Posisi Daun Pintu'							, 'class="page page-materi"');
		$materi8	= anchor('siswa/contoh_pembuatan_varian_2_titik_hilang'	, '8. Contoh Pembuatan Varian 2 Titik Hilang'		, 'class="page page-materi"');
		$materi9	= anchor('siswa/logika_gambar_2_titik_hilang'			, '9. Logika Gambar 2 Titik Hilang'					, 'class="page page-materi"');
		$materi10	= anchor('siswa/arah_datang_cahaya'						, '10. Arah Datang Cahaya'							, 'class="page page-materi"');
		$materi11	= anchor('siswa/perbedaan_ukuran_berdasarkan_posisi'	, '11. Perbedaan Ukuran Berdasarkan Posisi'			, 'class="page page-materi"');
		$materi12	= anchor('siswa/posisi_lampu_diatas_meja_makan'			, '12. Posisi Lampu Di Atas Meja'					, 'class="page page-materi"');

		$video1		= "<source src=" . base_url('assets/videos/perspektif/materi-prespektif.mp4') . " type='video/mp4'>";

		$data = array(
			'link_judul_materi'	=> $link_materi,
			'judul_materi'		=> $judul_materi,
			'judul' 			=> $judul_utama,
			'video'				=> $video1,
			'list_sub_materi'	=> $materi1.$materi2.$materi3.$materi4.$materi5.$materi6.$materi7.$materi8.$materi9.$materi10.$materi11.$materi12,
			'materi'			=> $gambar1.$gambar2
		);

		$this->render_page_siswa('siswa/sub_materi', $data);
	}
	function interior_1_titik_hilang()
	{
		$judul_utama	= "1 Titik Hilang Interior";
		$judul_materi	= "Perspektif";
		$link_materi	= "perspektif";

		$gambar1	= "Tidak ada data.";
		$gambar2	= "";

		$materi1	= anchor('siswa/perspektif_dasar'						, '1. Perspektif Dasar'								, 'class="page page-materi"');
		$materi2	= anchor('siswa/interior_1_titik_hilang'				, '2. 1 Titik Hilang Interior'						, 'class="page page-materi aktif"');
		$materi3	= anchor('siswa/interior_2_titik_hilang'				, '3. 2 Titik Hilang Interior'						, 'class="page page-materi"');
		$materi4	= anchor('siswa/eksterior_1_titik_hilang'				, '4. 1 Titik Hilang Eksterior'						, 'class="page page-materi"');
		$materi5	= anchor('siswa/eksterior_2_titik_hilang'				, '5. 2 Titik Hilang Eksterior'						, 'class="page page-materi"');
		$materi6	= anchor('siswa/contoh_pengaplikasian_sederhana'		, '6. Contoh Pengaplikasian Perspektif Sederhana'	, 'class="page page-materi"');
		$materi7	= anchor('siswa/posisi_daun_pintu'						, '7. Posisi Daun Pintu'							, 'class="page page-materi"');
		$materi8	= anchor('siswa/contoh_pembuatan_varian_2_titik_hilang'	, '8. Contoh Pembuatan Varian 2 Titik Hilang'		, 'class="page page-materi"');
		$materi9	= anchor('siswa/logika_gambar_2_titik_hilang'			, '9. Logika Gambar 2 Titik Hilang'					, 'class="page page-materi"');
		$materi10	= anchor('siswa/arah_datang_cahaya'						, '10. Arah Datang Cahaya'							, 'class="page page-materi"');
		$materi11	= anchor('siswa/perbedaan_ukuran_berdasarkan_posisi'	, '11. Perbedaan Ukuran Berdasarkan Posisi'			, 'class="page page-materi"');
		$materi12	= anchor('siswa/posisi_lampu_diatas_meja_makan'			, '12. Posisi Lampu Di Atas Meja'					, 'class="page page-materi"');

		$video1		= "<source src=" . base_url('assets/videos/perspektif/1th-int.mp4') . " type='video/mp4'>";

		$data = array(
			'link_judul_materi'	=> $link_materi,
			'judul_materi'		=> $judul_materi,
			'judul' 			=> $judul_utama,
			'video'				=> $video1,
			'list_sub_materi'	=> $materi1.$materi2.$materi3.$materi4.$materi5.$materi6.$materi7.$materi8.$materi9.$materi10.$materi11.$materi12,
			'materi'			=> $gambar1.$gambar2
		);

		$this->render_page_siswa('siswa/sub_materi', $data);
	}
	function interior_2_titik_hilang()
	{
		$judul_utama	= "2 Titik Hilang Interior";
		$judul_materi	= "Perspektif";
		$link_materi	= "perspektif";

		$gambar1	= "Tidak ada data.";
		$gambar2	= "";

		$materi1	= anchor('siswa/perspektif_dasar'						, '1. Perspektif Dasar'								, 'class="page page-materi"');
		$materi2	= anchor('siswa/interior_1_titik_hilang'				, '2. 1 Titik Hilang Interior'						, 'class="page page-materi"');
		$materi3	= anchor('siswa/interior_2_titik_hilang'				, '3. 2 Titik Hilang Interior'						, 'class="page page-materi aktif"');
		$materi4	= anchor('siswa/eksterior_1_titik_hilang'				, '4. 1 Titik Hilang Eksterior'						, 'class="page page-materi"');
		$materi5	= anchor('siswa/eksterior_2_titik_hilang'				, '5. 2 Titik Hilang Eksterior'						, 'class="page page-materi"');
		$materi6	= anchor('siswa/contoh_pengaplikasian_sederhana'		, '6. Contoh Pengaplikasian Perspektif Sederhana'	, 'class="page page-materi"');
		$materi7	= anchor('siswa/posisi_daun_pintu'						, '7. Posisi Daun Pintu'							, 'class="page page-materi"');
		$materi8	= anchor('siswa/contoh_pembuatan_varian_2_titik_hilang'	, '8. Contoh Pembuatan Varian 2 Titik Hilang'		, 'class="page page-materi"');
		$materi9	= anchor('siswa/logika_gambar_2_titik_hilang'			, '9. Logika Gambar 2 Titik Hilang'					, 'class="page page-materi"');
		$materi10	= anchor('siswa/arah_datang_cahaya'						, '10. Arah Datang Cahaya'							, 'class="page page-materi"');
		$materi11	= anchor('siswa/perbedaan_ukuran_berdasarkan_posisi'	, '11. Perbedaan Ukuran Berdasarkan Posisi'			, 'class="page page-materi"');
		$materi12	= anchor('siswa/posisi_lampu_diatas_meja_makan'			, '12. Posisi Lampu Di Atas Meja'					, 'class="page page-materi"');

		$video1		= "<source src=" . base_url('assets/videos/perspektif/2th-int.mp4') . " type='video/mp4'>";

		$data = array(
			'link_judul_materi'	=> $link_materi,
			'judul_materi'		=> $judul_materi,
			'judul' 			=> $judul_utama,
			'video'				=> $video1,
			'list_sub_materi'	=> $materi1.$materi2.$materi3.$materi4.$materi5.$materi6.$materi7.$materi8.$materi9.$materi10.$materi11.$materi12,
			'materi'			=> $gambar1.$gambar2
		);

		$this->render_page_siswa('siswa/sub_materi', $data);
	}
	function eksterior_1_titik_hilang()
	{
		$judul_utama	= "1 Titik Hilang Eksterior";
		$judul_materi	= "Perspektif";
		$link_materi	= "perspektif";

		$gambar1	= "Tidak ada data.";
		$gambar2	= "";

		$materi1	= anchor('siswa/perspektif_dasar'						, '1. Perspektif Dasar'								, 'class="page page-materi"');
		$materi2	= anchor('siswa/interior_1_titik_hilang'				, '2. 1 Titik Hilang Interior'						, 'class="page page-materi"');
		$materi3	= anchor('siswa/interior_2_titik_hilang'				, '3. 2 Titik Hilang Interior'						, 'class="page page-materi"');
		$materi4	= anchor('siswa/eksterior_1_titik_hilang'				, '4. 1 Titik Hilang Eksterior'						, 'class="page page-materi aktif"');
		$materi5	= anchor('siswa/eksterior_2_titik_hilang'				, '5. 2 Titik Hilang Eksterior'						, 'class="page page-materi"');
		$materi6	= anchor('siswa/contoh_pengaplikasian_sederhana'		, '6. Contoh Pengaplikasian Perspektif Sederhana'	, 'class="page page-materi"');
		$materi7	= anchor('siswa/posisi_daun_pintu'						, '7. Posisi Daun Pintu'							, 'class="page page-materi"');
		$materi8	= anchor('siswa/contoh_pembuatan_varian_2_titik_hilang'	, '8. Contoh Pembuatan Varian 2 Titik Hilang'		, 'class="page page-materi"');
		$materi9	= anchor('siswa/logika_gambar_2_titik_hilang'			, '9. Logika Gambar 2 Titik Hilang'					, 'class="page page-materi"');
		$materi10	= anchor('siswa/arah_datang_cahaya'						, '10. Arah Datang Cahaya'							, 'class="page page-materi"');
		$materi11	= anchor('siswa/perbedaan_ukuran_berdasarkan_posisi'	, '11. Perbedaan Ukuran Berdasarkan Posisi'			, 'class="page page-materi"');
		$materi12	= anchor('siswa/posisi_lampu_diatas_meja_makan'			, '12. Posisi Lampu Di Atas Meja'					, 'class="page page-materi"');

		$video1		= "<source src=" . base_url('assets/videos/perspektif/1th-ext.mp4') . " type='video/mp4'>";

		$data = array(
			'link_judul_materi'	=> $link_materi,
			'judul_materi'		=> $judul_materi,
			'judul' 			=> $judul_utama,
			'video'				=> $video1,
			'list_sub_materi'	=> $materi1.$materi2.$materi3.$materi4.$materi5.$materi6.$materi7.$materi8.$materi9.$materi10.$materi11.$materi12,
			'materi'			=> $gambar1.$gambar2
		);

		$this->render_page_siswa('siswa/sub_materi', $data);
	}
	function eksterior_2_titik_hilang()
	{
		$judul_utama	= "2 Titik Hilang Eksterior";
		$judul_materi	= "Perspektif";
		$link_materi	= "perspektif";

		$gambar1	= "Tidak ada data.";
		$gambar2	= "";

		$materi1	= anchor('siswa/perspektif_dasar'						, '1. Perspektif Dasar'								, 'class="page page-materi"');
		$materi2	= anchor('siswa/interior_1_titik_hilang'				, '2. 1 Titik Hilang Interior'						, 'class="page page-materi"');
		$materi3	= anchor('siswa/interior_2_titik_hilang'				, '3. 2 Titik Hilang Interior'						, 'class="page page-materi"');
		$materi4	= anchor('siswa/eksterior_1_titik_hilang'				, '4. 1 Titik Hilang Eksterior'						, 'class="page page-materi"');
		$materi5	= anchor('siswa/eksterior_2_titik_hilang'				, '5. 2 Titik Hilang Eksterior'						, 'class="page page-materi aktif"');
		$materi6	= anchor('siswa/contoh_pengaplikasian_sederhana'		, '6. Contoh Pengaplikasian Perspektif Sederhana'	, 'class="page page-materi"');
		$materi7	= anchor('siswa/posisi_daun_pintu'						, '7. Posisi Daun Pintu'							, 'class="page page-materi"');
		$materi8	= anchor('siswa/contoh_pembuatan_varian_2_titik_hilang'	, '8. Contoh Pembuatan Varian 2 Titik Hilang'		, 'class="page page-materi"');
		$materi9	= anchor('siswa/logika_gambar_2_titik_hilang'			, '9. Logika Gambar 2 Titik Hilang'					, 'class="page page-materi"');
		$materi10	= anchor('siswa/arah_datang_cahaya'						, '10. Arah Datang Cahaya'							, 'class="page page-materi"');
		$materi11	= anchor('siswa/perbedaan_ukuran_berdasarkan_posisi'	, '11. Perbedaan Ukuran Berdasarkan Posisi'			, 'class="page page-materi"');
		$materi12	= anchor('siswa/posisi_lampu_diatas_meja_makan'			, '12. Posisi Lampu Di Atas Meja'					, 'class="page page-materi"');

		$video1		= "<source src=" . base_url('assets/videos/perspektif/2th-ext.mp4') . " type='video/mp4'>";

		$data = array(
			'link_judul_materi'	=> $link_materi,
			'judul_materi'		=> $judul_materi,
			'judul' 			=> $judul_utama,
			'video'				=> $video1,
			'list_sub_materi'	=> $materi1.$materi2.$materi3.$materi4.$materi5.$materi6.$materi7.$materi8.$materi9.$materi10.$materi11.$materi12,
			'materi'			=> $gambar1.$gambar2
		);

		$this->render_page_siswa('siswa/sub_materi', $data);
	}
	function contoh_pengaplikasian_sederhana()
	{
		$judul_utama	= "Contoh Pengaplikasian Perspektif Sederhana";
		$judul_materi	= "Perspektif";
		$link_materi	= "perspektif";

		$gambar1	= "Tidak ada data.";
		$gambar2	= "";

		$materi1	= anchor('siswa/perspektif_dasar'						, '1. Perspektif Dasar'								, 'class="page page-materi"');
		$materi2	= anchor('siswa/interior_1_titik_hilang'				, '2. 1 Titik Hilang Interior'						, 'class="page page-materi"');
		$materi3	= anchor('siswa/interior_2_titik_hilang'				, '3. 2 Titik Hilang Interior'						, 'class="page page-materi"');
		$materi4	= anchor('siswa/eksterior_1_titik_hilang'				, '4. 1 Titik Hilang Eksterior'						, 'class="page page-materi"');
		$materi5	= anchor('siswa/eksterior_2_titik_hilang'				, '5. 2 Titik Hilang Eksterior'						, 'class="page page-materi"');
		$materi6	= anchor('siswa/contoh_pengaplikasian_sederhana'		, '6. Contoh Pengaplikasian Perspektif Sederhana'	, 'class="page page-materi aktif"');
		$materi7	= anchor('siswa/posisi_daun_pintu'						, '7. Posisi Daun Pintu'							, 'class="page page-materi"');
		$materi8	= anchor('siswa/contoh_pembuatan_varian_2_titik_hilang'	, '8. Contoh Pembuatan Varian 2 Titik Hilang'		, 'class="page page-materi"');
		$materi9	= anchor('siswa/logika_gambar_2_titik_hilang'			, '9. Logika Gambar 2 Titik Hilang'					, 'class="page page-materi"');
		$materi10	= anchor('siswa/arah_datang_cahaya'						, '10. Arah Datang Cahaya'							, 'class="page page-materi"');
		$materi11	= anchor('siswa/perbedaan_ukuran_berdasarkan_posisi'	, '11. Perbedaan Ukuran Berdasarkan Posisi'			, 'class="page page-materi"');
		$materi12	= anchor('siswa/posisi_lampu_diatas_meja_makan'			, '12. Posisi Lampu Di Atas Meja'					, 'class="page page-materi"');

		$video1		= "<source src=" . base_url('assets/videos/perspektif/contoh-aplikasi-sederhana-perspektif.mp4') . " type='video/mp4'>";

		$data = array(
			'link_judul_materi'	=> $link_materi,
			'judul_materi'		=> $judul_materi,
			'judul' 			=> $judul_utama,
			'video'				=> $video1,
			'list_sub_materi'	=> $materi1.$materi2.$materi3.$materi4.$materi5.$materi6.$materi7.$materi8.$materi9.$materi10.$materi11.$materi12,
			'materi'			=> $gambar1.$gambar2
		);

		$this->render_page_siswa('siswa/sub_materi', $data);
	}
	function posisi_daun_pintu()
	{
		$judul_utama	= "Posisi Daun Pintu";
		$judul_materi	= "Perspektif";
		$link_materi	= "perspektif";

		$gambar1	= "Tidak ada data.";
		$gambar2	= "";

		$materi1	= anchor('siswa/perspektif_dasar'						, '1. Perspektif Dasar'								, 'class="page page-materi"');
		$materi2	= anchor('siswa/interior_1_titik_hilang'				, '2. 1 Titik Hilang Interior'						, 'class="page page-materi"');
		$materi3	= anchor('siswa/interior_2_titik_hilang'				, '3. 2 Titik Hilang Interior'						, 'class="page page-materi"');
		$materi4	= anchor('siswa/eksterior_1_titik_hilang'				, '4. 1 Titik Hilang Eksterior'						, 'class="page page-materi"');
		$materi5	= anchor('siswa/eksterior_2_titik_hilang'				, '5. 2 Titik Hilang Eksterior'						, 'class="page page-materi"');
		$materi6	= anchor('siswa/contoh_pengaplikasian_sederhana'		, '6. Contoh Pengaplikasian Perspektif Sederhana'	, 'class="page page-materi"');
		$materi7	= anchor('siswa/posisi_daun_pintu'						, '7. Posisi Daun Pintu'							, 'class="page page-materi aktif"');
		$materi8	= anchor('siswa/contoh_pembuatan_varian_2_titik_hilang'	, '8. Contoh Pembuatan Varian 2 Titik Hilang'		, 'class="page page-materi"');
		$materi9	= anchor('siswa/logika_gambar_2_titik_hilang'			, '9. Logika Gambar 2 Titik Hilang'					, 'class="page page-materi"');
		$materi10	= anchor('siswa/arah_datang_cahaya'						, '10. Arah Datang Cahaya'							, 'class="page page-materi"');
		$materi11	= anchor('siswa/perbedaan_ukuran_berdasarkan_posisi'	, '11. Perbedaan Ukuran Berdasarkan Posisi'			, 'class="page page-materi"');
		$materi12	= anchor('siswa/posisi_lampu_diatas_meja_makan'			, '12. Posisi Lampu Di Atas Meja'					, 'class="page page-materi"');

		$video1		= "<source src=" . base_url('assets/videos/perspektif/posisi-daun-pintu.mp4') . " type='video/mp4'>";

		$data = array(
			'link_judul_materi'	=> $link_materi,
			'judul_materi'		=> $judul_materi,
			'judul' 			=> $judul_utama,
			'video'				=> $video1,
			'list_sub_materi'	=> $materi1.$materi2.$materi3.$materi4.$materi5.$materi6.$materi7.$materi8.$materi9.$materi10.$materi11.$materi12,
			'materi'			=> $gambar1.$gambar2
		);

		$this->render_page_siswa('siswa/sub_materi', $data);
	}
	function contoh_pembuatan_varian_2_titik_hilang()
	{
		$judul_utama	= "Contoh Pembuatan Varian 2 Titik Hilang";
		$judul_materi	= "Perspektif";
		$link_materi	= "perspektif";

		$gambar1	= "Tidak ada data.";
		$gambar2	= "";

		$materi1	= anchor('siswa/perspektif_dasar'						, '1. Perspektif Dasar'								, 'class="page page-materi"');
		$materi2	= anchor('siswa/interior_1_titik_hilang'				, '2. 1 Titik Hilang Interior'						, 'class="page page-materi"');
		$materi3	= anchor('siswa/interior_2_titik_hilang'				, '3. 2 Titik Hilang Interior'						, 'class="page page-materi"');
		$materi4	= anchor('siswa/eksterior_1_titik_hilang'				, '4. 1 Titik Hilang Eksterior'						, 'class="page page-materi"');
		$materi5	= anchor('siswa/eksterior_2_titik_hilang'				, '5. 2 Titik Hilang Eksterior'						, 'class="page page-materi"');
		$materi6	= anchor('siswa/contoh_pengaplikasian_sederhana'		, '6. Contoh Pengaplikasian Perspektif Sederhana'	, 'class="page page-materi"');
		$materi7	= anchor('siswa/posisi_daun_pintu'						, '7. Posisi Daun Pintu'							, 'class="page page-materi"');
		$materi8	= anchor('siswa/contoh_pembuatan_varian_2_titik_hilang'	, '8. Contoh Pembuatan Varian 2 Titik Hilang'		, 'class="page page-materi aktif"');
		$materi9	= anchor('siswa/logika_gambar_2_titik_hilang'			, '9. Logika Gambar 2 Titik Hilang'					, 'class="page page-materi"');
		$materi10	= anchor('siswa/arah_datang_cahaya'						, '10. Arah Datang Cahaya'							, 'class="page page-materi"');
		$materi11	= anchor('siswa/perbedaan_ukuran_berdasarkan_posisi'	, '11. Perbedaan Ukuran Berdasarkan Posisi'			, 'class="page page-materi"');
		$materi12	= anchor('siswa/posisi_lampu_diatas_meja_makan'			, '12. Posisi Lampu Di Atas Meja'					, 'class="page page-materi"');

		$video1		= "<source src=" . base_url('assets/videos/perspektif/contoh-aplikasi-sederhana.mp4') . " type='video/mp4'>";

		$data = array(
			'link_judul_materi'	=> $link_materi,
			'judul_materi'		=> $judul_materi,
			'judul' 			=> $judul_utama,
			'video'				=> $video1,
			'list_sub_materi'	=> $materi1.$materi2.$materi3.$materi4.$materi5.$materi6.$materi7.$materi8.$materi9.$materi10.$materi11.$materi12,
			'materi'			=> $gambar1.$gambar2
		);

		$this->render_page_siswa('siswa/sub_materi', $data);
	}
	function logika_gambar_2_titik_hilang()
	{
		$judul_utama	= "Logika Gambar 2 Titik Hilang";
		$judul_materi	= "Perspektif";
		$link_materi	= "perspektif";

		$gambar1	= "Tidak ada data.";
		$gambar2	= "";

		$materi1	= anchor('siswa/perspektif_dasar'						, '1. Perspektif Dasar'								, 'class="page page-materi"');
		$materi2	= anchor('siswa/interior_1_titik_hilang'				, '2. 1 Titik Hilang Interior'						, 'class="page page-materi"');
		$materi3	= anchor('siswa/interior_2_titik_hilang'				, '3. 2 Titik Hilang Interior'						, 'class="page page-materi"');
		$materi4	= anchor('siswa/eksterior_1_titik_hilang'				, '4. 1 Titik Hilang Eksterior'						, 'class="page page-materi"');
		$materi5	= anchor('siswa/eksterior_2_titik_hilang'				, '5. 2 Titik Hilang Eksterior'						, 'class="page page-materi"');
		$materi6	= anchor('siswa/contoh_pengaplikasian_sederhana'		, '6. Contoh Pengaplikasian Perspektif Sederhana'	, 'class="page page-materi"');
		$materi7	= anchor('siswa/posisi_daun_pintu'						, '7. Posisi Daun Pintu'							, 'class="page page-materi"');
		$materi8	= anchor('siswa/contoh_pembuatan_varian_2_titik_hilang'	, '8. Contoh Pembuatan Varian 2 Titik Hilang'		, 'class="page page-materi"');
		$materi9	= anchor('siswa/logika_gambar_2_titik_hilang'			, '9. Logika Gambar 2 Titik Hilang'					, 'class="page page-materi aktif"');
		$materi10	= anchor('siswa/arah_datang_cahaya'						, '10. Arah Datang Cahaya'							, 'class="page page-materi"');
		$materi11	= anchor('siswa/perbedaan_ukuran_berdasarkan_posisi'	, '11. Perbedaan Ukuran Berdasarkan Posisi'			, 'class="page page-materi"');
		$materi12	= anchor('siswa/posisi_lampu_diatas_meja_makan'			, '12. Posisi Lampu Di Atas Meja'					, 'class="page page-materi"');

		$video1		= "<source src=" . base_url('assets/videos/perspektif/logika-2-titik-hilang.mp4') . " type='video/mp4'>";

		$data = array(
			'link_judul_materi'	=> $link_materi,
			'judul_materi'		=> $judul_materi,
			'judul' 			=> $judul_utama,
			'video'				=> $video1,
			'list_sub_materi'	=> $materi1.$materi2.$materi3.$materi4.$materi5.$materi6.$materi7.$materi8.$materi9.$materi10.$materi11.$materi12,
			'materi'			=> $gambar1.$gambar2
		);

		$this->render_page_siswa('siswa/sub_materi', $data);
	}
	function arah_datang_cahaya()
	{
		$judul_utama	= "Arah Datang Cahaya";
		$judul_materi	= "Perspektif";
		$link_materi	= "perspektif";

		$gambar1	= "Tidak ada data.";
		$gambar2	= "";

		$materi1	= anchor('siswa/perspektif_dasar'						, '1. Perspektif Dasar'								, 'class="page page-materi"');
		$materi2	= anchor('siswa/interior_1_titik_hilang'				, '2. 1 Titik Hilang Interior'						, 'class="page page-materi"');
		$materi3	= anchor('siswa/interior_2_titik_hilang'				, '3. 2 Titik Hilang Interior'						, 'class="page page-materi"');
		$materi4	= anchor('siswa/eksterior_1_titik_hilang'				, '4. 1 Titik Hilang Eksterior'						, 'class="page page-materi"');
		$materi5	= anchor('siswa/eksterior_2_titik_hilang'				, '5. 2 Titik Hilang Eksterior'						, 'class="page page-materi"');
		$materi6	= anchor('siswa/contoh_pengaplikasian_sederhana'		, '6. Contoh Pengaplikasian Perspektif Sederhana'	, 'class="page page-materi"');
		$materi7	= anchor('siswa/posisi_daun_pintu'						, '7. Posisi Daun Pintu'							, 'class="page page-materi"');
		$materi8	= anchor('siswa/contoh_pembuatan_varian_2_titik_hilang'	, '8. Contoh Pembuatan Varian 2 Titik Hilang'		, 'class="page page-materi"');
		$materi9	= anchor('siswa/logika_gambar_2_titik_hilang'			, '9. Logika Gambar 2 Titik Hilang'					, 'class="page page-materi"');
		$materi10	= anchor('siswa/arah_datang_cahaya'						, '10. Arah Datang Cahaya'							, 'class="page page-materi aktif"');
		$materi11	= anchor('siswa/perbedaan_ukuran_berdasarkan_posisi'	, '11. Perbedaan Ukuran Berdasarkan Posisi'			, 'class="page page-materi"');
		$materi12	= anchor('siswa/posisi_lampu_diatas_meja_makan'			, '12. Posisi Lampu Di Atas Meja'					, 'class="page page-materi"');

		$video1		= "<source src=" . base_url('assets/videos/perspektif/arah-datang-cahaya.mp4') . " type='video/mp4'>";

		$data = array(
			'link_judul_materi'	=> $link_materi,
			'judul_materi'		=> $judul_materi,
			'judul' 			=> $judul_utama,
			'video'				=> $video1,
			'list_sub_materi'	=> $materi1.$materi2.$materi3.$materi4.$materi5.$materi6.$materi7.$materi8.$materi9.$materi10.$materi11.$materi12,
			'materi'			=> $gambar1.$gambar2
		);

		$this->render_page_siswa('siswa/sub_materi', $data);
	}
	function perbedaan_ukuran_berdasarkan_posisi()
	{
		$judul_utama	= "Perbedaan Ukuran Berdasarkan Posisi";
		$judul_materi	= "Perspektif";
		$link_materi	= "perspektif";

		$gambar1	= "Tidak ada data.";
		$gambar2	= "";

		$materi1	= anchor('siswa/perspektif_dasar'						, '1. Perspektif Dasar'								, 'class="page page-materi"');
		$materi2	= anchor('siswa/interior_1_titik_hilang'				, '2. 1 Titik Hilang Interior'						, 'class="page page-materi"');
		$materi3	= anchor('siswa/interior_2_titik_hilang'				, '3. 2 Titik Hilang Interior'						, 'class="page page-materi"');
		$materi4	= anchor('siswa/eksterior_1_titik_hilang'				, '4. 1 Titik Hilang Eksterior'						, 'class="page page-materi"');
		$materi5	= anchor('siswa/eksterior_2_titik_hilang'				, '5. 2 Titik Hilang Eksterior'						, 'class="page page-materi"');
		$materi6	= anchor('siswa/contoh_pengaplikasian_sederhana'		, '6. Contoh Pengaplikasian Perspektif Sederhana'	, 'class="page page-materi"');
		$materi7	= anchor('siswa/posisi_daun_pintu'						, '7. Posisi Daun Pintu'							, 'class="page page-materi"');
		$materi8	= anchor('siswa/contoh_pembuatan_varian_2_titik_hilang'	, '8. Contoh Pembuatan Varian 2 Titik Hilang'		, 'class="page page-materi"');
		$materi9	= anchor('siswa/logika_gambar_2_titik_hilang'			, '9. Logika Gambar 2 Titik Hilang'					, 'class="page page-materi"');
		$materi10	= anchor('siswa/arah_datang_cahaya'						, '10. Arah Datang Cahaya'							, 'class="page page-materi"');
		$materi11	= anchor('siswa/perbedaan_ukuran_berdasarkan_posisi'	, '11. Perbedaan Ukuran Berdasarkan Posisi'			, 'class="page page-materi aktif"');
		$materi12	= anchor('siswa/posisi_lampu_diatas_meja_makan'			, '12. Posisi Lampu Di Atas Meja'					, 'class="page page-materi"');

		$video1		= "<source src=" . base_url('assets/videos/perspektif/perbedaan-ukuran-berdasarkan-posisi.mp4') . " type='video/mp4'>";

		$data = array(
			'link_judul_materi'	=> $link_materi,
			'judul_materi'		=> $judul_materi,
			'judul' 			=> $judul_utama,
			'video'				=> $video1,
			'list_sub_materi'	=> $materi1.$materi2.$materi3.$materi4.$materi5.$materi6.$materi7.$materi8.$materi9.$materi10.$materi11.$materi12,
			'materi'			=> $gambar1.$gambar2
		);

		$this->render_page_siswa('siswa/sub_materi', $data);
	}
	function posisi_lampu_diatas_meja_makan()
	{
		$judul_utama	= "Posisi Lampu Di Atas Meja";
		$judul_materi	= "Perspektif";
		$link_materi	= "perspektif";

		$gambar1	= "Tidak ada data.";
		$gambar2	= "";

		$materi1	= anchor('siswa/perspektif_dasar'						, '1. Perspektif Dasar'								, 'class="page page-materi"');
		$materi2	= anchor('siswa/interior_1_titik_hilang'				, '2. 1 Titik Hilang Interior'						, 'class="page page-materi"');
		$materi3	= anchor('siswa/interior_2_titik_hilang'				, '3. 2 Titik Hilang Interior'						, 'class="page page-materi"');
		$materi4	= anchor('siswa/eksterior_1_titik_hilang'				, '4. 1 Titik Hilang Eksterior'						, 'class="page page-materi"');
		$materi5	= anchor('siswa/eksterior_2_titik_hilang'				, '5. 2 Titik Hilang Eksterior'						, 'class="page page-materi"');
		$materi6	= anchor('siswa/contoh_pengaplikasian_sederhana'		, '6. Contoh Pengaplikasian Perspektif Sederhana'	, 'class="page page-materi"');
		$materi7	= anchor('siswa/posisi_daun_pintu'						, '7. Posisi Daun Pintu'							, 'class="page page-materi"');
		$materi8	= anchor('siswa/contoh_pembuatan_varian_2_titik_hilang'	, '8. Contoh Pembuatan Varian 2 Titik Hilang'		, 'class="page page-materi"');
		$materi9	= anchor('siswa/logika_gambar_2_titik_hilang'			, '9. Logika Gambar 2 Titik Hilang'					, 'class="page page-materi"');
		$materi10	= anchor('siswa/arah_datang_cahaya'						, '10. Arah Datang Cahaya'							, 'class="page page-materi"');
		$materi11	= anchor('siswa/perbedaan_ukuran_berdasarkan_posisi'	, '11. Perbedaan Ukuran Berdasarkan Posisi'			, 'class="page page-materi"');
		$materi12	= anchor('siswa/posisi_lampu_diatas_meja_makan'			, '12. Posisi Lampu Di Atas Meja'					, 'class="page page-materi aktif"');

		$video1		= "<source src=" . base_url('assets/videos/perspektif/membuat-lampu-tepat-diatas-meja.mp4') . " type='video/mp4'>";

		$data = array(
			'link_judul_materi'	=> $link_materi,
			'judul_materi'		=> $judul_materi,
			'judul' 			=> $judul_utama,
			'video'				=> $video1,
			'list_sub_materi'	=> $materi1.$materi2.$materi3.$materi4.$materi5.$materi6.$materi7.$materi8.$materi9.$materi10.$materi11.$materi12,
			'materi'			=> $gambar1.$gambar2
		);

		$this->render_page_siswa('siswa/sub_materi', $data);
	}

	/* /PERSPEKTIF INTERIOR DAN EKSTERIOR ======================================= */

	/* ANATOMI ========================================= */

	function anatomi()
	{
		$judul_utama = "Anatomi";

		$link1 = site_url('siswa/pengenalan_anatomi');
		$link2 = site_url('siswa/pembuatan_wajah_1');
		$link3 = site_url('siswa/pembuatan_wajah_2');
		$link4 = site_url('siswa/ekspresi_wajah');
		$link5 = site_url('siswa/tangan_dan_kaki');
		$link6 = site_url('siswa/gestur_tubuh');

		$foto1 = base_url('assets/images/materi/anatomi/1_pengenalan_anatomi.png');
		$foto2 = base_url('assets/images/materi/anatomi/2_anatomi_wajah_1.png');
		$foto3 = base_url('assets/images/materi/anatomi/3_anatomi_wajah_2.png');
		$foto4 = base_url('assets/images/materi/anatomi/4_ekspresi_wajah.png');
		$foto5 = base_url('assets/images/materi/anatomi/5_tangan_dan_kaki.png');
		$foto6 = base_url('assets/images/materi/anatomi/6_gestur_tubuh.png');

		$judul1 = '#1 Pengenalan Anatomi';
		$judul2 = '#2 Pembuatan Wajah (Part 1)';
		$judul3 = '#3 Pembuatan Wajah (Part 2)';
		$judul4 = '#4 Ekspresi Wajah';
		$judul5 = '#5 Tangan dan Kaki';
		$judul6 = '#6 Gestur Tubuh';

		$data = array(
			'judul' 		=> $judul_utama,

			'sub_judul_1'	=> "
			<a href='$link1'>
				<div class='col-md-3'>
					<div class='box box-danger'>

						<div class='box-header'>
							<div class='box-title'>$judul1</div>
						</div>

						<div class='box-body'>
							<img src='$foto1' width=100%>
						</div>

						<div class='box-footer'>
							Lihat Selengkapnya
						</div>

					</div>
				</div>
			</a>
			
			<a href='$link2'>
				<div class='col-md-3'>
					<div class='box box-danger'>

						<div class='box-header'>
							<div class='box-title'>$judul2</div>
						</div>

						<div class='box-body'>
							<img src='$foto2' width=100%>
						</div>

						<div class='box-footer'>
							Lihat Selengkapnya
						</div>

					</div>
				</div>
			</a>

			<a href='$link3'>
				<div class='col-md-3'>
					<div class='box box-danger'>

						<div class='box-header'>
							<div class='box-title'>$judul3</div>
						</div>

						<div class='box-body'>
							<img src='$foto3' width=100%>
						</div>

						<div class='box-footer'>
							Lihat Selengkapnya
						</div>

					</div>
				</div>
			</a>

			<a href='$link4'>
				<div class='col-md-3'>
					<div class='box box-danger'>

						<div class='box-header'>
							<div class='box-title'>$judul4</div>
						</div>

						<div class='box-body'>
							<img src='$foto4' width=100%>
						</div>

						<div class='box-footer'>
							Lihat Selengkapnya
						</div>

					</div>
				</div>
			</a>
			",

			'sub_judul_2' => "
			<a href='$link5'>
				<div class='col-md-3'>
					<div class='box box-danger'>

						<div class='box-header'>
							<div class='box-title'>$judul5</div>
						</div>

						<div class='box-body'>
							<img src='$foto5' width=100%>
						</div>

						<div class='box-footer'>
							Lihat Selengkapnya
						</div>

					</div>
				</div>
			</a>
			<a href='$link6'>
				<div class='col-md-3'>
					<div class='box box-danger'>

						<div class='box-header'>
							<div class='box-title'>$judul6</div>
						</div>

						<div class='box-body'>
							<img src='$foto6' width=100%>
						</div>

						<div class='box-footer'>
							Lihat Selengkapnya
						</div>

					</div>
				</div>
			</a>",
			'sub_judul_3' => ""
			);

		//---- Load Menu
		$this->render_page_siswa('siswa/materi', $data);

	}
	function pengenalan_anatomi()
	{
		$judul_utama	= "Pengenalan Anatomi";
		$judul_materi	= "Anatomi";
		$link_materi	= "anatomi";

		$gambar1	= "Tidak ada data.";
		$gambar2	= "";

		$materi1	= anchor('siswa/pengenalan_anatomi'	, '1. Pengenalan Anatomi'			, 'class="page page-materi aktif"');
		$materi2	= anchor('siswa/pembuatan_wajah_1'	, '2. Pembuatan Wajah (Part 1)'		, 'class="page page-materi"');
		$materi3	= anchor('siswa/pembuatan_wajah_2'	, '3. Pembuatan Wajah (Part 2)'		, 'class="page page-materi"');
		$materi4	= anchor('siswa/ekspresi_wajah'		, '4. Ekspresi Wajah'				, 'class="page page-materi"');
		$materi5	= anchor('siswa/tangan_dan_kaki'	, '5. Tangan dan Kaki'				, 'class="page page-materi"');
		$materi6	= anchor('siswa/gestur_tubuh'		, '6. Gestur Tubuh'					, 'class="page page-materi"');

		$video1		= "<source src=" . base_url('assets/videos/anatomi/1-pengenalan.mp4') . " type='video/mp4'>";

		$data = array(
			'link_judul_materi'	=> $link_materi,
			'judul_materi'		=> $judul_materi,
			'judul' 			=> $judul_utama,
			'video'				=> $video1,
			'list_sub_materi'	=> $materi1.$materi2.$materi3.$materi4.$materi5.$materi6,
			'materi'			=> $gambar1.$gambar2
		);

		$this->render_page_siswa('siswa/sub_materi', $data);
	}
	function pembuatan_wajah_1()
	{
		$judul_utama	= "Pembuatan Wajah Part 1";
		$judul_materi	= "Anatomi";
		$link_materi	= "anatomi";

		$gambar1	= "Tidak ada data.";
		$gambar2	= "";

		$materi1	= anchor('siswa/pengenalan_anatomi'	, '1. Pengenalan Anatomi'			, 'class="page page-materi"');
		$materi2	= anchor('siswa/pembuatan_wajah_1'	, '2. Pembuatan Wajah (Part 1)'		, 'class="page page-materi aktif"');
		$materi3	= anchor('siswa/pembuatan_wajah_2'	, '3. Pembuatan Wajah (Part 2)'		, 'class="page page-materi"');
		$materi4	= anchor('siswa/ekspresi_wajah'		, '4. Ekspresi Wajah'				, 'class="page page-materi"');
		$materi5	= anchor('siswa/tangan_dan_kaki'	, '5. Tangan dan Kaki'				, 'class="page page-materi"');
		$materi6	= anchor('siswa/gestur_tubuh'		, '6. Gestur Tubuh'					, 'class="page page-materi"');

		$video1		= "<source src=" . base_url('assets/videos/anatomi/2-wajah.mp4') . " type='video/mp4'>";

		$data = array(
			'link_judul_materi'	=> $link_materi,
			'judul_materi'		=> $judul_materi,
			'judul' 			=> $judul_utama,
			'video'				=> $video1,
			'list_sub_materi'	=> $materi1.$materi2.$materi3.$materi4.$materi5.$materi6,
			'materi'			=> $gambar1.$gambar2
		);

		$this->render_page_siswa('siswa/sub_materi', $data);
	}
	function pembuatan_wajah_2()
	{
		$judul_utama	= "Pembuatan Wajah Part 2";
		$judul_materi	= "Anatomi";
		$link_materi	= "anatomi";

		$gambar1	= "Tidak ada data.";
		$gambar2	= "";

		$materi1	= anchor('siswa/pengenalan_anatomi'	, '1. Pengenalan Anatomi'			, 'class="page page-materi"');
		$materi2	= anchor('siswa/pembuatan_wajah_1'	, '2. Pembuatan Wajah (Part 1)'		, 'class="page page-materi"');
		$materi3	= anchor('siswa/pembuatan_wajah_2'	, '3. Pembuatan Wajah (Part 2)'		, 'class="page page-materi aktif"');
		$materi4	= anchor('siswa/ekspresi_wajah'		, '4. Ekspresi Wajah'				, 'class="page page-materi"');
		$materi5	= anchor('siswa/tangan_dan_kaki'	, '5. Tangan dan Kaki'				, 'class="page page-materi"');
		$materi6	= anchor('siswa/gestur_tubuh'		, '6. Gestur Tubuh'					, 'class="page page-materi"');

		$video1		= "<source src=" . base_url('assets/videos/anatomi/2-wajah-2.mp4') . " type='video/mp4'>";

		$data = array(
			'link_judul_materi'	=> $link_materi,
			'judul_materi'		=> $judul_materi,
			'judul' 			=> $judul_utama,
			'video'				=> $video1,
			'list_sub_materi'	=> $materi1.$materi2.$materi3.$materi4.$materi5.$materi6,
			'materi'			=> $gambar1.$gambar2
		);

		$this->render_page_siswa('siswa/sub_materi', $data);
	}
	function ekspresi_wajah()
	{
		$judul_utama	= "Ekspresi Wajah";
		$judul_materi	= "Anatomi";
		$link_materi	= "anatomi";

		$gambar1	= "Tidak ada data.";
		$gambar2	= "";

		$materi1	= anchor('siswa/pengenalan_anatomi'	, '1. Pengenalan Anatomi'			, 'class="page page-materi"');
		$materi2	= anchor('siswa/pembuatan_wajah_1'	, '2. Pembuatan Wajah (Part 1)'		, 'class="page page-materi"');
		$materi3	= anchor('siswa/pembuatan_wajah_2'	, '3. Pembuatan Wajah (Part 2)'		, 'class="page page-materi"');
		$materi4	= anchor('siswa/ekspresi_wajah'		, '4. Ekspresi Wajah'				, 'class="page page-materi aktif"');
		$materi5	= anchor('siswa/tangan_dan_kaki'	, '5. Tangan dan Kaki'				, 'class="page page-materi"');
		$materi6	= anchor('siswa/gestur_tubuh'		, '6. Gestur Tubuh'					, 'class="page page-materi"');

		$video1		= "<source src=" . base_url('assets/videos/anatomi/3-ekspresi-wajah.mp4') . " type='video/mp4'>";

		$data = array(
			'link_judul_materi'	=> $link_materi,
			'judul_materi'		=> $judul_materi,
			'judul' 			=> $judul_utama,
			'video'				=> $video1,
			'list_sub_materi'	=> $materi1.$materi2.$materi3.$materi4.$materi5.$materi6,
			'materi'			=> $gambar1.$gambar2
		);

		$this->render_page_siswa('siswa/sub_materi', $data);
	}
	function tangan_dan_kaki()
	{
		$judul_utama	= "Tangan dan Kaki";
		$judul_materi	= "Anatomi";
		$link_materi	= "anatomi";

		$gambar1	= "Tidak ada data.";
		$gambar2	= "";

		$materi1	= anchor('siswa/pengenalan_anatomi'	, '1. Pengenalan Anatomi'			, 'class="page page-materi"');
		$materi2	= anchor('siswa/pembuatan_wajah_1'	, '2. Pembuatan Wajah (Part 1)'		, 'class="page page-materi"');
		$materi3	= anchor('siswa/pembuatan_wajah_2'	, '3. Pembuatan Wajah (Part 2)'		, 'class="page page-materi"');
		$materi4	= anchor('siswa/ekspresi_wajah'		, '4. Ekspresi Wajah'				, 'class="page page-materi"');
		$materi5	= anchor('siswa/tangan_dan_kaki'	, '5. Tangan dan Kaki'				, 'class="page page-materi aktif"');
		$materi6	= anchor('siswa/gestur_tubuh'		, '6. Gestur Tubuh'					, 'class="page page-materi"');

		$video1		= "<source src=" . base_url('assets/videos/anatomi/4-tangan-dan-kaki.mp4') . " type='video/mp4'>";

		$data = array(
			'link_judul_materi'	=> $link_materi,
			'judul_materi'		=> $judul_materi,
			'judul' 			=> $judul_utama,
			'video'				=> $video1,
			'list_sub_materi'	=> $materi1.$materi2.$materi3.$materi4.$materi5.$materi6,
			'materi'			=> $gambar1.$gambar2
		);

		$this->render_page_siswa('siswa/sub_materi', $data);
	}
	function gestur_tubuh()
	{
		$judul_utama	= "Gestur Tubuh";
		$judul_materi	= "Anatomi";
		$link_materi	= "anatomi";

		$gambar1	= "Tidak ada data.";
		$gambar2	= "";

		$materi1	= anchor('siswa/pengenalan_anatomi'	, '1. Pengenalan Anatomi'			, 'class="page page-materi"');
		$materi2	= anchor('siswa/pembuatan_wajah_1'	, '2. Pembuatan Wajah (Part 1)'		, 'class="page page-materi"');
		$materi3	= anchor('siswa/pembuatan_wajah_2'	, '3. Pembuatan Wajah (Part 2)'		, 'class="page page-materi"');
		$materi4	= anchor('siswa/ekspresi_wajah'		, '4. Ekspresi Wajah'				, 'class="page page-materi"');
		$materi5	= anchor('siswa/tangan_dan_kaki'	, '5. Tangan dan Kaki'				, 'class="page page-materi"');
		$materi6	= anchor('siswa/gestur_tubuh'		, '6. Gestur Tubuh'					, 'class="page page-materi aktif"');

		$video1		= "<source src=" . base_url('assets/videos/anatomi/5-gesture.mp4') . " type='video/mp4'>";

		$data = array(
			'link_judul_materi'	=> $link_materi,
			'judul_materi'		=> $judul_materi,
			'judul' 			=> $judul_utama,
			'video'				=> $video1,
			'list_sub_materi'	=> $materi1.$materi2.$materi3.$materi4.$materi5.$materi6,
			'materi'			=> $gambar1.$gambar2
		);

		$this->render_page_siswa('siswa/sub_materi', $data);
	}

	/* /ANATOMI ========================================= */
	/* KENDARAAN ======================================= */

	function kendaraan()
	{
		$judul_utama = 'Kendaraan';

		$link1 = site_url('siswa/mobil_part_1');
		$link2 = site_url('siswa/mobil_part_2');
		$link3 = site_url('siswa/motor_part_1');
		$link4 = site_url('siswa/motor_part_2');

		$foto1 = base_url('assets/images/materi/kendaraan/mobil_part_1.png');
		$foto2 = base_url('assets/images/materi/kendaraan/mobil_part_2.png');
		$foto3 = base_url('assets/images/materi/kendaraan/motor_part_1.png');
		$foto4 = base_url('assets/images/materi/kendaraan/motor_part_2.png');

		$judul1 = '#1 Materi Kendaraan: Mobil (Part 1)';
		$judul2 = '#2 Materi Kendaraan: Mobil (Part 2)';
		$judul3 = '#3 Materi Kendaraan: Motor (Part 1)';
		$judul4 = '#4 Materi Kendaraan: Motor (Part 2)';

		$data = array(
			'judul' 		=> $judul_utama,

			'sub_judul_1'	=> "
			<a href='$link1'>
				<div class='col-md-3'>
					<div class='box box-danger'>

						<div class='box-header'>
							<div class='box-title'>$judul1</div>
						</div>

						<div class='box-body'>
							<img src='$foto1' width=100%>
						</div>

						<div class='box-footer'>
							Lihat Selengkapnya
						</div>

					</div>
				</div>
			</a>
			
			<a href='$link2'>
				<div class='col-md-3'>
					<div class='box box-danger'>

						<div class='box-header'>
							<div class='box-title'>$judul2</div>
						</div>

						<div class='box-body'>
							<img src='$foto2' width=100%>
						</div>

						<div class='box-footer'>
							Lihat Selengkapnya
						</div>

					</div>
				</div>
			</a>

			<a href='$link3'>
				<div class='col-md-3'>
					<div class='box box-danger'>

						<div class='box-header'>
							<div class='box-title'>$judul3</div>
						</div>

						<div class='box-body'>
							<img src='$foto3' width=100%>
						</div>

						<div class='box-footer'>
							Lihat Selengkapnya
						</div>

					</div>
				</div>
			</a>
			<a href='$link4'>
				<div class='col-md-3'>
					<div class='box box-danger'>

						<div class='box-header'>
							<div class='box-title'>$judul4</div>
						</div>

						<div class='box-body'>
							<img src='$foto4' width=100%>
						</div>

						<div class='box-footer'>
							Lihat Selengkapnya
						</div>

					</div>
				</div>
			</a>",

			'sub_judul_2' => "",
			'sub_judul_3' => ""
			);

		//---- Load Menu
		$this->render_page_siswa('siswa/materi', $data);
	}
	function mobil_part_1()
	{
		$judul_utama	= "Materi Kendaraan: Mobil (Part 1)";
		$judul_materi	= "Kendaraan";
		$link_materi	= "kendaraan";

		$gambar1	= "Tidak ada data.";
		$gambar2	= "";

		$materi1	= anchor('siswa/mobil_part_1'	, '1. Materi Kendaraan: Mobil (Part 1)'	, 'class="page page-materi aktif"');
		$materi2	= anchor('siswa/mobil_part_2'	, '2. Materi Kendaraan: Mobil (Part 2)'	, 'class="page page-materi"');
		$materi3	= anchor('siswa/motor_part_1'	, '3. Materi Kendaraan: Motor (Part 1)'	, 'class="page page-materi"');
		$materi4	= anchor('siswa/motor_part_2'	, '4. Materi Kendaraan: Motor (Part 2)'	, 'class="page page-materi"');

		$video1		= "<source src=" . base_url('assets/videos/kendaraan/KENDARAAN_MOBIL_PART_1.mp4') . " type='video/mp4'>";

		$data = array(
			'link_judul_materi'	=> $link_materi,
			'judul_materi'		=> $judul_materi,
			'judul' 			=> $judul_utama,
			'video'				=> $video1,
			'list_sub_materi'	=> $materi1.$materi2.$materi3.$materi4,
			'materi'			=> $gambar1.$gambar2
		);

		$this->render_page_siswa('siswa/sub_materi', $data);
	}
	function mobil_part_2()
	{
		$judul_utama	= "Materi Kendaraan: Mobil (Part 2)";
		$judul_materi	= "Kendaraan";
		$link_materi	= "kendaraan";

		$gambar1	= "Tidak ada data.";
		$gambar2	= "";

		$materi1	= anchor('siswa/mobil_part_1'	, '1. Materi Kendaraan: Mobil (Part 1)'	, 'class="page page-materi"');
		$materi2	= anchor('siswa/mobil_part_2'	, '2. Materi Kendaraan: Mobil (Part 2)'	, 'class="page page-materi aktif"');
		$materi3	= anchor('siswa/motor_part_1'	, '3. Materi Kendaraan: Motor (Part 1)'	, 'class="page page-materi"');
		$materi4	= anchor('siswa/motor_part_2'	, '4. Materi Kendaraan: Motor (Part 2)'	, 'class="page page-materi"');

		$video1		= "<source src=" . base_url('assets/videos/kendaraan/KENDARAAN_MOBIL_PART_2.mp4') . " type='video/mp4'>";

		$data = array(
			'link_judul_materi'	=> $link_materi,
			'judul_materi'		=> $judul_materi,
			'judul' 			=> $judul_utama,
			'video'				=> $video1,
			'list_sub_materi'	=> $materi1.$materi2.$materi3.$materi4,
			'materi'			=> $gambar1.$gambar2
		);

		$this->render_page_siswa('siswa/sub_materi', $data);
	}
	function motor_part_1()
	{
		$judul_utama	= "Materi Kendaraan: Motor (Part 1)";
		$judul_materi	= "Kendaraan";
		$link_materi	= "kendaraan";

		$gambar1	= "Tidak ada data.";
		$gambar2	= "";

		$materi1	= anchor('siswa/mobil_part_1'	, '1. Materi Kendaraan: Mobil (Part 1)'	, 'class="page page-materi"');
		$materi2	= anchor('siswa/mobil_part_2'	, '2. Materi Kendaraan: Mobil (Part 2)'	, 'class="page page-materi"');
		$materi3	= anchor('siswa/motor_part_1'	, '3. Materi Kendaraan: Motor (Part 1)'	, 'class="page page-materi aktif"');
		$materi4	= anchor('siswa/motor_part_2'	, '4. Materi Kendaraan: Motor (Part 2)'	, 'class="page page-materi"');

		$video1		= "<source src=" . base_url('assets/videos/kendaraan/KENDARAAN_MOTOR_PART_1.mp4') . " type='video/mp4'>";

		$data = array(
			'link_judul_materi'	=> $link_materi,
			'judul_materi'		=> $judul_materi,
			'judul' 			=> $judul_utama,
			'video'				=> $video1,
			'list_sub_materi'	=> $materi1.$materi2.$materi3.$materi4,
			'materi'			=> $gambar1.$gambar2
		);

		$this->render_page_siswa('siswa/sub_materi', $data);
	}
	function motor_part_2()
	{
		$judul_utama	= "Materi Kendaraan: Motor (Part 2)";
		$judul_materi	= "Kendaraan";
		$link_materi	= "kendaraan";

		$gambar1	= "Tidak ada data.";
		$gambar2	= "";

		$materi1	= anchor('siswa/mobil_part_1'	, '1. Materi Kendaraan: Mobil (Part 1)'	, 'class="page page-materi"');
		$materi2	= anchor('siswa/mobil_part_2'	, '2. Materi Kendaraan: Mobil (Part 2)'	, 'class="page page-materi"');
		$materi3	= anchor('siswa/motor_part_1'	, '3. Materi Kendaraan: Motor (Part 1)'	, 'class="page page-materi"');
		$materi4	= anchor('siswa/motor_part_2'	, '4. Materi Kendaraan: Motor (Part 2)'	, 'class="page page-materi aktif"');

		$video1		= "<source src=" . base_url('assets/videos/kendaraan/KENDARAAN_MOTOR_PART_2.mp4') . " type='video/mp4'>";

		$data = array(
			'link_judul_materi'	=> $link_materi,
			'judul_materi'		=> $judul_materi,
			'judul' 			=> $judul_utama,
			'video'				=> $video1,
			'list_sub_materi'	=> $materi1.$materi2.$materi3.$materi4,
			'materi'			=> $gambar1.$gambar2
		);
		

		$this->render_page_siswa('siswa/sub_materi', $data);
	}

	/* /KENDARAAN ======================================= */
	/* POHON =========================================== */

	function pohon()
	{
		$judul_utama = "Anatomi";

		$link1 = site_url('siswa/materi_pohon_dasar_1');
		$link2 = site_url('siswa/materi_pohon_dasar_2');
		$link3 = site_url('siswa/materi_pohon_dasar_3');

		$foto1 = base_url('assets/images/materi/pohon/pohon_basic_1.png');
		$foto2 = base_url('assets/images/materi/pohon/pohon_basic_2.png');
		$foto3 = base_url('assets/images/materi/pohon/pohon_basic_3.png');

		$judul1 = '#1 Materi Pohon Dasar (Part 1)';
		$judul2 = '#2 Materi Pohon Dasar (Part 2)';
		$judul3 = '#3 Materi Pohon Dasar (Part 3)';

		$data = array(
			'judul' 		=> $judul_utama,

			'sub_judul_1'	=> "
			<a href='$link1'>
				<div class='col-md-3'>
					<div class='box box-danger'>

						<div class='box-header'>
							<div class='box-title'>$judul1</div>
						</div>

						<div class='box-body'>
							<img src='$foto1' width=100%>
						</div>

						<div class='box-footer'>
							Lihat Selengkapnya
						</div>

					</div>
				</div>
			</a>
			
			<a href='$link2'>
				<div class='col-md-3'>
					<div class='box box-danger'>

						<div class='box-header'>
							<div class='box-title'>$judul2</div>
						</div>

						<div class='box-body'>
							<img src='$foto2' width=100%>
						</div>

						<div class='box-footer'>
							Lihat Selengkapnya
						</div>

					</div>
				</div>
			</a>

			<a href='$link3'>
				<div class='col-md-3'>
					<div class='box box-danger'>

						<div class='box-header'>
							<div class='box-title'>$judul3</div>
						</div>

						<div class='box-body'>
							<img src='$foto3' width=100%>
						</div>

						<div class='box-footer'>
							Lihat Selengkapnya
						</div>

					</div>
				</div>
			</a>",

			'sub_judul_2' => "",
			'sub_judul_3' => ""
			);

		//---- Load Menu
		$this->render_page_siswa('siswa/materi', $data);
	}
	function materi_pohon_dasar_1()
	{
		$judul_utama	= "Materi Pohon Dasar (Part 1)";
		$judul_materi	= "Pohon";
		$link_materi	= "pohon";

		$gambar1	= "Tidak ada data.";
		$gambar2	= "";

		$materi1	= anchor('siswa/materi_pohon_dasar_1'	, '1. Materi Pohon Dasar (Part 1)'	, 'class="page page-materi aktif"');
		$materi2	= anchor('siswa/materi_pohon_dasar_2'	, '2. Materi Pohon Dasar (Part 2)'	, 'class="page page-materi"');
		$materi3	= anchor('siswa/materi_pohon_dasar_3'	, '3. Materi Pohon Dasar (Part 3)'	, 'class="page page-materi"');

		$video1		= "<source src=" . base_url('assets/videos/pohon/MATERI_POHON_BASIC_1.mp4') . " type='video/mp4'>";

		$data = array(
			'link_judul_materi'	=> $link_materi,
			'judul_materi'		=> $judul_materi,
			'judul' 			=> $judul_utama,
			'video'				=> $video1,
			'list_sub_materi'	=> $materi1.$materi2.$materi3,
			'materi'			=> $gambar1.$gambar2
		);

		$this->render_page_siswa('siswa/sub_materi', $data);
	}
	function materi_pohon_dasar_2()
	{
		$judul_utama	= "Materi Pohon Dasar (Part 2)";
		$judul_materi	= "Pohon";
		$link_materi	= "pohon";

		$gambar1	= "Tidak ada data.";
		$gambar2	= "";

		$materi1	= anchor('siswa/materi_pohon_dasar_1'	, '1. Materi Pohon Dasar (Part 1)'	, 'class="page page-materi"');
		$materi2	= anchor('siswa/materi_pohon_dasar_2'	, '2. Materi Pohon Dasar (Part 2)'	, 'class="page page-materi aktif"');
		$materi3	= anchor('siswa/materi_pohon_dasar_3'	, '3. Materi Pohon Dasar (Part 3)'	, 'class="page page-materi"');

		$video1		= "<source src=" . base_url('assets/videos/pohon/MATERI_POHON_BASIC_2.mp4') . " type='video/mp4'>";

		$data = array(
			'link_judul_materi'	=> $link_materi,
			'judul_materi'		=> $judul_materi,
			'judul' 			=> $judul_utama,
			'video'				=> $video1,
			'list_sub_materi'	=> $materi1.$materi2.$materi3,
			'materi'			=> $gambar1.$gambar2
		);

		$this->render_page_siswa('siswa/sub_materi', $data);
	}
	function materi_pohon_dasar_3()
	{
		$judul_utama	= "Materi Pohon Dasar (Part 3)";
		$judul_materi	= "Pohon";
		$link_materi	= "pohon";

		$gambar1	= "Tidak ada data.";
		$gambar2	= "";

		$materi1	= anchor('siswa/materi_pohon_dasar_1'	, '1. Materi Pohon Dasar (Part 1)'	, 'class="page page-materi"');
		$materi2	= anchor('siswa/materi_pohon_dasar_2'	, '2. Materi Pohon Dasar (Part 2)'	, 'class="page page-materi"');
		$materi3	= anchor('siswa/materi_pohon_dasar_3'	, '3. Materi Pohon Dasar (Part 3)'	, 'class="page page-materi aktif"');

		$video1		= "<source src=" . base_url('assets/videos/pohon/MATERI_POHON_BASIC_3.mp4') . " type='video/mp4'>";

		$data = array(
			'link_judul_materi'	=> $link_materi,
			'judul_materi'		=> $judul_materi,
			'judul' 			=> $judul_utama,
			'video'				=> $video1,
			'list_sub_materi'	=> $materi1.$materi2.$materi3,
			'materi'			=> $gambar1.$gambar2
		);

		$this->render_page_siswa('siswa/sub_materi', $data);
	}


	/* /POHON =========================================== */

	/* SUASANA ========================================= */

	function suasana()
	{
		$judul_utama = "Suasana";

		$link1 = site_url('siswa/pengenalan_gambar_suasana');
		$link2 = site_url('siswa/gambar_suasana_sederhana');
		$link3 = site_url('siswa/gambar_suasana_sudut_pandang_1');
		$link4 = site_url('siswa/gambar_suasana_sudut_pandang_2');

		$foto1 = base_url('assets/images/materi/suasana/pengenalan_gambar_suasana.png');
		$foto2 = base_url('assets/images/materi/suasana/gambar_suasana_sederhana.png');
		$foto3 = base_url('assets/images/materi/suasana/gambar_suasana_sudut_pandang_1.png');
		$foto4 = base_url('assets/images/materi/suasana/gambar_suasana_sudut_pandang_2.png');

		$judul1 = '#1 Pengenalan Gambar Suasana';
		$judul2 = '#2 Gambar Suasana Sederhana';
		$judul3 = '#2 Gambar Suasana Sudut Pandang Part 1';
		$judul4 = '#2 Gambar Suasana Sudut Pandang Part 2';

		$data = array(
			'judul' 		=> $judul_utama,

			'sub_judul_1'	=> "
			<a href='$link1'>
				<div class='col-md-3'>
					<div class='box box-danger'>

						<div class='box-header'>
							<div class='box-title'>$judul1</div>
						</div>

						<div class='box-body'>
							<img src='$foto1' width=100%>
						</div>

						<div class='box-footer'>
							Lihat Selengkapnya
						</div>

					</div>
				</div>
			</a>
			
			<a href='$link2'>
				<div class='col-md-3'>
					<div class='box box-danger'>

						<div class='box-header'>
							<div class='box-title'>$judul2</div>
						</div>

						<div class='box-body'>
							<img src='$foto2' width=100%>
						</div>

						<div class='box-footer'>
							Lihat Selengkapnya
						</div>

					</div>
				</div>
			</a>
			
			<a href='$link3'>
				<div class='col-md-3'>
					<div class='box box-danger'>

						<div class='box-header'>
							<div class='box-title'>$judul3</div>
						</div>

						<div class='box-body'>
							<img src='$foto3' width=100%>
						</div>

						<div class='box-footer'>
							Lihat Selengkapnya
						</div>

					</div>
				</div>
			</a>
			
			<a href='$link4'>
				<div class='col-md-3'>
					<div class='box box-danger'>

						<div class='box-header'>
							<div class='box-title'>$judul4</div>
						</div>

						<div class='box-body'>
							<img src='$foto4' width=100%>
						</div>

						<div class='box-footer'>
							Lihat Selengkapnya
						</div>

					</div>
				</div>
			</a>",

			'sub_judul_2' => "",
			'sub_judul_3' => ""
			);

		//---- Load Menu
		$this->render_page_siswa('siswa/materi', $data);
	}
	function pengenalan_gambar_suasana()
	{
		$judul_utama	= "Pengenalan Gambar Suasana";
		$judul_materi	= "Suasana";
		$link_materi	= "suasana";

		$gambar1	= "Tidak ada data.";
		$gambar2	= "";

		$materi1	= anchor('siswa/pengenalan_gambar_suasana'		, '1. Pengenalan Gambar Suasana'			, 'class="page page-materi aktif"');
		$materi2	= anchor('siswa/gambar_suasana_sederhana'		, '2. Gambar Suasana Sederhana'				, 'class="page page-materi"');
		$materi3	= anchor('siswa/gambar_suasana_sudut_pandang_1'	, '3. Gambar Suasana Sudut Pandang Part 1'	, 'class="page page-materi"');
		$materi4	= anchor('siswa/gambar_suasana_sudut_pandang_2'	, '4. Gambar Suasana Sudut Pandang Part 2'	, 'class="page page-materi"');

		$video1		= "<source src=" . base_url('assets/videos/suasana/PENGENALAN_GAMBAR_SUASANA.mp4') . " type='video/mp4'>";

		$data = array(
			'link_judul_materi'	=> $link_materi,
			'judul_materi'		=> $judul_materi,
			'judul' 			=> $judul_utama,
			'video'				=> $video1,
			'list_sub_materi'	=> $materi1.$materi2.$materi3.$materi4,
			'materi'			=> $gambar1.$gambar2
		);

		$this->render_page_siswa('siswa/sub_materi', $data);
	}
	function gambar_suasana_sederhana()
	{
		$judul_utama	= "Gambar Suasana Sederhana";
		$judul_materi	= "Suasana";
		$link_materi	= "suasana";

		$gambar1	= "Tidak ada data.";
		$gambar2	= "";

		$materi1	= anchor('siswa/pengenalan_gambar_suasana'		, '1. Pengenalan Gambar Suasana'			, 'class="page page-materi"');
		$materi2	= anchor('siswa/gambar_suasana_sederhana'		, '2. Gambar Suasana Sederhana'				, 'class="page page-materi aktif"');
		$materi3	= anchor('siswa/gambar_suasana_sudut_pandang_1'	, '3. Gambar Suasana Sudut Pandang Part 1'	, 'class="page page-materi"');
		$materi4	= anchor('siswa/gambar_suasana_sudut_pandang_2'	, '4. Gambar Suasana Sudut Pandang Part 2'	, 'class="page page-materi"');

		$video1		= "<source src=" . base_url('assets/videos/suasana/GAMBAR_SUASANA_SEDERHANA.mp4') . " type='video/mp4'>";

		$data = array(
			'link_judul_materi'	=> $link_materi,
			'judul_materi'		=> $judul_materi,
			'judul' 			=> $judul_utama,
			'video'				=> $video1,
			'list_sub_materi'	=> $materi1.$materi2.$materi3.$materi4,
			'materi'			=> $gambar1.$gambar2
		);

		$this->render_page_siswa('siswa/sub_materi', $data);
	}

	function gambar_suasana_sudut_pandang_1()
	{
		$judul_utama	= "Gambar Suasana Sudut Pandang Part 1";
		$judul_materi	= "Suasana";
		$link_materi	= "suasana";

		$gambar1	= "Tidak ada data.";
		$gambar2	= "";

		$materi1	= anchor('siswa/pengenalan_gambar_suasana'		, '1. Pengenalan Gambar Suasana'			, 'class="page page-materi"');
		$materi2	= anchor('siswa/gambar_suasana_sederhana'		, '2. Gambar Suasana Sederhana'				, 'class="page page-materi"');
		$materi3	= anchor('siswa/gambar_suasana_sudut_pandang_1'	, '3. Gambar Suasana Sudut Pandang Part 1'	, 'class="page page-materi aktif"');
		$materi4	= anchor('siswa/gambar_suasana_sudut_pandang_2'	, '4. Gambar Suasana Sudut Pandang Part 2'	, 'class="page page-materi"');

		$video1		= "<source src=" . base_url('assets/videos/suasana/GAMBAR_SUASANA_SUDUT_PANDANG_PART_1.mp4') . " type='video/mp4'>";

		$data = array(
			'link_judul_materi'	=> $link_materi,
			'judul_materi'		=> $judul_materi,
			'judul' 			=> $judul_utama,
			'video'				=> $video1,
			'list_sub_materi'	=> $materi1.$materi2.$materi3.$materi4,
			'materi'			=> $gambar1.$gambar2
		);

		$this->render_page_siswa('siswa/sub_materi', $data);
	}

	function gambar_suasana_sudut_pandang_2()
	{
		$judul_utama	= "Gambar Suasana Sudut Pandang Part 2";
		$judul_materi	= "Suasana";
		$link_materi	= "suasana";

		$gambar1	= "Tidak ada data.";
		$gambar2	= "";

		$materi1	= anchor('siswa/pengenalan_gambar_suasana'		, '1. Pengenalan Gambar Suasana'			, 'class="page page-materi"');
		$materi2	= anchor('siswa/gambar_suasana_sederhana'		, '2. Gambar Suasana Sederhana'				, 'class="page page-materi"');
		$materi3	= anchor('siswa/gambar_suasana_sudut_pandang_1'	, '3. Gambar Suasana Sudut Pandang Part 1'	, 'class="page page-materi"');
		$materi4	= anchor('siswa/gambar_suasana_sudut_pandang_2'	, '4. Gambar Suasana Sudut Pandang Part 2'	, 'class="page page-materi aktif"');

		$video1		= "<source src=" . base_url('assets/videos/suasana/GAMBAR_SUASANA_SUDUT_PANDANG_PART_2.mp4') . " type='video/mp4'>";

		$data = array(
			'link_judul_materi'	=> $link_materi,
			'judul_materi'		=> $judul_materi,
			'judul' 			=> $judul_utama,
			'video'				=> $video1,
			'list_sub_materi'	=> $materi1.$materi2.$materi3.$materi4,
			'materi'			=> $gambar1.$gambar2
		);

		$this->render_page_siswa('siswa/sub_materi', $data);
	}

	/* /SUASANA ========================================= */



	/* ========================PROFIL======================== */

	function profil()
	{
		$data['judul'] = 'Profil Saya';
		$this->render_page_siswa('siswa/profil', $data);
	}

	function ubahpassword()
	{
		$data = array(
			'judul' => "Ubah Password",
			'user' =>  $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array()
		);		

		$currentPassword = md5($this->input->post('current_password'));
		$newPassword1	 = md5($this->input->post('newPassword1'));

		$this->form_validation->set_rules('current_password', 'Current Password', 'trim|required');
		$this->form_validation->set_rules('newPassword1', 'New Password', 'trim|required|min_length[3]|matches[newPassword2]');
		$this->form_validation->set_rules('newPassword2', 'Confirm New Password', 'trim|required|min_length[3]|matches[newPassword1]');
		

		if ($this->form_validation->run() == false) {
			$this->render_page_siswa('siswa/ubahpassword', $data);
		}else{
			
			if($currentPassword != $data['user']['password']){
				$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Wrong Current Password</div>');
				redirect('siswa/ubahpassword');
			}else{
				if ($currentPassword == $newPassword1) {
					$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Password baru tidak boleh sama dengan password lama</div>');
					redirect('siswa/ubahpassword');
				}else{
					$password_hash = $newPassword1;
					
					$this->db->set('password', $password_hash);
					$this->db->where('username', $this->session->userdata('username'));
					$this->db->update('user');
					
					$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Password berhasil diubah</div>');
					redirect('siswa/ubahpassword');
				}
			}
		}
		
	}

	function prosesUbahPassword()
	{
		$data['judul'] = 'Ubah Password';

		$this->form_validation->set_rules('currentPassword', 'Current Passowrd', 'trim|required|');
		$this->form_validation->set_rules('newPassword1', 'New Password', 'trim|required|min_length[3]|matches[newPassword2]');
		$this->form_validation->set_rules('newPassword2', 'Confirm New Password', 'trim|required|min_length[3]|matches[newPassword1]');
		

		if ($this->form_validation->run() == false) {
			$this->render_page_siswa('siswa/ubahpassword', $data);
		}else{
			$currentPassword = $this->input->post('currentPassword');
			if(!password_verify($currentPassword, $data['username']['password'])){
				$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Wrong Current Password</div>');
				redirect('siswa/ubahpassword');
			}
		}

		
	}

	function edit_profil()
	{
		$data['judul'] = 'Ubah Profil Saya';
		$this->render_page_siswa('siswa/p/edit_profil', $data);
	}


	function logout()
	{
		$this->session->sess_destroy();
		redirect(site_url(''));
	}
}
