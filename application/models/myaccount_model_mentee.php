<?php


class Myaccount_model_mentee extends CI_Model{
    
    public function ambil_data($id)
    {
        $this->db->where('username', $id);
        return $this->db->get('user')->row();
    }
    //public function getMenteeData($id) {
      //  return $this->db->get_where('user', array('id' => $id))->row();
    //}
}