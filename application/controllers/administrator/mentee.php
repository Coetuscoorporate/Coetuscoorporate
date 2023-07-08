<?php

class Mentee extends CI_Controller{

    public function index()
    {
        $data['mentee'] = $this->mentee_model->tampil_data('mentee')->result();
        $data['kelompok'] = $this->kelompok_model->tampil_data('kelompok')->result();
        $this->load->view('templates_administrator/header');
        $this->load->view('templates_administrator/sidebar');
        $this->load->view('administrator/mentee',$data);
        $this->load->view('templates_administrator/footer');
    }

    public function detail($id)
    {
        $data['detail'] = $this->mentee_model->ambil_id_mentee($id);
        $this->load->view('templates_administrator/header');
        $this->load->view('templates_administrator/sidebar');
        $this->load->view('administrator/mentee_detail',$data);
        $this->load->view('templates_administrator/footer');
    }

    public function tambah_mentee()
    {
        $data['kelompok'] = $this->mentee_model->tampil_data('kelompok')->result();
        $this->load->view('templates_administrator/header');
        $this->load->view('templates_administrator/sidebar');
        $this->load->view('administrator/mentee_form',$data);
        $this->load->view('templates_administrator/footer');
    }

    public function tambah_mentee_aksi()
    {
        $this->_rules();

        if($this->form_validation->run() == FALSE){
            $this->tambah_mentee();
        }else{
            $nim           = $this->input->post('nim');
            $nama_lengkap  = $this->input->post('nama_lengkap');
            $alamat        = $this->input->post('alamat');
            $email         = $this->input->post('email');
            $telepon       = $this->input->post('telepon');
            $tempat_lahir  = $this->input->post('tempat_lahir');
            $tanggal_lahir = $this->input->post('tanggal_lahir');
            $jenis_kelamin = $this->input->post('jenis_kelamin');
            $nama_kelompok = $this->input->post('nama_kelompok');
            $photo         = $_FILES['photo'];
            if ($photo=''){}else{
                $config['upload_path'] = './assets/uploads';
                $config['allowed_types'] = 'jpg|png|gif|tiff';

                $this->load->library('upload',$config);
                if(!$this->upload->do_upload('photo')){
                    echo "Gagal Upload"; die();
                }else{
                    $photo=$this->upload->data('file_name');
                }
            }

            $data = array(
                
                'nim'           => $nim,
                'nama_lengkap'  => $nama_lengkap,
                'alamat'        => $alamat,
                'email'         => $email,
                'telepon'       => $telepon,
                'tempat_lahir'  => $tempat_lahir,
                'tanggal_lahir' => $tanggal_lahir,
                'jenis_kelamin' => $jenis_kelamin,
                'nama_kelompok' => $nama_kelompok,
                'photo'         => $photo
            );

            $this->mentee_model->insert_data($data,'mentee');
            $this->session->set_flashdata('pesan', '<div 
                class="alert alert-success alert-dismissible fade show" role="alert">
                Data Mentee Berhasil Ditambahkan
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                </div>');
            redirect('administrator/mentee');
        }
    }

    public function update($id)
    {
        $where = array('$id' => $id);
        $data['mentee'] = $this->db->query("select * from mentee mte, kelompok klp where mte.nama_kelompok=klp.nama_kelompok and mte.id='$id'")->result();
        $data['kelompok'] = $this->kelompok_model->tampil_data('kelompok')->result();
        $data['detail'] = $this->mentee_model->ambil_id_mentee($id);
        $this->load->view('templates_administrator/header');
        $this->load->view('templates_administrator/sidebar');
        $this->load->view('administrator/mentee_update',$data);
        $this->load->view('templates_administrator/footer');
    }

    public function update_mentee_aksi()
    {
        $this->_rules();

        if($this->form_validation->run() == FALSE)
        {
            $this->update();
        }else{
            $id            = $this->input->post("id");
            $nim           = $this->input->post('nim');
            $nama_lengkap  = $this->input->post('nama_lengkap');
            $alamat        = $this->input->post('alamat');
            $email         = $this->input->post('email');
            $telepon       = $this->input->post('telepon');
            $tempat_lahir  = $this->input->post('tempat_lahir');
            $tanggal_lahir = $this->input->post('tanggal_lahir');
            $jenis_kelamin = $this->input->post('jenis_kelamin');
            $nama_kelompok = $this->input->post('nama_kelompok');
            $photo         = $_FILES['userfile']['name'];

            if ($photo){
                $config['upload_path'] = './assets/uploads';
                $config['allowed_types'] = 'jpg|png|gif|tiff';

                $this->load->library('upload',$config);
                if($this->upload->do_upload('userfile')){
                    $userfile = $this->upload->data('file_name');
                    $this->db->set('photo', $userfile);
                }else{
                    echo "Gagal Upload";
                }
            }

            $data = array(
                
                'nim'           => $nim,
                'nama_lengkap'  => $nama_lengkap,
                'alamat'        => $alamat,
                'email'         => $email,
                'telepon'       => $telepon,
                'tempat_lahir'  => $tempat_lahir,
                'tanggal_lahir' => $tanggal_lahir,
                'jenis_kelamin' => $jenis_kelamin,
                'nama_kelompok' => $nama_kelompok
            );

            $where = array (
                'id' => $id
            );

            $this->mentee_model->update_data($where,$data,'mentee');
            $this->session->set_flashdata('pesan', '<div 
                class="alert alert-success alert-dismissible fade show" role="alert">
                Data Mentee Berhasil Diupdate
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                </div>');
            redirect('administrator/mentee');
        }
    }

    public function _rules()
    {
        $this->form_validation->set_rules('nim','Nim','required',['required' => 'NIM wajib diisi! ']);
        $this->form_validation->set_rules('nama_lengkap','Nama Lengkap','required',['required' => 'Nama Lengkap wajib diisi! ']);
        $this->form_validation->set_rules('alamat','Alamat','required',['required' => 'Alamat wajib diisi! ']);
        $this->form_validation->set_rules('email','Email','required',['required' => 'Email wajib diisi! ']);
        $this->form_validation->set_rules('telepon','Telepon','required',['required' => 'Telepon wajib diisi! ']);
        $this->form_validation->set_rules('tempat_lahir','Tempat Lahir','required',['required' => 'Tempat Lahir wajib diisi! ']);
        $this->form_validation->set_rules('tanggal_lahir','Tanggal Lahir','required',['required' => 'Tanggal Lahir wajib diisi! ']);
        $this->form_validation->set_rules('jenis_kelamin','Jenis Kelamin','required',['required' => 'Jenis Kelamin wajib diisi! ']);
        $this->form_validation->set_rules('nama_kelompok','Nama Kelompok','required',['required' => 'Nama Kelompok wajib diisi! ']);
    }
}