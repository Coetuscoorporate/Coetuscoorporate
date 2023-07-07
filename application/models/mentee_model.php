<?php

class Mentee_model extends CI_Model{

    public function tampil_data($table)
    {
        return $this->db->get($table);
    }

    public function ambil_id_mentee($id)
    {
        $hasil = $this->db->where('id',$id)->get('mentee');
        if($hasil->num_rows() > 0){
            return $hasil->result();
        }else{
            return false;
        }
    }
}