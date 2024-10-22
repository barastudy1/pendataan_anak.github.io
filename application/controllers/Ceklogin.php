<?php
class Ceklogin extends CI_Controller{

	public function index()
	{
		$this->load->view('v_login');

		$username = $this->input->post('username');
		$password = $this->input->post('password');

		if(isset($_POST['logs'])){
			if($username == '' && $password == ''){
				$this->session->set_flashdata('pesan','<div class="alert-denger" role="alert">Username dan Password Tidak Boleh Kosong</div>');
				redirect('v_login');
			}else{
				$this->_ceklogin();
			}
		}
	}

	private function _ceklogin()
	{
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$user = $this->db->get_where('tb_pengguna',['username'=>$username])->row_array();

		if($user){
			if(password_verify($password, $user['password']))
		{

			$data = [
				'username' => $user['username'],
				'role' => $user['role']
			];

			$this->session->set_userdata($data);
			//$this->session->set_flashdata('pesan','<div class="alert-success" role="alert">Login Berhasil</div>');
			redirect ('beranda');

		}else{
			redirect('v_login');
		}
	}
	}

	public function logout(){

	$this->session->sess_destroy();
        $url=base_url('');
        redirect($url);
}
}


?>