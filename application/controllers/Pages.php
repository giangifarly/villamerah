<?php
class Pages extends CI_Controller{
	
	public function index(){
		$this->load->view('config/header');
		$this->load->view('home');
		$this->load->view('config/footer');
	}
	
}