<?php

if (!defined('BASEPATH'))
	exit('No direct script access allowed');

class Admin extends MY_Controller
{

	public function __construct()
	{
		parent::__construct();
		if ($this->session->userdata('username') == "") {
			redirect('');
		} elseif ($this->session->userdata('level') == 2) {
			redirect('guru');
		} elseif ($this->session->userdata('level') == 3) {
			redirect('siswa');
		}

		$this->load->model('data_model');
	}
	//==========================================INDEX==========================================
	public function index()
	{
		$data['judul'] = 'Beranda';
		$this->render_page_admin('admin/home', $data);
	}

	//==========================================PAGES==========================================
	public function tambah_pengguna()
	{
		$data['judul'] = 'Tambah Pengguna';
		$this->render_page_admin('admin/tambah_pengguna', $data);
	}

	public function proses_tambah_pengguna()
	{
		$id_tahun	= $this->input->post('id_tahun');
		$id_lokasi	= $this->input->post('id_lokasi');
		$id_kelas	= $this->input->post('id_kelas');
		$id_program = $this->input->post('id_program');
		$email		= $this->input->post('email');
		$reg		= $this->data_model->checkIdUser();
		$status		= $this->input->post('status');

		$checkEmail = $this->data_model->checkEmail($email);

		$id_user	= "$id_lokasi" . "$id_tahun" . "$id_kelas" . "$id_program" . "$reg";

		if ($checkEmail == false) {
			$this->session->set_flashdata('error_tambah', 'Email sudah di gunakan!');
			redirect('admin/tambah_pengguna');
		} else {
			$datauser = array(
				'id_user'		=> $id_user,
				'username' 		=> $id_user,
				'email' 		=> $email,
				'password'		=> md5($id_user),
				'level'			=> $this->input->post('level'),
				'status' 		=> $status,
				'id_user_data'	=> $id_user
			);

			$datauserdata = array(
				'id_user_data'		=> $id_user,
				'nama'				=> $this->input->post('nama'),
				'tempat_lahir'		=> $this->input->post('tempat_lahir'),
				'tgl_lahir'			=> date('Y-m-d', strtotime($this->input->post('tgl_lahir'))),
				'orang_tua'			=> $this->input->post('orang_tua'),
				'alamat'			=> $this->input->post('alamat'),
				'telepon'			=> $this->input->post('telepon'),
				'id_jenis_kelamin'	=> $this->input->post('id_jenis_kelamin'),
				'id_lokasi'			=> $id_lokasi,
				'id_tahun'			=> $id_tahun,
				'id_sekolah'		=> $this->input->post('id_sekolah')
			);

			$this->data_model->insertUserData($datauserdata);
			$this->data_model->insertUser($datauser);

			if ($status == 0) {
				redirect('Admin/pendingsiswa');
			} elseif ($status == 1) {
				if ($id_lokasi == 1) {
					redirect('Admin/siswa_bandung');
				} elseif ($id_lokasi == 2) {
					redirect('Admin/siswa_jaksel');
				} elseif ($id_lokasi == 3) {
					redirect('Admin/siswa_jaktim');
				}
			} elseif ($status == 2) {
				redirect('Admin/pendingsiswa');
			}
		}
	}

	function edit_akun($id_user)
	{
		$id_user = $this->uri->segment(3);
		$data['judul'] = 'Edit Data Siswa';
		$data['edit_akun'] = $this->data_model->get_users($id_user)->row_array();
		$this->render_page_admin('admin/edit_akun', $data);
	}

	function proses_edit_akun()
	{
		$id_user = $this->input->post('id_user');
		$datauser = array(
			'id_user'	=> $this->input->post('id_user'),
			'username' 	=> $this->input->post('username'),
			'email' 	=> $this->input->post('email'),
			'status' 	=> $this->input->post('status'),
		);

		$this->db->where('id_user', $id_user);
		$this->db->update('user', $datauser);

		$id_user_data = $this->input->post('id_user_data');
		$datauserdata = array(
			'nama'				=> $this->input->post('nama'),
			'tempat_lahir'		=> $this->input->post('tempat_lahir'),
			'tgl_lahir'			=> date('Y-m-d', strtotime($this->input->post('tgl_lahir'))),
			'orang_tua'			=> $this->input->post('orang_tua'),
			'alamat'			=> $this->input->post('alamat'),
			'telepon'			=> $this->input->post('telepon'),
			'id_jenis_kelamin'	=> $this->input->post('id_jenis_kelamin'),
			'id_lokasi'			=> $this->input->post('id_lokasi'),
		);

		$this->db->where('id_user_data', $id_user_data);
		$this->db->update('user_data', $datauserdata);

		redirect('Admin/siswa');
	}

	function edit_sekolah($id_sekolah)
	{
		$id_sekolah = $this->uri->segment(3);
		$data = array(
			'judul' 		=> 'Ubah Sekolah',
			'edit_sekolah'	=> $this->data_model->getSekolahEdit($id_sekolah)->row_array()
		);



		$this->render_page_admin('admin/edit_sekolah', $data);
	}

	function proses_edit_sekolah()
	{
		$id_sekolah = $this->input->post('id_sekolah');
		$urutan		= $this->input->post('urutan');

		if ($urutan == 0) {
			$urutan = null;
		}

		$datasekolah = array(
			'id_sekolah'		=> $id_sekolah,
			'jenis_pendidikan' 	=> $this->input->post('jenis_pendidikan'),
			'status_sekolah' 	=> $this->input->post('status_sekolah'),
			'urutan'		 	=> $urutan,
			'instansi'		 	=> $this->input->post('instansi'),
			'alamat_sekolah' 	=> $this->input->post('alamat_sekolah'),
			'telp_sekolah' 		=> $this->input->post('telp_sekolah'),
			'email_sekolah' 	=> $this->input->post('email_sekolah')
		);

		$this->db->where('id_sekolah', $id_sekolah);
		$this->db->update('sekolah', $datasekolah);

		redirect('admin/list_sekolah');
	}

	function kalender_akademik()
	{
		$data['judul'] = 'Kalender Akademik';
		$this->load->helper('tgl_indo');
		$this->render_page_admin('admin/list_event', $data);
	}
	function tambah_event()
	{
		$data['judul'] = 'Tambah Kalender Akademik';
		$this->load->helper('tgl_indo');

		$nama_event = $this->input->post('nama_event');
		$tanggal = $this->input->post('tanggal');

		$this->form_validation->set_rules('nama_event', 'Nama Acara', 'trim|required');
		$this->form_validation->set_rules('tanggal', 'Tanggal Acara', 'trim|required');

		if ($this->form_validation->run() == false) {
			$this->render_page_admin('admin/tambah_event', $data);
		} else {
			$event = array(
				'nama_event'	=> $nama_event,
				'tanggal' 		=> date('Y-m-d', strtotime($tanggal))
			);

			$this->data_model->insertEvent($event);

			redirect('admin/kalender_akademik');
		}
	}

	function edit_event()
	{
		# code...
	}

	//==========================================FETCh==========================================

	public function siswa()
	{
		$data['judul'] 		= 'Semua Siswa';
		$this->render_page_admin('admin/list_siswa', $data);
	}

	public function siswa_profil()
	{
		$id_user = $this->uri->segment(3);
		$data['edit_akun'] = $this->data_model->get_users($id_user)->row_array();
		$data['judul'] 		= 'Profil';
		$this->render_page_admin('admin/siswa_profil', $data);
	}

	function fetch_siswa()
	{
		$output = '';
		$query = '';

		if ($this->input->post('query')) {
			$query = $this->input->post('query');
		}
		$data = $this->data_model->fetch_data($query);

		$output .= '
	 	<div class="table-responsive">
			<table class="table table-bordered table-striped">
				<tr>
					<th>Nama</th>		  			
		  			<th>Email</th>
					<th>Tahun Ajaran</th>
					<th>Lokasi Belajar</th>
					<th>Asal Sekolah</th>
					<th>Username</th>
					<th colspan="2">Option Tambahan</th>
		 		</tr>
	 	';
		if ($data->num_rows() > 0) {
			foreach ($data->result() as $row) {
				$output .= '
				 <tr>
				 	<td>' . anchor('admin/siswa_profil/' . $row->id_user . '/' . $row->id_user_data, "$row->nama") . '</td>
		  			<td>' . $row->email . '</td>
					<td>' . $row->tahun_ajaran . '</td>
					<td>' . $row->lokasi_belajar . '</td>
					<td>' . $row->jenis_pendidikan . ' ' . $row->status_sekolah . ' ' . $row->urutan . ' ' . $row->instansi . '</td>
					<td>' . $row->username . '</td>
					<td>' . anchor('admin/edit_akun/' . $row->id_user, 'Edit') . '</td>
					<td>' . anchor('admin/hapus_akun/' . $row->id_user . '/' . $row->id_user_data, 'Hapus') . '</td>
				</tr>
			   ';
			}
		} else {
			$output .= '<tr>
				<td colspan="5">No Data Found</td>
			</tr>';
		}
		$output .= '</table>';
		echo $output;
	}

	public function siswa_bandung()
	{
		$data['judul'] 		= 'Siswa Bandung';
		$data['kode']		= 1;

		$this->render_page_admin('admin/siswa', $data);
	}

	function fetch_siswa_bandung()
	{
		$output = '';
		$query = '';

		if ($this->input->post('query')) {
			$query = $this->input->post('query');
		}
		$data = $this->data_model->fetch_data_bandung($query);

		$output .= '
	 	<div class="table-responsive">
			<table class="table table-bordered table-striped">
				<tr>
					<th>Nama</th>		  			
		  			<th>Email</th>
					<th>Tahun Ajaran</th>
					<th>Lokasi Belajar</th>
					<th>Asal Sekolah</th>
					<th>Username</th>
					<th colspan="2">Option Tambahan</th>
		 		</tr>
	 	';
		if ($data->num_rows() > 0) {
			foreach ($data->result() as $row) {
				$output .= '
				 <tr>
				 	<td>' . anchor('admin/siswa_profil/' . $row->id_user, "$row->nama") . '</td>
		  			<td>' . $row->email . '</td>
					<td>' . $row->tahun_ajaran . '</td>
					<td>' . $row->lokasi_belajar . '</td>
					<td>' . $row->jenis_pendidikan . ' ' . $row->status_sekolah . ' ' . $row->urutan . ' ' . $row->instansi . '</td>
					<td>' . $row->username . '</td>
					<td>' . anchor('admin/edit_akun/' . $row->id_user, 'Edit') . '</td>
					<td>' . anchor('admin/hapus_akun/' . $row->id_user . '/' . $row->id_user_data, 'Hapus') . '</td>
				</tr>
			   ';
			}
		} else {
			$output .= '<tr>
		  <td colspan="5">No Data Found</td>
		 </tr>';
		}
		$output .= '</table>';
		echo $output;
	}

	public function siswa_jaksel()
	{
		$data['judul'] 		= 'Siswa Jakarta Selatan';
		$data['dataSiswa']	= $this->data_model->list_siswa_jaksel()->result();

		$this->render_page_admin('admin/siswa', $data);
	}

	function fetch_siswa_jaksel()
	{
		$output = '';
		$query = '';

		if ($this->input->post('query')) {
			$query = $this->input->post('query');
		}
		$data = $this->data_model->fetch_data_jaksel($query);

		$output .= '
	 	<div class="table-responsive">
			<table class="table table-bordered table-striped">
				<tr>
					<th>Nama</th>		  			
		  			<th>Email</th>
					<th>Tahun Ajaran</th>
					<th>Lokasi Belajar</th>
					<th>Asal Sekolah</th>
					<th>Username</th>
					<th colspan="2">Option Tambahan</th>
		 		</tr>
	 	';
		if ($data->num_rows() > 0) {
			foreach ($data->result() as $row) {
				$output .= '
				 <tr>
				 	<td>' . anchor('admin/siswa_profil/' . $row->id_user, "$row->nama") . '</td>
		  			<td>' . $row->email . '</td>
					<td>' . $row->tahun_ajaran . '</td>
					<td>' . $row->lokasi_belajar . '</td>
					<td>' . $row->jenis_pendidikan . ' ' . $row->status_sekolah . ' ' . $row->urutan . ' ' . $row->instansi . '</td>
					<td>' . $row->username . '</td>
					<td>' . anchor('admin/edit_akun/' . $row->id_user, 'Edit') . '</td>
					<td>' . anchor('admin/hapus_akun/' . $row->id_user . '/' . $row->id_user_data, 'Hapus') . '</td>
				</tr>
			   ';
			}
		} else {
			$output .= '<tr>
		  <td colspan="5">No Data Found</td>
		 </tr>';
		}
		$output .= '</table>';
		echo $output;
	}

	public function siswa_jaktim()
	{
		$data['judul'] 		= 'Siswa Jakarta Timur';

		$this->render_page_admin('admin/siswa', $data);
	}

	function fetch_siswa_jaktim()
	{
		$output = '';
		$query = '';

		if ($this->input->post('query')) {
			$query = $this->input->post('query');
		}
		$data = $this->data_model->fetch_data_jaktim($query);

		$output .= '
	 	<div class="table-responsive">
			<table class="table table-bordered table-striped">
				<tr>
					<th>Nama</th>		  			
		  			<th>Email</th>
					<th>Tahun Ajaran</th>
					<th>Lokasi Belajar</th>
					<th>Asal Sekolah</th>
					<th>Username</th>
					<th colspan="2">Option Tambahan</th>
		 		</tr>
	 	';
		if ($data->num_rows() > 0) {
			foreach ($data->result() as $row) {
				$output .= '
				 <tr>
				 	<td>' . anchor('admin/siswa_profil/' . $row->id_user, "$row->nama") . '</td>
		  			<td>' . $row->email . '</td>
					<td>' . $row->tahun_ajaran . '</td>
					<td>' . $row->lokasi_belajar . '</td>
					<td>' . $row->jenis_pendidikan . ' ' . $row->status_sekolah . ' ' . $row->urutan . ' ' . $row->instansi . '</td>
					<td>' . $row->username . '</td>
					<td>' . anchor('admin/edit_akun/' . $row->id_user, 'Edit') . '</td>
					<td>' . anchor('admin/hapus_akun/' . $row->id_user . '/' . $row->id_user_data, 'Hapus') . '</td>
				</tr>
			   ';
			}
		} else {
			$output .= '<tr>
		  <td colspan="5">No Data Found</td>
		 </tr>';
		}
		$output .= '</table>';
		echo $output;
	}

	public function pendingsiswa()
	{
		$data['judul'] = 'Siswa Pending';
		$this->render_page_admin('admin/pendingsiswa', $data);
	}

	public function list_sekolah()
	{
		$data['judul'] = 'List Sekolah';
		$this->render_page_admin('admin/list_sekolah', $data);
	}

	function fetch_sekolah()
	{
		$output = '';
		$query = '';

		if ($this->input->post('query')) {
			$query = $this->input->post('query');
		}
		$data = $this->data_model->fetch_sekolah($query);
		$no = 1;
		$output .= '
	 	<div class="table-responsive">
			<table class="table table-bordered table-striped">
				<tr>
					<th>No</th>		  			
		  			<th>Nama Sekolah</th>
					<th>Alamat Sekolah</th>
					<th>No. Telepon</th>
					<th>Email</th>
					<th colspan="2">Option Tambahan</th>
		 		</tr>
	 	';
		if ($data->num_rows() > 0) {
			foreach ($data->result() as $row) {
				$output .= '
				 <tr>
				 	<td>' . $no . '</td>
		  			<td>' . $row->jenis_pendidikan . ' ' . $row->status_sekolah . ' ' . $row->urutan . ' ' . $row->instansi . '</td>
					<td>' . $row->alamat_sekolah . '</td>
					<td>' . $row->telp_sekolah . '</td>
					<td>' . $row->email_sekolah . '</td>
					<td>' . anchor('admin/edit_sekolah/' . $row->id_sekolah, 'Edit') . '</td>
					<td>' . anchor('admin/hapus_akun/' . $row->id_sekolah, 'Hapus') . '</td>
				</tr>
			   ';
				$no++;
			}
		} else {
			$output .= '<tr>
		  <td colspan="5">No Data Found</td>
		 </tr>';
		}
		$output .= '</table>';
		echo $output;
	}

	public function tambah_sekolah()
	{
		$data['judul'] = 'Tambah Sekolah';

		$jenis_pendidikan	= $this->input->post('jenis_pendidikan');
		$status_sekolah		= $this->input->post('status_sekolah');
		$urutan				= $this->input->post('urutan');
		$instansi			= $this->input->post('instansi');
		$alamat_sekolah 	= $this->input->post('alamat_sekolah');
		$email_sekolah		= $this->input->post('email_sekolah');
		$telp_sekolah		= $this->input->post('telp_sekolah');

		if ($urutan == 0) {
			$urutan = null;
		}

		$this->form_validation->set_rules('instansi', 'Nama Instansi/Wilayah/Kota', 'trim|required');

		if ($this->form_validation->run() == false) {
			$this->render_page_admin('admin/tambah_sekolah', $data);
		} else {
			$sekolah = array(
				'jenis_pendidikan'	=> $jenis_pendidikan,
				'status_sekolah' 	=> $status_sekolah,
				'urutan' 			=> $urutan,
				'instansi' 			=> $instansi,
				'alamat_sekolah'	=> $alamat_sekolah,
				'email_sekolah'		=> $email_sekolah,
				'telp_sekolah'		=> $telp_sekolah,
			);

			$this->data_model->insertSekolah($sekolah);

			redirect('admin/tambah_sekolah');
			redirect('admin/list_sekolah');
		}
	}
	function tambah_karya_siswa()
	{
		$id_user		= $this->input->post('id_user');
		$id_user_data 	= $this->input->post('id_user_data');
		$file 			= $this->input->post('karya_siswa');
		$tanggal_upload = $this->input->post('tanggal_upload');

		$this->form_validation->set_rules('karya_siswa', 'Karya Siswa', 'trim|required');

		$karyasiswa = array(
			'karya'				=> $file,
			'tanggal_upload'	=> $tanggal_upload,
			'id_user_data'		=> $id_user_data
		);

		$this->data_model->insertKaryaSiswa($karyasiswa);

		$site = 'admin/siswa_profil/'.$id_user.'/'.$id_user_data;
		redirect($site);
	}
	//==========================================SYSTEM==========================================

	function active_account($id_user)
	{
		$id_user	= $this->uri->segment(3);
		$status		= 1;

		$akun = array('status' => $status);

		$this->db->where('id_user', $id_user);
		$this->db->update('user', $akun);

		redirect('Admin/pendingsiswa');
	}

	function reset_password()
	{
		$id_user = $this->input->post('id_user');
		$username = md5($this->input->post('username'));
		$reset = array('password' => $username);

		$this->db->where('id_user', $id_user);
		$this->db->update('user', $reset);

		$this->session->set_flashdata('result_reset', 'Password berhasil di reset berdasarkan Username');

		redirect('admin/siswa_profil/' . $id_user);
	}

	function hapus_akun($id_user, $id_user_data)
	{
		$id_user		= $this->input->post('id_user');
		$id_user_data	= $this->input->post('id_user_data');

		$this->db->where('id_user', $id_user);
		$this->db->delete('user');
		$this->db->where('id_user_data', $id_user_data);
		$this->db->delete('user_data');

		redirect('admin/siswa');
	}

	function hapus_event($id_event)
	{
		$id_event		= $this->uri->segment(3);

		$this->db->where('id_event', $id_event);
		$this->db->delete('event');

		redirect('admin/kalender_akademik');
	}

	function logout()
	{
		$this->session->sess_destroy();
		redirect(site_url(''));
	}
}
