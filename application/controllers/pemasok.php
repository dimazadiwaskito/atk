<?php
Class Pemasok extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->model('m_pemasok');
		$this->load->library(array('template'));

	}

	function index()
	{
	$data['judulapp']="Data - Data Pemasok";
	$data['list']=$this->m_pemasok->readdata()->result();
	$this->template->display('pemasok/index',$data);
	}
	function tambahdata()
	{
		if($this->input->post('submit'))
		{
			$this->m_pemasok->adddata();
			redirect('pemasok');
		}
		else
		{	
			$data['judulapp']="Silahkan tambahkan Data Pemasok";
			$this->template->display('pemasok/formadd',$data);
		}
	}
	function editdata()
	{
		if (isset($_POST['submit']))
		{

			$this->m_pemasok->updatedata($id);
			redirect('pemasok');
			
		}
		else
		{
			$id=$this->uri->segment(3);
			$data['judulapp']="EDIT DATA";
			$data['list']=$this->m_pemasok->selectdata($id);
			$this->template->display('pemasok/formedit',$data);
		}
	}
	function hapusdata($id)
	{
		$id=$this->uri->segment(3);
		$this->m_pemasok->deletedata($id);
		redirect('pemasok');
	}

}
?>