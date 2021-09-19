<?php
class M_siswa extends CI_Model
{
	public function data_siswa()
	{
		$id_user = $this->session->userdata('id_user');

		$this->db->from('user');
		$this->db->join('user_data', 'user.id_user_data = user_data.id_user_data', 'left');
		$this->db->join('jenis_kelamin', 'user_data.id_jenis_kelamin = jenis_kelamin.id_jenis_kelamin', 'left');
		$this->db->join('tahun_ajaran', 'user_data.id_tahun = tahun_ajaran.id_tahun', 'left');
		
		
		$this->db->where("id_user = '$id_user'");
		

		$query = $this->db->get();
		
		return $query;
		
	}

	public function check_password()
	{
		$id_user = $this->session->userdata('id_user');
		$this->db->from('users');
		$this->db->where('id_user', $id_user);
		
		$query = $this->db->get();
		
		return $query->result();
	}
}
