<?php 

class Dukuh_model extends CI_Model{
	function __construct(){
		$this->load->database();
	}

	public function createdataDukuh($dataInsert){
		return $this->db->insert('tb_padukuhan',$dataInsert);
	} 

	public function getdataDukuh(){
		$query = $this->db->get('tb_padukuhan');
		return $query->result_array();
	}

	public function getDetailDukuh($kd_padukuhan){
		
		$this->db->where('kd_padukuhan',$kd_padukuhan);
		$query = $this->db->get('tb_padukuhan');
		return $query->row_array();

	}

	public function updatedataDukuh($kd_padukuhan,$dataUpdate){
		$this->db->where('kd_padukuhan',$kd_padukuhan);
		$this->db->update('tb_padukuhan',$dataUpdate);
		if($this->db->affected_rows()>0){
			return TRUE;
		}else{
			return FALSE;
		}
	}

	public function deletedataDukuh($kd_padukuhan){
		$this->db->where('kd_padukuhan',$kd_padukuhan);
		$this->db->delete('tb_padukuhan');
		if($this->db->affected_rows()>0){
			return TRUE;
		}else{
			return FALSE;
		}

	}
}