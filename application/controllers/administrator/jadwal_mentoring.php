<?php

class Jadwal_mentoring extends CI_Controller{
    public function index()
    {
        $data['jadwal_mentoring'] = $this->kelompok_model->tampil_data('jadwal_mentoring')->result();
        $this->load->view('templates_administrator/header');
        $this->load->view('templates_administrator/sidebar');
        $this->load->view('administrator/jadwal_mentoring', $data);
        $this->load->view('templates_administrator/footer');

    }
}

?>