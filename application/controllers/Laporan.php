<?php

class Laporan extends CI_Controller{

	public function index()
	{
		$this->load->model('LoginModel');
		$data['menu'] = $this->LoginModel->getMenu()->result();
		$this->load->view('style');
		$this->load->view('v_laporan',$data);
	}
}

?>