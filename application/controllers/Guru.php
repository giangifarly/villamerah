<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Guru extends CI_Controller{

	public function __construct(){
		parent::__construct();
		if ($this->session->userdata('username')=="") {
			redirect('');
		}elseif($this->session->userdata('level') == 1){
            redirect('admin');
        }elseif($this->session->userdata('level') == 3){
            redirect('siswa');
        }
	}

	public function index() {
		$this->load->model('data_model');
		$data['user'] = $this->data_model->list_user()->result();
		$data['error'] = '';
		$data['username'] = $this->session->userdata('username');

		$this->load->view('guru/config/header');
		$this->load->view('guru/index', $data);
        $this->load->view('guru/config/footer');
	}

	function logout(){	
		$this->session->sess_destroy();
		redirect(site_url(''));
	}
}
