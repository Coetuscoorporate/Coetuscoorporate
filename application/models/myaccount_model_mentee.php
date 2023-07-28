<?php


class Myaccount_model_mentee extends CI_Model{
    
    public function ambil_data($id)
    {
        $this->db->where('nim', $id);
        return $this->db->get('mentee')->row();
    }
    //public function getMenteeData($id) {
      //  return $this->db->get_where('user', array('id' => $id))->row();
    //}
}