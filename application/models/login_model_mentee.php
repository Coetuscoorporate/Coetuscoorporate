<?php

class Login_model_mentee extends CI_Model{

    public function cek_login($username, $password)
    {
        $this->db->where("username", $username);
        $this->db->where("password", $password);
        //memanggil nama tabel
        return $this->db->get("user");
    }
    //fungsi apakah username dan pasword sesuai atau tidak
    public function getLoginData($user, $pass)
    {
        //membuat variabel baru
        $u = $user;
        //MD5 untuk ecryption
        $p = MD5($pass);
        //membuat query
        $query_cekLogin = $this->db->get_where('user
        ', array('username' => $u, 'password' => $p));

        if (count($query_cekLogin->result()) > 0){
            foreach ($query_cekLogin->result() as $qck){
                foreach ($query_cekLogin->result() as $ck){
                    $sess_data ['logged_in'] = TRUE;
                    $sess_data ['username'] = $ck->username;
                    $sess_data ['password'] = $ck->password;
                    $sess_data ['level'] = $ck->level;
                    //memanggil session
                    $this->session->set_userdata($sess_data);
                }// apabila user dan pass sesuai akan diredirect ke
                redirect('mentee/dashboard');
            }
        }else {
            $this->session->set_flashdata('pesan', '<div 
            class="alert alert-danger alert-dismissible fade show" role="alert">
            Maaf Username atau Password Salah!
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
            </div>');
            redirect('mentee/auth');
        }
    }
}