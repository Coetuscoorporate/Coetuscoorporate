<?php

class Login_model_mentee extends CI_Model{

    public function cek_login($nim, $password)
    {
        $this->db->where("nim", $nim);
        $this->db->where("password", $password);
        //memanggil nama tabel
        return $this->db->get("mentee");
    }
    //fungsi apakah nim dan pasword sesuai atau tidak
    public function getLoginData($nim, $pass)
    {
        //membuat variabel baru
        $n = $nim;
        //MD5 untuk ecryption
        $p = MD5($pass);
        //membuat query
        $query_cekLogin = $this->db->get_where('mentee
        ', array('nim' => $n, 'password' => $p));

        if (count($query_cekLogin->result()) > 0){
            foreach ($query_cekLogin->result() as $qck){
                foreach ($query_cekLogin->result() as $ck){
                    $sess_data ['logged_in'] = TRUE;
                    $sess_data ['nim'] = $ck->nim;
                    $sess_data ['password'] = $ck->password;
                    $sess_data ['level'] = $ck->level;
                    //memanggil session
                    $this->session->set_userdata($sess_data);
                }// apabila nim dan pass sesuai akan diredirect ke
                redirect('mentee/dashboard');
            }
        }else {
            $this->session->set_flashdata('pesan', '<div 
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