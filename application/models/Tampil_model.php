<?php 
class Tampil_model extends CI_Model{
   public function dataanak(){
      $this->db->select('*');
      $this->db->from('tb_anak');   
      $query = $this->db->get();
      return $query;
   }

}

