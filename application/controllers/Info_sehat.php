<?php

class Info_sehat extends CI_Controller{

    public function index()
    {
        
        $this->load->view('style');
        $this->load->view('informasi_s');
    }
}

?>