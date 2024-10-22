<?php 

class Anak_model extends CI_Model{
	function __construct(){
		$this->load->database();
	}

	public function createdataAnak($dataInsert){
		return $this->db->insert('tb_anak',$dataInsert);
	} 

	public function getdataAnak(){
		$query = $this->db->get('tb_anak');
		return $query->result_array();
	}
	
	public function getDetailAnak($nik){
		
		$this->db->where('NIK',$nik);
		$query = $this->db->get('tb_anak');
		return $query->row_array();

	}

	public function updatedataAnak($nik,$dataUpdate){
		$this->db->where('NIK',$nik);
		$this->db->update('tb_anak',$dataUpdate);
		if($this->db->affected_rows()>0){
			return TRUE;
		}else{
			return FALSE;
		}
	}

	public function deletedataAnak($nik){
		$this->db->where('NIK',$nik);
		$this->db->delete('tb_anak');
		if($this->db->affected_rows()>0){
			return TRUE;
		}else{
			return FALSE;
		}

	}


	public function graph()
	{
		$this->db->select('count(*) as data, usia'); 
        $this->db->from('tb_anak');
        $this->db->group_by('usia');
        return $this->db->get()->result();
	}
 

}