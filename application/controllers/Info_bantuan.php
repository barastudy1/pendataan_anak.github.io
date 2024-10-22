<?php

class Info_bantuan extends CI_Controller{

    public function index()
    {
        
        $this->load->view('style');
        $this->load->view('informasi_bantuan');
    }
}

?>