<?php

class Dashboard extends CI_Controller{

    public function __construct() {
        parent:: __construct();

        if (!isset($this->session->userdata['username'])) {
            $this->session->set_flashdata('pesan','<div 
            class="alert alert-danger alert-dismissible fade show" role="alert">
            Maaf anda belum login!
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
            </div>');
            redirect('mentor/auth');
        }
    }

    public function index()
    {
        $data = $this->user_model_mentor->ambil_data($this->session->userdata
            ['username']);
        $data = array(
            'username'  => $data->username,
            'level'     => $data->level,
        );
        $this->load->view('templates_mentor/header');
        $this->load->view('templates_mentor/sidebar');
        $this->load->view('mentor/dashboard',$data);
        $this->load->view('templates_mentor/footer');

    }
}