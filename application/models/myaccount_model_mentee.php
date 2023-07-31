<?php


class Myaccount_model_mentee extends CI_Model{
    
    public function ambil_data($id)
    {
        $this->db->where('nim', $id);
        return $this->db->get('mentee')->row();
    }

    public function jadwal_mentoring($nama_kelompok)
    {
        $this->db->where('nama_kelompok', $nama_kelompok);
        return $this->db->get('jadwal_mentoring')->row();

    }

    public function materi()
    {
        return $this->db->get('materi');
    }
}