<?php

class Materi extends CI_Controller{

    public function index()
    {
        $data['materi'] = $this->materi_model->tampil_data()->result();
        $this->load->view('templates_administrator/header');
        $this->load->view('templates_administrator/sidebar');
        $this->load->view('administrator/materi',$data);
        $this->load->view('templates_administrator/footer');

    }
    public function tambah_materi()
    {
        $data = array(
            'id_materi'    => set_value('id_materi'),
            'TM'    => set_value('TM'),
            'judul_materi'    => set_value('judul_materi'),
            'capaian'    => set_value('capaian'),
            'waktu'    => set_value('waktu'),
            'bulan'    => set_value('bulan'),
            'minggu'    => set_value('minggu'),
        );
        $this->load->view('templates_administrator/header');
        $this->load->view('templates_administrator/sidebar');
        $this->load->view('administrator/materi_form',$data);
        $this->load->view('templates_administrator/footer');

    }

    public function tambah_materi_aksi()
    {
    $this->_rules();
    if ($this->form_validation->run() == FALSE) 
    {
       $this->tambah_materi();
    } else {
            $TM = $this->input->post('TM', TRUE);
            $judul_materi = $this->input->post('judul_materi', TRUE);
            $capaian = $this->input->post('capaian', TRUE);
            $waktu = $this->input->post('waktu', TRUE);
            $bulan = $this->input->post('bulan', TRUE);
            $minggu = $this->input->post('minggu', TRUE);

        
            $data = array(
                'TM' => $TM,
                'judul_materi' => $judul_materi,
                'capaian' => $capaian,
                'waktu' => $waktu,
                'bulan' => $bulan,
                'minggu' => $minggu,
            );

            $this->materi_model->insert_data($data,'materi');
            $this->session->set_flashdata('pesan', '<div 
                class="alert alert-success alert-dismissible fade show" role="alert">
                Data Materi Berhasil Ditambahkan
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                </div>');
            redirect('administrator/materi');
        }
    }
    public function _rules()
    {
        $this->form_validation->set_rules('TM','TM','required', ['required' => 'TM Wajib Diisi']);
        $this->form_validation->set_rules('judul_materi','judul_materi','required' , ['required' => 'Materi Wajib Diisi']);
        $this->form_validation->set_rules('capaian','capaian','required' , ['required' => 'Capaian Wajib Diisi']);
        $this->form_validation->set_rules('waktu','waktu','required', ['required' => 'Waktu Wajib Diisi']);
        $this->form_validation->set_rules('bulan','bulan','required', ['required' => 'bulan Wajib Diisi']);
        $this->form_validation->set_rules('minggu','minggu','required', ['required' => 'Minggu Wajib Diisi']);
    }

    public function update($id)
    {
        $where = array('id_materi' => $id);
        $data['materi'] = $this->jurusan_model->edit_data($where,'materi')->result();
        $this->load->view('templates_administrator/header');
        $this->load->view('templates_administrator/sidebar');
        $this->load->view('administrator/materi_update',$data);
        $this->load->view('templates_administrator/footer');
    }

    public function update_aksi()
    {
        $id = $this->input->post('id_materi');
        $TM = $this->input->post('TM');
        $judul_materi = $this->input->post('judul_materi');
        $capaian = $this->input->post('capaian');
        $waktu = $this->input->post('waktu');
        $bulan = $this->input->post('bulan');
        $minggu = $this->input->post('minggu');
        

        $this->form_validation->set_rules('TM','TM','required', ['required' => 'TM Wajib Diisi']);
        $this->form_validation->set_rules('judul_materi','judul_materi','required' , ['required' => 'Materi Wajib Diisi']);
        $this->form_validation->set_rules('capaian','capaian','required' , ['required' => 'Capaian Wajib Diisi']);
        $this->form_validation->set_rules('waktu','waktu','required', ['required' => 'Waktu Wajib Diisi']);
        $this->form_validation->set_rules('bulan','bulan','required', ['required' => 'bulan Wajib Diisi']);
        $this->form_validation->set_rules('minggu','minggu','required', ['required' => 'Minggu Wajib Diisi']);

        if ($this->form_validation->run() == FALSE) {
            $this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                Validasi tidak berhasil. Pastikan data hanya berisi huruf.
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>');
            redirect('administrator/materi/update/' . $id);
            return;
        }

        $data = array(
            'TM' => $TM,
            'judul_materi' => $judul_materi,
            'capaian' => $capaian,
            'waktu' => $waktu,
            'bulan' => $bulan,
            'minggu' => $minggu,
        );

        $where = array(
            'id_materi' => $id,
        );

        $this->materi_model->update_data($where, $data, 'materi');
        $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">
            Data materi Berhasil Diupdate
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>');
        redirect('administrator/materi');
    }


    public function delete($id)
    {
        $where= array('id_materi' =>$id);

        $this->materi_model->hapus_data($where,'materi');
        $this->session->set_flashdata('pesan', '<div 
                            class="alert alert-danger alert-dismissible fade show" role="alert">
                            Data Materi Berhasil Dihapus
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                            </div>');
        redirect('administrator/materi');

    }

   
}