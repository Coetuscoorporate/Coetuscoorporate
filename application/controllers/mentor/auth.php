<?php

class Auth extends CI_Controller{

    public function index()
    {
        $this->load->view('templates_administrator/header');
        $this->load->view('mentor/login_mentor');
        $this->load->view('templates_administrator/footer');
    }

    

    public function proses_login_mentor()
    {
        //menentukan form validation harus wajib diisi
        $this->form_validation->set_rules('username','Username','required',[
            'required' => 'Username wajib diisi!'
    ]);
        $this->form_validation->set_rules('password','Password','required',[
            'required' => 'Password wajib diisi!'
    ]);
        if ($this->form_validation->run() == FALSE){
            $this->load->view('templates_administrator/header');
            $this->load->view('mentor/login_mentor');
            $this->load->view('templates_administrator/footer');
        }else {
            $username = $this->input->post('username');
            $password = $this->input->post('password');
            
            //membuat variabel user, pass dan cek(untuk ke databse melalui model)
            $user = $username;
            $pass = MD5($password);

            $cek = $this->login_model_mentor->cek_login($user, $pass);
            
            //jika input yang dimasukan sesuai akan dalihkan ke halaman dashboard administrator
            if ($cek->num_rows() > 0){

                //membuat session untuk user pass dan email agar bisa di tampilkan
                foreach ($cek->result() as $ck){
                    $sess_data['username'] = $ck->username;
                    $sess_data['email'] = $ck->email;
                    $sess_data['level'] = $ck->level;

                    //memanggil session datanya
                    $this->session->set_userdata($sess_data);
                }//membuat session sesuai dengan levelnya
                if($sess_data['level'] == 'mentor'){
                    redirect('mentor/dashboard');
                }else {//jika tidak sesuai akan di kembalikan ke halaman login
                        $this->session->set_flashdata('pesan','<div 
                        class="alert alert-danger alert-dismissible fade show" role="alert">
                        Maaf Username atau Password Salah!
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                        </div>');
                        redirect('mentor/auth');
                }

            }else {
                $this->session->set_flashdata('pesan','<div 
                    class="alert alert-danger" role="alert">
                    <h4 class="alert-heading">Maaf</h4>
                    <p>Username atau Password Salah!</p>
                    </div>');
                redirect('mentor/auth');
            }
        }
    }

    public function logout()
    {
        $this->session->sess_destroy();
        redirect('mentor/auth');
    }
}