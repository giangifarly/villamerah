<?php
class Data_model extends CI_Model
{
	function list_siswa()
	{
		$this->db->from('user');
		$this->db->join('user_data', 'user.id_user_data = user_data.id_user_data', 'left');
		$this->db->join('jenis_kelamin', 'user_data.id_jenis_kelamin = jenis_kelamin.id_jenis_kelamin', 'left');
		$this->db->join('tahun_ajaran', 'user_data.id_tahun = tahun_ajaran.id_tahun', 'left');


		$this->db->where('level = 3 and status = 1');

		$this->db->order_by('username', 'asc');



		$query = $this->db->get();

		return $query->result();
	}

	function list_siswa_bandung()
	{
		$this->db->from('user');
		$this->db->join('user_data', 'user.id_user_data = user_data.id_user_data', 'left');
		$this->db->join('jenis_kelamin', 'user_data.id_jenis_kelamin = jenis_kelamin.id_jenis_kelamin', 'left');
		$this->db->join('tahun_ajaran', 'user_data.id_tahun = tahun_ajaran.id_tahun', 'left');


		$this->db->where('level = 3 and status = 1 and user_data.id_lokasi = 1');
		$this->db->order_by('username', 'asc');


		$query = $this->db->get();

		return $query;
	}

	function list_siswa_jaksel()
	{
		$this->db->from('user');
		$this->db->join('user_data', 'user.id_user_data = user_data.id_user_data', 'left');
		$this->db->join('jenis_kelamin', 'user_data.id_jenis_kelamin = jenis_kelamin.id_jenis_kelamin', 'left');
		$this->db->join('tahun_ajaran', 'user_data.id_tahun = tahun_ajaran.id_tahun', 'left');

		$this->db->where('level = 3 and status = 1 and user_data.id_lokasi = 2');
		$this->db->order_by('username', 'asc');


		$query = $this->db->get();

		return $query;
	}

	function list_siswa_jaktim()
	{
		$this->db->from('user');
		$this->db->join('user_data', 'user.id_user_data = user_data.id_user_data', 'left');
		$this->db->join('jenis_kelamin', 'user_data.id_jenis_kelamin = jenis_kelamin.id_jenis_kelamin', 'left');
		$this->db->join('tahun_ajaran', 'user_data.id_tahun = tahun_ajaran.id_tahun', 'left');


		$this->db->where('level = 3 and status = 1 and user_data.id_lokasi = 3');

		$this->db->order_by('username', 'asc');


		$query = $this->db->get();

		return $query;
	}

	function list_sekolah()
	{
		$this->db->from('sekolah');
		$this->db->order_by('status_sekolah', 'asc');
		$this->db->order_by('jenis_pendidikan', 'asc');
		$this->db->order_by('instansi', 'asc');
		$this->db->order_by('urutan', 'asc');

		$query = $this->db->get();
		return $query;
	}
	function getJenisKelamin()
	{
		$query = $this->db->get('jenis_kelamin');
		return $query;
	}
	function getProgram()
	{
		$query = $this->db->get('program');
		return $query;
	}
	function getEvent()
	{
		$query = $this->db->get('event');
		return $query;
	}
	function getKelas()
	{
		$query = $this->db->get('kelas');
		return $query;
	}
	function getTahunAjaran()
	{
		$this->db->from('tahun_ajaran');
		$this->db->order_by('id_tahun', 'desc');
		$query = $this->db->get();
		return $query;
	}
	function getLokasiBelajar()
	{
		$query = $this->db->get('lokasi_belajar');
		return $query;
	}

	function getKalenderAkademik()
	{
		$query = $this->db->get('event');
		return $query;
	}

	function list_pending_siswa()
	{
		$this->db->from('user');
		$this->db->join('user_data', 'user.id_user_data = user_data.id_user_data', 'left');
		$this->db->join('jenis_kelamin', 'user_data.id_jenis_kelamin = jenis_kelamin.id_jenis_kelamin', 'left');
		$this->db->join('tahun_ajaran', 'user_data.id_tahun = tahun_ajaran.id_tahun', 'left');


		$this->db->where('level = 3 and status = 0');


		$query = $this->db->get();

		return $query->result();
	}

	// Function untuk Search Data
	function fetch_data($query)
	{
		$this->db->from('user');
		$this->db->join('user_data', 'user.id_user_data = user_data.id_user_data', 'left');
		$this->db->join('jenis_kelamin', 'user_data.id_jenis_kelamin = jenis_kelamin.id_jenis_kelamin', 'left');
		$this->db->join('tahun_ajaran', 'user_data.id_tahun = tahun_ajaran.id_tahun', 'left');
		$this->db->join('lokasi_belajar', 'user_data.id_lokasi = lokasi_belajar.id_lokasi', 'left');
		$this->db->join('sekolah', 'user_data.id_sekolah = sekolah.id_sekolah', 'left');

		$this->db->where("level = 3 and status = 1");

		$this->db->order_by('user_data.id_lokasi', 'asc');
		$this->db->order_by('user_data.nama');

		if ($query != '') {
			$this->db->like('user_data.nama', $query);
		}
		$this->db->order_by('user_data.nama', 'DESC');
		return $this->db->get();
	}

	function fetch_data_bandung($query)
	{
		$this->db->from('user');
		$this->db->join('user_data', 'user.id_user_data = user_data.id_user_data', 'left');
		$this->db->join('jenis_kelamin', 'user_data.id_jenis_kelamin = jenis_kelamin.id_jenis_kelamin', 'left');
		$this->db->join('tahun_ajaran', 'user_data.id_tahun = tahun_ajaran.id_tahun', 'left');
		$this->db->join('lokasi_belajar', 'user_data.id_lokasi = lokasi_belajar.id_lokasi', 'left');
		$this->db->join('sekolah', 'user_data.id_sekolah = sekolah.id_sekolah', 'left');

		$this->db->where('level = 3 and status = 1 and user_data.id_lokasi = 1');

		$this->db->order_by('user_data.id_lokasi', 'asc');
		$this->db->order_by('user_data.nama');

		if ($query != '') {
			$this->db->like('user_data.nama', $query);
		}
		$this->db->order_by('user_data.nama', 'DESC');
		return $this->db->get();
	}

	function fetch_data_jaksel($query)
	{
		$this->db->from('user');
		$this->db->join('user_data', 'user.id_user_data = user_data.id_user_data', 'left');
		$this->db->join('jenis_kelamin', 'user_data.id_jenis_kelamin = jenis_kelamin.id_jenis_kelamin', 'left');
		$this->db->join('tahun_ajaran', 'user_data.id_tahun = tahun_ajaran.id_tahun', 'left');
		$this->db->join('lokasi_belajar', 'user_data.id_lokasi = lokasi_belajar.id_lokasi', 'left');
		$this->db->join('sekolah', 'user_data.id_sekolah = sekolah.id_sekolah', 'left');

		$this->db->where('level = 3 and status = 1 and user_data.id_lokasi = 2');

		$this->db->order_by('user_data.id_lokasi', 'asc');
		$this->db->order_by('user_data.nama');

		if ($query != '') {
			$this->db->like('user_data.nama', $query);
		}
		$this->db->order_by('user_data.nama', 'DESC');
		return $this->db->get();
	}

	function fetch_data_jaktim($query)
	{
		$this->db->from('user');
		$this->db->join('user_data', 'user.id_user_data = user_data.id_user_data', 'left');
		$this->db->join('jenis_kelamin', 'user_data.id_jenis_kelamin = jenis_kelamin.id_jenis_kelamin', 'left');
		$this->db->join('tahun_ajaran', 'user_data.id_tahun = tahun_ajaran.id_tahun', 'left');
		$this->db->join('lokasi_belajar', 'user_data.id_lokasi = lokasi_belajar.id_lokasi', 'left');
		$this->db->join('sekolah', 'user_data.id_sekolah = sekolah.id_sekolah', 'left'); 

		$this->db->where('level = 3 and status = 1 and user_data.id_lokasi = 3');

		$this->db->order_by('user_data.id_lokasi', 'asc');
		$this->db->order_by('user_data.nama');

		if ($query != '') {
			$this->db->like('user_data.nama', $query);
		}
		$this->db->order_by('user_data.nama', 'DESC');
		return $this->db->get();
	}

	function fetch_sekolah($query)
	{

		$this->db->select('*');
		$this->db->from('sekolah');

		if ($query != '') {
			$this->db->like('jenis_pendidikan,status_pendidikan,urutan,instansi', $query);
		}
		$this->db->order_by('status_sekolah', 'asc');
		$this->db->order_by('jenis_pendidikan', 'asc');
		$this->db->order_by('instansi', 'asc');
		$this->db->order_by('urutan', 'asc');

		return $this->db->get();
	}


	//Function untuk mengecek jika ada data yang sama
	function checkEmail($email)
	{
		$this->db->from('user');
		$this->db->where("email = '$email' ");
		$query = $this->db->get();

		return $query;
	}

	function checkIdUser()
	{
		$id_first =  $this->db->query("SELECT MAX(LEFT(id_user,5)) AS id_max FROM user");
		$id = $this->db->query("SELECT MAX(RIGHT(id_user,4)) AS id_max FROM user");
		$id_reg = "";

		if ($id_first->num_rows() > 0) {
			if ($id->num_rows() > 0) {
				foreach ($id->result() as $k) {
					$tmp = ((int) $k->id_max) + 1;
					$id_reg = sprintf("%04s", $tmp);
				}
			} else {
				$id_reg = "0001";
			}
		} else {
			$id_reg = "0001";
		}

		return $id_reg;
	}

	//Function untuk menambah data
	function insertUser($datauser)
	{
		$this->db->insert('user', $datauser);
	}
	function insertUserData($datauserdata)
	{
		$this->db->insert('user_data', $datauserdata);
	}

	function insertSekolah($sekolah)
	{
		$this->db->insert('sekolah', $sekolah);
	}
	function insertEvent($event)
	{
		$this->db->insert('event', $event);
	}
	function insertKaryaSiswa($karyasiswa)
	{
		$this->db->insert('karya_siswa', $karyasiswa);
	}

	//Function untuk Mengubah data

	function get_users($id_user)
	{

		$this->db->from('user');
		$this->db->join('user_data', 'user.id_user_data = user_data.id_user_data', 'left');
		$this->db->join('jenis_kelamin', 'user_data.id_jenis_kelamin = jenis_kelamin.id_jenis_kelamin', 'left');
		$this->db->join('tahun_ajaran', 'user_data.id_tahun = tahun_ajaran.id_tahun', 'left');

		$this->db->where(array('id_user' => $id_user));

		$query = $this->db->get();

		return $query;
	}

	function edit_data($where, $table)
	{
		return $this->db->get_where($table, $where);
	}

	function getSekolahEdit($id_sekolah)
	{
		$this->db->from('sekolah');
		$this->db->where(array('id_sekolah' => $id_sekolah));

		$query = $this->db->get();

		return $query;
	}
	function edit_sekolah($where, $table)
	{
		return $this->db->get_where($table, $where);
	}

	//Function untuk upload

	public function upload_file_karya_siswa()
	{
		$config['upload_path'] 		= './karya_siswa/';
		$config['allowed_types'] 	= 'gif|jpg|jpeg|png';
		$config['file_name']	 	= $this->uri->segment(3);
		$config['overwrite'] 		= 'false';

		$this->load->library('upload', $config);

		if (! $this->upload->do_upload('image')) {
			$error = array('error' => $this->upload->display_errors());
			$this->load->view('admin/siswa_profil', $error);
			
		}
	}
}
