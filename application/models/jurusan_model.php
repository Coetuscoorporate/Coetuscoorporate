<?php

class Jurusan_model extends CI_Model{

    public function tampil_data()
    {
        return $this->db->get('jurusan');
    }

    public function input_data($data)
    {
        $this->db->insert('jurusan', $data);
    }

    public function edit_data($where,$table)
    {
        return $this->db->get_where($table,$where);
    }

    public function update_data($where,$data,$table)
    {
        $this->db->where($where);
        $this->db->update($table,$data);
    }

    public function check_jurusan_exists($kode_jurusan)
    {
        $this->db->where('kode_jurusan', $kode_jurusan);
        $query = $this->db->get('jurusan');

        return $query->num_rows() > 0;
    }

    //public function hapus_data($where,$table)
    //{
    //    $this->db->where($where);
    //    $this->db->delete($table);
    //}
}