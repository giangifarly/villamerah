<?php

class User extends CI_Controller {

	public function __construct() {
		parent::__construct();
		//load m_account.php
		$this->load->model('m_account');
		$this->load->model('m_siswa');
		//check the username is already set up or not
		if ($this->session->userdata('id_user')) {
			if ($this->session->userdata('status')!=1) {

				$this->session->unset_userdata(array('id_user'));


				$this->session->set_flashdata('result_login', '<div class="alert alert-danger">Akun ada belum aktif!</div>');


				redirect('');
			}
		}

	}


	//function for processing login form
	public function login_process() {
		$username = $this->input->post('username');
		$email	  = $this->input->post('username');
		$password = md5($this->input->post('password'));
		$get_id	  = $this->session->userdata('id_user');

		$result = $this->m_account->check_user($username, $email, $password);

		if ($result->num_rows() > 0) {
			foreach ($result->result() as $row) {
				$id_user = $row->id_user;
				$username = $row->username;
				$password = $row->password;
				$status = $row->status;
				$email = $row->email;
				$level = $row->level;
				$id_user_data = $row->id_user_data;
			}

			$newdata = array(
				'id_user' => $id_user,
				'username' => $username,
				'password' => $password,
				'status' => $status,
				'email' => $email,
				'level' => $level,
				'id_user_data' => $id_user_data
				
			);

			//set up session data
			$this->session->set_userdata($newdata);

			if ($this->session->userdata('id_user')) {
				if ($this->session->userdata('status')!=1) {

					$this->session->unset_userdata(array('username'));
					$this->session->set_flashdata('result_login', '<div class="alert alert-danger">Akun ada belum aktif! Mohon untuk menghubungi Administrasi</div>');
					
					redirect('');
				}
			}

			if ($this->session->userdata('level') == 1) {
				$this->m_account->retrieve_data()->result();
				redirect('admin');
			} else if ($this->session->userdata('level') == 2) {
				redirect('guru');
			} else if ($this->session->userdata('level') == 3) {
				$this->m_account->retrieve_data()->result();
				
				redirect('siswa');
			}

		} else {
			$this->session->set_flashdata('result_login', '<div class="alert alert-danger">Username atau Password yang anda masukkan salah!</div>');
			redirect('');
		}
	}

// FUNCTION REGISTRATION

	public function register() {
		$level = 3;
		$status = 0;
		$username = $this->input->post('username');

		$result = $this->m_account->check_username($username);


		$this->form_validation->set_rules('name', 'Name','required');
		$this->form_validation->set_rules('email', 'Email','required|valid_email');
		$this->form_validation->set_rules('username', 'Username','required');
		$this->form_validation->set_rules('password','Password','required|min_length[8]');
		$this->form_validation->set_rules('password_conf','Password Confirm','required|matches[password]');



		if($this->form_validation->run() == FALSE) {
			$this->load->view('config/header');
			$this->load->view('home');
			$this->load->view('config/footer');
		}else{

			if ($result > 0) {
				$this->session->set_flashdata('error_register','<div class="alert alert-danger alert-sm">Username Anda Sudah digunakan. Harap mencoba Username lain.</div>');
				redirect('register');
			}

			$datauser['nama']   	=    $this->input->post('name');
			$datauser['username']	=    $this->input->post('username');
			$datauser['email']  	=    $this->input->post('email');
			$datauser['password']	=    md5($this->input->post('password'));
			$datauser['level']  	=    $level;
			$datauser['status']		=	 $status;

			$this->m_account->daftar($datauser);
			$this->session->set_flashdata('result_register', '<div class="alert alert-success">Registrasi Berhasil! Silahkan untuk Login</div>');
			redirect('register');
		}
	}


}
