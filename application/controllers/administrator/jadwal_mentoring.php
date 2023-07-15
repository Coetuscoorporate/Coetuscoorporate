<?php

class Jadwal_mentoring extends CI_Controller{
    public function index()
    {
        $data['jadwal_mentoring'] = $this->jadwal_mentoring_model->tampil_data('jadwal_mentoring')->result();
        $this->load->view('templates_administrator/header');
        $this->load->view('templates_administrator/sidebar');
        $this->load->view('administrator/jadwal_mentoring', $data);
        $this->load->view('templates_administrator/footer');

    }

    public function tambah_jadwal_mentoring()
    {
        $data['kelompok'] = $this->jadwal_mentoring_model->tampil_data('kelompok')->result();
        $this->load->view('templates_administrator/header');
        $this->load->view('templates_administrator/sidebar');
        $this->load->view('administrator/jadwal_mentoring_form',$data);
        $this->load->view('templates_administrator/footer');

    }

    public function tambah_jadwal_aksi()
    {
    $this->_rules();
    if ($this->form_validation->run() == FALSE) 
    {
       $this->tambah_jadwal_mentoring();
    } 
    else {

        $nama_mentor = $this->input->post('nama_mentor', TRUE);
        $nama_kelompok = $this->input->post('nama_kelompok', TRUE);
        $judul_materi = $this->input->post('judul_materi', TRUE);
        $waktu = $this->input->post('waktu', TRUE);
        $Tempat = $this->input->post('Tempat', TRUE);

    

            $data = array(
                'nama_mentor' => $nama_mentor,
                'nama_kelompok' => $nama_kelompok,
                'judul_materi' => $judul_materi,
                'waktu' => $waktu,
                'Tempat' => $Tempat,
            );
            

            $this->jadwal_mentoring_model->insert_data($data,'jadwal_mentoring');
            $this->session->set_flashdata('pesan', '<div 
                class="alert alert-success alert-dismissible fade show" role="alert">
                Data Jadwal Mentoring Berhasil Ditambahkan
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                </div>');
            redirect('administrator/jadwal_mentoring');
        }
    }



    public function _rules()
    {
        $this->form_validation->set_rules('nama_mentor','nama_mentor','required', ['required' => 'Nama Mentor Wajib Diisi']);
        $this->form_validation->set_rules('nama_kelompok','nama_kelompok','required', ['required' => 'Nama Kelompok Wajib Diisi']);
        $this->form_validation->set_rules('judul_materi','judul_materi','required', ['required' => 'Judul Materi Wajib Diisi']);
        $this->form_validation->set_rules('waktu','waktu','required', ['required' => 'Waktu Wajib Diisi']);
        $this->form_validation->set_rules('Tempat','Tempat','required', ['required' => 'Tempat Wajib Diisi']);
    }


    public function update($id)
    {
        $where= array('id_jadwal' =>$id);
        $data['jadwal_mentoring'] = $this->db->query("select * from jadwal_mentoring jdl, kelompok klp where jdl.nama_kelompok=klp.nama_kelompok and jdl.id_jadwal='$id'")->result();
        $data['kelompok'] = $this->jadwal_mentoring_model->tampil_data('kelompok')->result();

        $this->load->view('templates_administrator/header');
        $this->load->view('templates_administrator/sidebar');
        $this->load->view('administrator/jadwal_mentoring_update',$data);
        $this->load->view('templates_administrator/footer');

    }

    public function update_aksi()
    {
        $id = $this->input->post('id_jadwal');
        $nama_mentor= $this->input->post('nama_mentor');
        $nama_kelompok= $this->input->post('nama_kelompok');
        $judul_materi= $this->input->post('judul_materi');
        $waktu= $this->input->post('waktu');
        $Tempat= $this->input->post('Tempat');

        $this->form_validation->set_rules('nama_mentor', 'Nama Mentor', 'required|alpha');
        $this->form_validation->set_rules('judul_materi', 'Judul Materi', 'required|alpha');
        $this->form_validation->set_rules('waktu', 'Waktu', 'required');
        $this->form_validation->set_rules('Tempat', 'Tempat', 'required|alpha');

        if ($this->form_validation->run() == FALSE) {
            $this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                Validasi tidak berhasil. Pastikan judul materi dan nama mentor hanya berisi huruf.
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>');
            redirect('administrator/jadwal_mentoring/update/' . $id);
            return;
        }

        $data = array(
            'nama_mentor' => $nama_mentor,
            'nama_kelompok' => $nama_kelompok,
            'judul_materi' => $judul_materi,
            'waktu' => $waktu,
            'Tempat' => $Tempat,
        );

        $where= array(
            'id_jadwal' =>$id
        );

        $this->jadwal_mentoring_model->update_data($where,$data,'jadwal_mentoring');
        $this->session->set_flashdata('pesan','<div 
                                        class="alert alert-success alert-dismissible fade show" role="alert">
                                        Jadwal Mentoring Berhasil Diupdate
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                        </div>');
        redirect('administrator/jadwal_mentoring');

        $data['jadwal_mentoring'] = $this->db->query("select * from jadwal_mentoring jdl, kelompok klp where jdl.nama_kelompok=klp.nama_jurusan and jdl.id_jadwal='$id'")->result();
        $data['kelompok'] = $this->jadwal_mentoring_model->tampil_data('kelompok')->result();

        $this->load->view('templates_administrator/header');
        $this->load->view('templates_administrator/sidebar');
        $this->load->view('administrator/jadwal_mentoring_update',$data);
        $this->load->view('templates_administrator/footer');

    }

    public function delete($id)
    {
        $where= array('id_jadwal' =>$id);

        $this->jadwal_mentoring_model->hapus_data($where,'jadwal_mentoring');
        $this->session->set_flashdata('pesan', '<div 
                            class="alert alert-danger alert-dismissible fade show" role="alert">
                            Data Jadwal Mentoring Berhasil Dihapus
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                            </div>');
        redirect('administrator/jadwal_mentoring');

    }
}