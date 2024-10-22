<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Anggota extends CI_Controller{
   function __construct(){
   parent::__construct();      
   $this->load->model('Tampil_model');
   $this->load->helper('url');
   }


public function index(){
   $data['dataanak'] = $this->Tampil_model->dataanak()->result();
  
   $this->load->view('Laporan',$data);
}

}

