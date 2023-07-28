<?php

class Jadwal_mentoring_model extends CI_Model{

    public function tampil_data()
    {
        return $this->db->get('jadwal_mentoring');
    }
}
