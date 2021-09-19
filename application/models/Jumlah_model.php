<?php

class Jumlah_model extends CI_Model
	 {
	function jumlahadmin()
	{
		$query = $this->db->get_where('user', 'level = 1');
		if ($query->num_rows() > 0) { 
			return $query->num_rows();
		} else {
			return 0;
		}
	}
	function jumlahsiswa_pending()
	{
		$query = $this->db->get_where('user', 'status = 0');
		if ($query->num_rows() > 0) {
			return $query->num_rows();
		} else {
			return 0;
		}
	}
	function jumlahsiswa()
	{
		$query = $this->db->get_where('user', 'level = 3 and status = 1');

		if ($query->num_rows() > 0) {
			return $query->num_rows();
		} else {
			return 0;
		}
	}

	function jumlahsiswaBandung()
	{
		$this->db->from('user');
		$this->db->join('user_data', 'user.id_user_data = user_data.id_user_data', 'left');

		$this->db->where('level = 3 and status = 1 and id_lokasi = 1');

		$query = $this->db->get();

		if ($query->num_rows() > 0) {
			return $query->num_rows();
		} else {
			return 0;
		}
	}

	function jumlahsiswa_ban()
	{
		$query = $this->db->get_where('user', 'status = 2');
		if ($query->num_rows() > 0) {
			return $query->num_rows();
		} else {
			return 0;
		}
	}
}
