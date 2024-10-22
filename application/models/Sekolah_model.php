<?php 

class Sekolah_model extends CI_Model{
	function __construct(){
		$this->load->database();
	}

	public function createdataSekolah($dataInsert){
		return $this->db->insert('tb_sekolah',$dataInsert);
	} 

	public function getdataSekolah(){
		$query = $this->db->get('tb_sekolah');
		return $query->result_array();
	}

	public function getDetailSekolah($kd_sekolah){
		
		$this->db->where('kd_sekolah',$kd_sekolah);
		$query = $this->db->get('tb_sekolah');
		return $query->row_array();

	}

	public function updatedataSekolah($kd_sekolah,$dataUpdate){
		$this->db->where('kd_sekolah',$kd_sekolah);
		$this->db->update('tb_sekolah',$dataUpdate);
		if($this->db->affected_rows()>0){
			return TRUE;
		}else{
			return FALSE;
		}
	}

	public function deletedataSekolah($kd_sekolah){
		$this->db->where('kd_sekolah',$kd_sekolah);
		$this->db->delete('tb_anak');
		if($this->db->affected_rows()>0){
			return TRUE;
		}else{
			return FALSE;
		}

	}
}