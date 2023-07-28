<?php

class kelompok_model extends CI_Model
{
    public function tampil_data($table)
    {
        return $this->db->get($table);
    }

    public function insert_data($data,$table)
    {
        $this->db->insert($table,$data);
    }
    public function edit_data($where,$table)
    {
        $this->db->get_where($table,$where);
    }

    public function update_data($where,$data,$table)
    {
        $this->db->where($where);
        $this->db->update($table,$data);
    }

    public function check_kelompok_exists($kode_kelompok)
    {
        $this->db->where('kode_kelompok', $kode_kelompok);
        $query = $this->db->get('kelompok');

        return $query->num_rows() > 0;
    }

    public function check_nama_kelompok_exists($nama_kelompok)
    {
        $this->db->where('nama_kelompok', $nama_kelompok);
        $query = $this->db->get('kelompok');

        return $query->num_rows() > 0;
    }
  

    public function hapus_data($where,$table)
    {
        $this->db->where($where);
        $this->db->delete($table);
    }
}