<?php

class Dashboard extends CI_Controller{

    public function __construct() {
        parent:: __construct();
    
        if (!isset($this->session->userdata['nim'])) {
            $this->session->set_flashdata('pesan','<div 
            class="alert alert-danger alert-dismissible fade show" role="alert">
            Maaf anda belum login!
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
            </div>');
            redirect('mentee/auth');
        }
    }

    public function index()
    {
        $data = $this->user_model_mentee->ambil_data($this->session->userdata
            ['nim']);
        $data = array(
            'nim'            => $data->nim,
            'nama_lengkap'   => $data->nama_lengkap,
            'level'          => $data->level,
        );
        $this->load->view('templates/ruanghijrah/header');
        $this->load->view('mentee/dashboard',$data);
        $this->load->view('templates/ruanghijrah/footer');
    }

}