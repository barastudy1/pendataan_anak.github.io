<?php

class Informasi extends CI_Controller{

    public function index()
    {
        
        $this->load->view('style');
        $this->load->view('informasi');
    }
}

?>