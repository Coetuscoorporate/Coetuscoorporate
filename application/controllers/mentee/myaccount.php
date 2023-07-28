<?php

class Myaccount extends CI_Controller{

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
        $data = $this->myaccount_model_mentee->ambil_data($this->session->userdata
            ['nim']);
        $data = array(
            'nim'   => $data->nim,
            'level' => $data->level,
        );
        $this->load->view('mentee/myaccount',$data);
        $this->load->view('templates/ruanghijrah/footer');

    }
}