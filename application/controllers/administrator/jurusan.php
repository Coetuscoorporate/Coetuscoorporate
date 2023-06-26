<?php

class Jurusan extends CI_Controller{
    public function index()
    {

        $data['jurusan']    = $this->jurusan_model->tampil_data()->result();
        $this->load->view('templates_administrator/header');
        $this->load->view('templates_administrator/sidebar');
        $this->load->view('administrator/jurusan',$data);
        $this->load->view('templates_administrator/footer');
    }

    public function input()
    {
        $data = array(
            'id_jurusan'    => set_value('id_jurusan'),
            'kode_jurusan'    => set_value('kode_jurusan'),
            'nama_jurusan'    => set_value('nama_jurusan'),
        );
        $this->load->view('templates_administrator/header');
        $this->load->view('templates_administrator/sidebar');
        $this->load->view('administrator/jurusan_form',$data);
        $this->load->view('templates_administrator/footer');
    }

    public function input_aksi()
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->input();
        } else {
            $kode_jurusan = $this->input->post('kode_jurusan', TRUE);
            $nama_jurusan = $this->input->post('nama_jurusan', TRUE);

            // Periksa apakah kode jurusan sudah ada dalam database
            if ($this->jurusan_model->check_jurusan_exists($kode_jurusan)) {
                $this->session->set_flashdata('pesan', '<div 
                    class="alert alert-danger alert-dismissible fade show" role="alert">
                    Kode Jurusan sudah ada!
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    </div>');
                redirect('administrator/jurusan/input');
            }
            // Periksa apakah nama jurusan sudah ada dalam database
            elseif ($this->jurusan_model->check_nama_jurusan_exists($nama_jurusan)) {
                $this->session->set_flashdata('pesan', '<div 
                    class="alert alert-danger alert-dismissible fade show" role="alert">
                    Nama Jurusan Sudah Ada!
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    </div>');
                redirect('administrator/jurusan/input');
            }else {
                $data = array(
                    'kode_jurusan' => $kode_jurusan,
                    'nama_jurusan' => $nama_jurusan,
                );

                $this->jurusan_model->input_data($data);
                $this->session->set_flashdata('pesan', '<div 
                    class="alert alert-success alert-dismissible fade show" role="alert">
                    Data Jurusan Berhasil Ditambahkan
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    </div>');
                redirect('administrator/jurusan');
            }
        }
    }


    public function _rules()
    {
        $this->form_validation->set_rules('kode_jurusan','kode_jurusan','required|alpha', ['required' => 'Kode Jurusan wajib diisi!','alpha' => 'Kode Jurusan hanya boleh berisi huruf.']);
        $this->form_validation->set_rules('nama_jurusan','nama_jurusan','required|alpha', ['required' => 'Nama Jurusan wajib diisi!','alpha' => 'Nama Jurusan hanya boleh berisi huruf.']);
    }
    
    public function update($id)
    {
        $where = array('id_jurusan' => $id);
        $data['jurusan'] = $this->jurusan_model->edit_data($where,'jurusan')->result();
        $this->load->view('templates_administrator/header');
        $this->load->view('templates_administrator/sidebar');
        $this->load->view('administrator/jurusan_update',$data);
        $this->load->view('templates_administrator/footer');
    }

    public function update_aksi()
    {
        $id = $this->input->post('id_jurusan');
        $kode_jurusan = $this->input->post('kode_jurusan');
        $nama_jurusan = $this->input->post('nama_jurusan');

        $data = array(
            'kode_jurusan' => $kode_jurusan,
            'nama_jurusan' => $nama_jurusan,
        );

        $where = array(
            'id_jurusan' => $id,
        );

        $this->jurusan_model->update_data($where,$data,'jurusan');
        $this->session->set_flashdata('pesan','<div 
                            class="alert alert-success alert-dismissible fade show" role="alert">
                            Data Jurusan Berhasil Diupdate
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                            </div>');
        redirect('administrator/jurusan');
    }

    /*public function delete($id)
    {
        $where = array('id_jurusan' => $id);
        $this->jurusan_model->hapus_data($where, 'jurusan');
        $this->session->set_flashdata('pesan','<div 
                            class="alert alert-danger alert-dismissible fade show" role="alert">
                            Data Jurusan Berhasil Dihapus
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                            </div>');
        redirect('administrator/jurusan');
    }*/
}