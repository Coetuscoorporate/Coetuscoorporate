<?php

class Auth extends CI_Controller{

    public function index()
    {
        
        $this->load->view('mentee/login_mentee');
        
    }

    public function proses_login_mentee()
    {
        //menentukan form validation harus wajib diisi
        $this->form_validation->set_rules('nim','Nim','required',[
            'required' => 'NIM wajib diisi!'
    ]);
        $this->form_validation->set_rules('password','Password','required',[
            'required' => 'Password wajib diisi!'
    ]);
        if ($this->form_validation->run() == FALSE){
            $this->load->view('mentee/login_mentee');
            $this->load->view('templates/ruanghijrah/footer');
        }else {
            $nim = $this->input->post('nim');
            $password = $this->input->post('password');
            
            //membuat variabel user, pass dan cek(untuk ke databse melalui model)
            $nim = $nim;
            $pass = MD5($password);

            $cek = $this->login_model_mentee->cek_login($nim, $pass);
            
            //jika input yang dimasukan sesuai akan dalihkan ke halaman dashboard administrator
            if ($cek->num_rows() > 0){

                //membuat session untuk user pass dan email agar bisa di tampilkan
                foreach ($cek->result() as $ck){
                    $sess_data['nim'] = $ck->nim;
                    $sess_data['email'] = $ck->email;
                    $sess_data['level'] = $ck->level;
                    $sess_data['nama_kelompok'] = $ck->nama_kelompok;

                    //memanggil session datanya
                    $this->session->set_userdata($sess_data);
                }//membuat session sesuai dengan levelnya
                if($sess_data['level'] == 'mentee'){
                    redirect('mentee/dashboard');
                }else {//jika tidak sesuai akan di kembalikan ke halaman login
                        $this->session->set_flashdata('pesan','<div 
                        class="alert alert-danger alert-dismissible fade show" role="alert">
                        Maaf NIM atau Password Salah!
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                        </div>');
                        redirect('mentee/auth');
                }

            }else {
                $this->session->set_flashdata('pesan','<div 
                class="alert alert-danger alert-dismissible fade show" role="alert">
                Maaf NIM atau Password Salah!
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
                </div>');
                redirect('mentee/auth');
            }
        }
    }

    public function logout()
    {
        $this->session->sess_destroy();
        redirect('mentee/auth');
    }
}