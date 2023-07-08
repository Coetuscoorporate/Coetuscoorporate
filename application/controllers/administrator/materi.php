<?php

class Materi extends CI_Controller{

    public function index()
    {
        $data['materi'] = $this->materi_model->tampil_data('materi')->result();
        $this->load->view('templates_administrator/header');
        $this->load->view('templates_administrator/sidebar');
        $this->load->view('administrator/materi',$data);
        $this->load->view('templates_administrator/footer');

    }
}