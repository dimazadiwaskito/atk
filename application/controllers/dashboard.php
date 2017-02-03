<?php
class Dashboard extends CI_Controller{
	function __construct(){
		parent::__construct();
		$this->load->model('m_petugas');
		$this->load->library(array('form_validation','template'));
		if (!$this->session->userdata('username')) {
			redirect('web');
		}
	}

	function index(){
		$data['title']="Home";
		$this->template->display('dashboard/index',$data);
	}

	function logout(){
		$this->session->unset_userdata('username');
		redirect('web');
	}
}

?>