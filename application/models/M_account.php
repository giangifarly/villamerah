<?php 
class M_account extends CI_Model{

	public function __construct(){
		parent::__construct();	
	}

	function check_username($username){
		$query = $this->db->query("SELECT username FROM user WHERE username='$username'");
		return $query;
	}

	public function check_user($username, $email, $password) {
		$query = $this->db->query("select * from user where username ='$username' and password='$password' or email='$email' and password='$password'");
		return $query;
	}

	public function retrieve_data(){

		$id = $this->session->userdata('id_user');
		
		$this->db->from('user');
		$this->db->join('user_data', 'user.id_user_data = user_data.id_user_data', 'left');
		$this->db->where('user.id_user', $id);
		

		$query = $this->db->get();

		return $query;
	}

	public function daftar($datauser){
		$this->db->insert('user',$datauser);
	}

	public function siswa($datasiswa){
		$this->db->insert('siswa',$datasiswa);
	}
	
}
