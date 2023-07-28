<?php

class Jadwal_mentoring extends CI_Controller{
    public function index()
    {
        $data['jadwal_mentoring'] = $this->mentor_jadwal_model->tampil_data('jadwal_mentoring')->result();
        $this->load->view('templates_mentor/header');
        $this->load->view('templates_mentor/sidebar');
        $this->load->view('mentor/jadwal_mentoring', $data);
        $this->load->view('templates_mentor/footer');

    }

  
}