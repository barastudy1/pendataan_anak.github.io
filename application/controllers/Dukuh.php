<?php 

class Dukuh extends CI_Controller{
	public function __construct(){
		parent::__construct();
		$this->load->model('dukuh_model');
		$this->load->helper('url');
	}

	public function index(){
		$this->load->view('style');
		$this->load->view('v_dukuh');
	}

	public function create(){
		if($this->input->post()){
			$dataInsert = array(
			"Kd_padukuhan"=>$this->input->post('kd_padukuhan'),
			"nama_padukuhan"=>$this->input->post('nama_padukuhan'),
			);

		if($this->dukuh_model->createdataDukuh($dataInsert)){
			echo "Berhasil Menambahkan Data Dukuh";
		}else{
			echo "Gagal Menambahkan Data Dukuh";
		}

	}else{
			$this->load->view("dukuh/create_dukuh");
		
		}
	}

		public function tampil(){
		$datadukuh['datadukuh'] = $this->dukuh_model->getdataDukuh();
		$this->load->view('dukuh/list_datadukuh',$datadukuh);
	}

	public function tampil2(){
		$this->load->view('v_home',$datadukuh);
	}

	public function update($kd_padukuhan){
		if($this->input->post()){
			$dataUpdate = array(
			"Kd_padukuhan"=>$this->input->post('kd_padukuhan'),
			"nama_anak"=>$this->input->post('nama_padukuhan'),
			);
		if($this->dukuh_model->updatedataDukuh($kd_padukuhan,$dataUpdate)){
			echo "Berhasil Update Data Dukuh";
			}else{ echo "Gagal Update Data Dukuh";}

		}else{
			$dataUpdate['datadukuh'] = $this->dukuh_model->getDetailDukuh($kd_padukuhan);
			$this->load->view("dukuh/update_dukuh",$dataUpdate);
		}
	
	}

	public function delete($kd_padukuhan){
		if($this->dukuh_model->deletedataDukuh($kd_padukuhan)){
			echo "Sukses Menghapus Data Dukuh";
		}else{
			echo "Gagal menghapus";
		}
	}

}