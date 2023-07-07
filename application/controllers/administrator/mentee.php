<?php

class Mentee extends CI_Controller{

    public function index()
    {
        $data['mentee'] = $this->mentee_model->tampil_data('mentee')->result();
        $data['kelompok'] = $this->kelompok_model->tampil_data('kelompok')->result();
        $this->load->view('templates_administrator/header');
        $this->load->view('templates_administrator/sidebar');
        $this->load->view('administrator/mentee',$data);
        $this->load->view('templates_administrator/footer');
    }

    public function detail($id)
    {
        $data['detail'] = $this->mentee_model->ambil_id_mentee($id);
        $this->load->view('templates_administrator/header');
        $this->load->view('templates_administrator/sidebar');
        $this->load->view('administrator/mentee_detail',$data);
        $this->load->view('templates_administrator/footer');
    }
}