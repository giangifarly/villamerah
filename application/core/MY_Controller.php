<?php if (!defined('BASEPATH'))
	exit('No direct script access allowed');

class MY_Controller extends CI_Controller
{

	function render_page_admin($content, $data = null)
	{
		$this->load->model('data_model');
		$this->load->model('jumlah_model');

		$data['error'] 					= '';
		$data['username'] 				= $this->session->userdata('username');
		$data['pending_siswa']			= $this->data_model->list_pending_siswa();

		$data['jumlahadmin'] 			= $this->jumlah_model->jumlahadmin();
		$data['jumlahsiswa'] 			= $this->jumlah_model->jumlahsiswa();
		$data['jumlahsiswaBandung'] 	= $this->jumlah_model->jumlahsiswaBandung();
		$data['jumlahsiswa_pending']	= $this->jumlah_model->jumlahsiswa_pending();
		$data['jumlahsiswa_ban'] 		= $this->jumlah_model->jumlahsiswa_ban();

		$data['program']				= $this->data_model->getProgram()->result();
		$data['kelas']					= $this->data_model->getKelas()->result();
		$data['list_sekolah']			= $this->data_model->list_sekolah()->result();
		$data['jenis_kelamin']			= $this->data_model->getJenisKelamin()->result();
		$data['tahun_ajaran']			= $this->data_model->getTahunAjaran()->result();
		$data['lokasi_belajar']			= $this->data_model->getLokasiBelajar()->result();
		$data['kalender_akademik']		= $this->data_model->getKalenderAkademik()->result();

		$data['header'] 				= $this->load->view('admin/config/header');
		$data['content'] 				= $this->load->view($content, $data);
		$data['footer']					= $this->load->view('admin/config/footer');


		$this->load->view('admin/index', $data);
	}


	function render_page_siswa($content, $data = null)
	{
		$this->load->model('m_siswa');

		$data['error']		= '';
		$data['username']	= $this->session->userdata('username');
		
		$data['id']			= $this->session->userdata('id_user');
		$data['data_siswa']	= $this->m_siswa->data_siswa()->result();

		$data['header']		= $this->load->view('siswa/config/header');
		$data['content']	= $this->load->view($content, $data);
		$data['footer']		= $this->load->view('siswa/config/footer');

		$this->load->view('siswa/index', $data);
	}
}
