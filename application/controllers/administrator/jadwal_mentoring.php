<?php

class Jadwal_mentoring extends CI_Controller{
    public function index()
    {

        $this->load->view('templates_administrator/header');
        $this->load->view('templates_administrator/sidebar');
        $this->load->view('administrator/jadwal_mentoring');
        $this->load->view('templates_administrator/footer');

    }
}

?>