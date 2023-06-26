<?php

class Kelompok extends CI_Controller{

    public function index()
    {
        $data['kelompok'] = $this->kelompok_model->tampil_data('kelompok')->result();
        $this->load->view('templates_administrator/header');
        $this->load->view('templates_administrator/sidebar');
        $this->load->view('administrator/kelompok',$data);
        $this->load->view('templates_administrator/footer');

    }



    public function tambah_kelompok()
    {
        $data['jurusan'] = $this->kelompok_model->tampil_data('jurusan')->result();
        $this->load->view('templates_administrator/header');
        $this->load->view('templates_administrator/sidebar');
        $this->load->view('administrator/kelompok_form',$data);
        $this->load->view('templates_administrator/footer');

    }

    public function tambah_kelompok_aksi()
{
    $this->_rules();
    if ($this->form_validation->run() == FALSE) 
    {
       $this->tambah_kelompok();
    } else {
        $kode_kelompok = $this->input->post('kode_kelompok', TRUE);
        $nama_kelompok = $this->input->post('nama_kelompok', TRUE);
        $nama_jurusan = $this->input->post('nama_jurusan', TRUE);

        // Periksa apakah kode kelompok sudah ada dalam database
        if ($this->kelompok_model->check_kelompok_exists($kode_kelompok)) {
            $this->session->set_flashdata('pesan', '<div 
                class="alert alert-danger alert-dismissible fade show" role="alert">
                Kode Kelompok Sudah Ada!
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                </div>');
            redirect('administrator/kelompok/tambah_kelompok');
        } 
        // Periksa apakah nama kelompok sudah ada dalam database
        elseif ($this->kelompok_model->check_nama_kelompok_exists($nama_kelompok)) {
            $this->session->set_flashdata('pesan', '<div 
                class="alert alert-danger alert-dismissible fade show" role="alert">
                Nama Kelompok Sudah Ada!
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                </div>');
            redirect('administrator/kelompok/tambah_kelompok');
        }else {
            $data = array(
                'kode_kelompok' => $kode_kelompok,
                'nama_kelompok' => $nama_kelompok,
                'nama_jurusan' => $nama_jurusan,
            );

            $this->kelompok_model->insert_data($data,'kelompok');
            $this->session->set_flashdata('pesan', '<div 
                class="alert alert-success alert-dismissible fade show" role="alert">
                Data Kelompok Berhasil Ditambahkan
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                </div>');
            redirect('administrator/kelompok');
        }
    }
}


    public function _rules()
    {
        $this->form_validation->set_rules('kode_kelompok','kode_kelompok','required|alpha', ['required' => 'Kode Kelompok Wajib Diisi', 'alpha' => 'Kode Kelompok hanya boleh berisi huruf']);
        $this->form_validation->set_rules('nama_kelompok','nama_kelompok','required|alpha' , ['required' => 'Nama Kelompok Wajib Diisi', 'alpha' => 'Nama Kelompok hanya boleh berisi huruf']);
        $this->form_validation->set_rules('nama_jurusan','nama_jurusan','required', ['required' => 'Nama JurusanWajib Diisi']);
    }

    public function update($id)
    {
        $where= array('id_kelompok' =>$id);
        $data['kelompok'] = $this->db->query("select * from kelompok klp, jurusan jrs where klp.nama_jurusan=jrs.nama_jurusan and klp.id_kelompok='$id'")->result();
        $data['Jurusan'] = $this->kelompok_model->tampil_data('jurusan')->result();

        $this->load->view('templates_administrator/header');
        $this->load->view('templates_administrator/sidebar');
        $this->load->view('administrator/kelompok_update',$data);
        $this->load->view('templates_administrator/footer');

    }

    public function update_aksi()
    {
        $id = $this->input->post('id_kelompok');
        $kode_kelompok= $this->input->post('kode_kelompok');
        $nama_kelompok= $this->input->post('nama_kelompok');
        $nama_jurusan= $this->input->post('nama_jurusan');

        $data = array(
            'kode_kelompok' => $kode_kelompok,
            'nama_kelompok' => $nama_kelompok,
            'nama_jurusan' => $nama_jurusan,
        );

        $where= array(
            'id_kelompok' =>$id
        );

        $this->kelompok_model->update_data($where,$data,'kelompok');
        $this->session->set_flashdata('pesan','<div 
                                        class="alert alert-success alert-dismissible fade show" role="alert">
                                        Data Jurusan Berhasil Diupdate
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                        </div>');
        redirect('administrator/kelompok');

        $data['kelompok'] = $this->db->query("select * from kelompok klp, jurusan jrs where klp.nama_jurusan=jrs.nama_jurusan and klp.id_kelompok='$id'")->result();

        $data['Jurusan'] = $this->kelompok_model->tampil_data('jurusan')->result();

        $this->load->view('templates_administrator/header');
        $this->load->view('templates_administrator/sidebar');
        $this->load->view('administrator/kelompok_update',$data);
        $this->load->view('templates_administrator/footer');

    }
   
    public function delete($id)
    {
        $where= array('id_kelompok' =>$id);

        $this->kelompok_model->hapus_data($where,'kelompok');
        $this->session->set_flashdata('pesan', '<div 
                            class="alert alert-danger alert-dismissible fade show" role="alert">
                            Data Jurusan Berhasil Dihapus
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                            </div>');
        redirect('administrator/kelompok');

    }
    
    

}