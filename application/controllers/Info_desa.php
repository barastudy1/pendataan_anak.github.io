<?php

class Info_desa extends CI_Controller{

    public function index()
    {
        
        $this->load->view('style');
        $this->load->view('informasi_desa');
    }
}

?>