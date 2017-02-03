<?php

class Barang extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->model('m_barang');
		$this->load->library(array('template'));

	}
	function index()
	{

	}


}

?>