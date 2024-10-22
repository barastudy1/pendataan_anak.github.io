<?php 

class Anak extends CI_Controller{
	public function __construct(){
		parent::__construct();
		
		$this->load->model('anak_model');
		$this->load->helper('url');
	}

	public function index(){
		$this->load->view('style');
		$this->load->view('v_anak');
	}

	public function create(){
		if($this->input->post()){
			$dataInsert = array(
			"nik"=>$this->input->post('nik'),
			"Kd_sekolah"=>$this->input->post('kd_sekolah'),
			"Kd_padukuhan"=>$this->input->post('kd_padukuhan'),
			"nama_anak"=>$this->input->post('nama_anak'),
			"tempat_lahir"=>$this->input->post('tempat_lahir'),
			"tanggal_lahir"=>$this->input->post('tgl_lahir'),
			"usia"=>$this->input->post('usia'),
			"alamat"=>$this->input->post('alamat'),
			"nama_ibu"=>$this->input->post('nama_ibu'),
			"nama_ayah"=>$this->input->post('nama_ayah'),
			"pekerjaan_ibu"=>$this->input->post('pekerjaan_ibu'),
			"pekerjaan_ayah"=>$this->input->post('pekerjaan_ayah'),
			"jml_pendapatan"=>$this->input->post('jml_pendapatan'),
			);

		if($this->anak_model->createdataAnak($dataInsert)){
			echo "Berhasil Menambahkan Data Anak";
		}else{
			echo "Gagal Menambahkan Data Anak";
		}

	}else{
			$this->load->view("anak/create_dataanak");
		
		}
	}

		public function tampil(){
		$dataanak['dataanak'] = $this->anak_model->getdataAnak();
		$this->load->view('anak/list_dataanak',$dataanak);
	}

	public function update($nik){
			if($this->input->post()){
			$dataUpdate=array(
			"nik"=> $this->input->post('NIK'),
			"kd_sekolah" => $this->input->post('kd_sekolah'),
			"kd_padukuhan" => $this->input->post('kd_padukuhan'),
			"nama_anak" => $this->input->post('nama_anak'),
			"tempat_lahir" => $this->input->post('tempat_lahir'),
			"tanggal_lahir" => $this->input->post('tanggal_lahir'),
			"alamat"=>$this->input->post('alamat'),
			"nama_ibu" => $this->input->post('nama_ibu'),
			"nama_ayah" => $this->input->post('nama_ayah'),
			"pekerjaan_ibu" => $this->input->post('pekerjaan_ibu'),
			"pekerjaan_ayah" => $this->input->post('pekerjaan_ayah'),
			"jml_pendapatan" => $this->input->post('jml_pendapatan'),);
			
			if($this->anak_model->updatedataAnak($nik,$dataUpdate)){
			echo "Berhasil Mengubah Data Anak";
		}else{
			echo "Gagal Mengubah Data Anak";
		}

	}else{
			$dataanak['dataanak'] = $this->anak_model->getDetailAnak($nik);
			$this->load->view("anak/update_anak",$dataanak);
		
		}
	}
			
	

	public function delete($nik){
		if($this->Tampil_model->deletedataAnak($nik)){
			echo "Sukses Menghapus Data Anak";
		}else{
			echo "Gagal menghapus";
		}
	}

	public function grafik()
	{
		$data['graph'] = $this->anak_model->graph();
		$this->load->view('G_anak', $data);
	}

}