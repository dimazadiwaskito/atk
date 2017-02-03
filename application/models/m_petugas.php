<?php
class M_petugas extends CI_Model{
	private $table="tbl_user";

	function cek($username,$password){
		$this->db->where("username",$username);
		$this->db->where("password",$password);
		return $this->db->get("tbl_user");
	}

}


?>