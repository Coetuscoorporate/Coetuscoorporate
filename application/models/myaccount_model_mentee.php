<?php


class Myaccount_model_mentee extends CI_Model{
    
    public function ambil_data($id)
    {
        $this->db->where('nim', $id);
        return $this->db->get('mentee')->row();
    }
}