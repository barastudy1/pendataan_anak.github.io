<?php 

class Sekolah extends CI_Controller{
	public function __construct(){
		parent::__construct();
		$this->load->model('sekolah_model');
		$this->load->helper('url');
	}

	public function index(){
		$this->load->view('style');
		$this->load->view('v_sekolah');
		
	}

	public function create(){
		if($this->input->post()){
			$dataInsert = array(
			"Kd_sekolah"=>$this->input->post('kd_sekolah'),
			"nama_sekolah"=>$this->input->post('nama_sekolah'),
			"alamat_sekolah"=>$this->input->post('alamat_sekolah'),
			);

		if($this->sekolah_model->createdataSekolah($dataInsert)){
			echo "Berhasil Menambahkan Data Sekolah";
		}else{
			echo "Gagal Menambahkan Data Sekolah";
		}

	}else{
			$this->load->view("sekolah/create_datasekolah");
		
		}
	}

		public function tampil(){
		$datasekolah['datasekolah'] = $this->sekolah_model->getdataSekolah();
		$this->load->view('sekolah/list_datasekolah',$datasekolah);
	}

	public function update($kd_sekolah){
		if($this->input->post()){
			$dataUpdate = array(
			"Kd_sekolah"=>$this->input->post('kd_sekolah'),
			"nama_sekolah"=>$this->input->post('nama_sekolah'),
			"alamat_sekolah"=>$this->input->post('alamat_sekolah'),
			);
		if($this->anak_model->updatedataAnak($kd_sekolah,$dataUpdate)){
			echo "Berhasil Update Data Sekolah";
			}else{ echo "Gagal Update Data Sekolah";}

		}else{
			$dataUpdate['datasekolah'] = $this->sekolah_model->getDetailSekolah($kd_sekolah);
			$this->load->view("sekolah/update_sekolah",$dataUpdate);
		}
	
	}

	public function delete($kd_sekolah){
		if($this->sekolah_model->deletedataSekolah($nik)){
			echo "Sukses Menghapus Data Anak";
		}else{
			echo "Gagal menghapus";
		}
	}

}