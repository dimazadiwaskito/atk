<?php
Class M_pemasok extends CI_Model
{
	function __construct()
	{
		parent::__construct();
		
	}
	function readdata()
	{
		return $this->db->get('tbl_pemasok');
	}
	function adddata()
	{
		$id_pemasok=$this->input->post('id_pemasok');
		$pemasok=$this->input->post('pemasok');
		$data=array('id_pemasok'=>$id_pemasok,'pemasok'=>$pemasok);

				$this->db->insert('tbl_pemasok',$data);
	}
	function selectdata($id)
	{
		return $this->db->get_where('tbl_pemasok',array('id_pemasok'=>$id))->row_array();
	}
	function updatedata()
	{
		$data=array('id_pemasok'=>$this->input->post('id_pemasok'),
			'pemasok'=>$this->input->post('pemasok'));
		$this->db->where('id_pemasok',$this->input->post('id_pemasok'));
		$this->db->update('tbl_pemasok',$data);
	}
	function deletedata($id)
	{
		return $this->db->delete('tbl_pemasok',array('id_pemasok'=>$id));
	}
}
?>