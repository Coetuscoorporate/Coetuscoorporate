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
        $this->load->model('myaccount_model_mentee'); // Memuat model di sini
    }

    public function index()
    {
        $data = $this->myaccount_model_mentee->ambil_data($this->session->userdata['nim']);
        $data = array(
            'nim'            => $data->nim,
            'password'   => $data->password,
            'level'          => $data->level,
            'nama_lengkap'          => $data->nama_lengkap,
            'alamat'          => $data->alamat,
            'email'          => $data->email,
            'telepon'          => $data->telepon,
            'tempat_lahir'          => $data->tempat_lahir,
            'tanggal_lahir'          => $data->tanggal_lahir,
            'jenis_kelamin'          => $data->jenis_kelamin,
            'nama_kelompok'          => $data->nama_kelompok,
            'nama_jurusan'          => $data->nama_jurusan,
            'photo'          => $data->photo,
        );
        $this->load->view('mentee/myaccount',$data);
        $this->load->view('templates/ruanghijrah/footer');

     
    }

    public function Jadwal_mentoring()
    {

        $data = $this->myaccount_model_mentee->jadwal_mentoring($this->session->userdata['nama_kelompok']);
        $data = array(
            'nama_mentor'            => $data->nama_mentor,
            'judul_materi'   => $data->judul_materi,
            'nama_kelompok'          => $data->nama_kelompok,
            'waktu'          => $data->waktu,
            'Tempat'          => $data->Tempat,
            
        );
        $this->load->view('mentee/jadwal_mentee',$data);
        $this->load->view('templates/ruanghijrah/footer');
    }

    public function materi()
    {

        $data['materi'] = $this->myaccount_model_mentee->materi()->result();
        
        
       

        $this->load->view('mentee/materi',$data);
        $this->load->view('templates/ruanghijrah/footer');
    }
    


}