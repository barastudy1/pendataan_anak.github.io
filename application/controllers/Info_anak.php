<?php

class Info_anak extends CI_Controller{

    public function index()
    {
        
        $this->load->view('style');
        $this->load->view('informasi_anak');
    }
}

?>