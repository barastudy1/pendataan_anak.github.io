<?php

class LoginModel extends CI_Model{
	public function getMenu(){
	return $this->db->get_where("tb_nav",array('role'=>$this->session->userdata('role')));
	}
}


?>