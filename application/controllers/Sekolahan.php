<?php

class Sekolahan extends CI_Controller{

    public function index()
    {
        
        $this->load->view('style');
        $this->load->view('v_sekolah');
    }
}

?>