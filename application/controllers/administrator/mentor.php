<?php

class Mentor extends CI_Controller{

    public function index()
    {
        $data['mentor'] = $this->mentor_model->tampil_data('mentor')->result();
        $data['kelompok'] = $this->kelompok_model->tampil_data('kelompok')->result();
       
        $this->load->view('templates_administrator/header');
        $this->load->view('templates_administrator/sidebar');
        $this->load->view('administrator/mentor',$data);
        $this->load->view('templates_administrator/footer');
    }

    public function detail($id)
    {
        $data['detail'] = $this->mentor_model->ambil_id_mentor($id);
        $this->load->view('templates_administrator/header');
        $this->load->view('templates_administrator/sidebar');
        $this->load->view('administrator/mentor_detail',$data);
        $this->load->view('templates_administrator/footer');
    }

    public function tambah_mentor()
    {
        $data['kelompok'] = $this->mentor_model->tampil_data('kelompok')->result();
        
        $this->load->view('templates_administrator/header');
        $this->load->view('templates_administrator/sidebar');
        $this->load->view('administrator/mentor_form',$data);
        $this->load->view('templates_administrator/footer');
    }

    public function tambah_mentor_aksi()
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->tambah_mentor();
        } else {
            

        
            $password      = MD5($this->input->post('password'));
            $level         = $this->input->post('level');
            $nama_mentor  = $this->input->post('nama_mentor');
            $alamat        = $this->input->post('alamat');
            $email         = $this->input->post('email');
            $telepon       = $this->input->post('telepon');
            $tempat_lahir  = $this->input->post('tempat_lahir');
            $tanggal_lahir = $this->input->post('tanggal_lahir');
            $jenis_kelamin = $this->input->post('jenis_kelamin');
            $nama_kelompok = $this->input->post('nama_kelompok');
            
            $photo         = $_FILES['photo'];
            if ($photo == '') {
            } else {
                $config['upload_path']   = './assets/uploads';
                $config['allowed_types'] = 'jpg|png|gif|tiff';

                $this->load->library('upload', $config);
                if (!$this->upload->do_upload('photo')) {
                    echo "Gagal Upload";
                    die();
                } else {
                    $photo = $this->upload->data('file_name');
                }
            }

            $data = array(
                
                'password'      => $password,
                'level'         => $level,
                'nama_mentor'  => $nama_mentor,
                'alamat'        => $alamat,
                'email'         => $email,
                'telepon'       => $telepon,
                'tempat_lahir'  => $tempat_lahir,
                'tanggal_lahir' => $tanggal_lahir,
                'jenis_kelamin' => $jenis_kelamin,
                'nama_kelompok' => $nama_kelompok,
               
                'photo'         => $photo
            );

            $this->mentor_model->insert_data($data, 'mentor');
            $this->session->set_flashdata('pesan', '<div 
                class="alert alert-success alert-dismissible fade show" role="alert">
                Data Mentor Berhasil Ditambahkan
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                </div>');
            redirect('administrator/mentor');
        }
    }


    public function update($id)
    {
        $where = array('$id' => $id);
        $data['mentor'] = $this->db->query("select * from mentor mtr, kelompok klp where mtr.nama_kelompok=klp.nama_kelompok and mtr.id='$id'")->result();
        $data['kelompok'] = $this->kelompok_model->tampil_data('kelompok')->result();
      
        $data['detail'] = $this->mentor_model->ambil_id_mentor($id);
        $this->load->view('templates_administrator/header');
        $this->load->view('templates_administrator/sidebar');
        $this->load->view('administrator/mentor_update',$data);
        $this->load->view('templates_administrator/footer');
    }

    public function update_mentor_aksi()
    {
        $id            = $this->input->post("id");
       
        $password      = MD5($this->input->post('password'));
        $level         = $this->input->post('level');
        $nama_mentor  = $this->input->post('nama_mentor');
        $alamat        = $this->input->post('alamat');
        $email         = $this->input->post('email');
        $telepon       = $this->input->post('telepon');
        $tempat_lahir  = $this->input->post('tempat_lahir');
        $tanggal_lahir = $this->input->post('tanggal_lahir');
        $jenis_kelamin = $this->input->post('jenis_kelamin');
        $nama_kelompok = $this->input->post('nama_kelompok');
    
        $photo         = $_FILES['userfile']['name'];

     

        // Validasi telepon (harus berisi angka)
        if (!is_numeric($telepon)) {
            $this->session->set_flashdata('pesan', '<div 
                class="alert alert-danger alert-dismissible fade show" role="alert">
                Telepon hanya boleh berisi angka!
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                </div>');
            redirect('administrator/mentor/update/'.$id);
        }

        // Validasi nama Mentor (hanya huruf)
        if (!preg_match("/^[a-zA-Z ]*$/", $nama_Mentor)) {
            $this->session->set_flashdata('pesan', '<div 
                class="alert alert-danger alert-dismissible fade show" role="alert">
                Nama Mentor type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                </div>');
            redirect('administrator/mentor/update/'.$id);
        }

        // Validasi tempat lahir (hanya huruf)
        if (!preg_match("/^[a-zA-Z ]*$/", $tempat_lahir)) {
            $this->session->set_flashdata('pesan', '<div 
                class="alert alert-danger alert-dismissible fade show" role="alert">
                Tempat Lahir hanya boleh berisi huruf!
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                </div>');
            redirect('administrator/mentor/update/'.$id);
        }

        // Proses update data
        if ($photo) {
            $config['upload_path']   = './assets/uploads';
            $config['allowed_types'] = 'jpg|png|gif|tiff';

            $this->load->library('upload', $config);
            if ($this->upload->do_upload('userfile')) {
                $userfile = $this->upload->data('file_name');
                $this->db->set('photo', $userfile);
            } else {
                echo "Gagal Upload";
            }
        }

        $data = array(
            
            'password'      => $password,
            'level'         => $level,
            'nama_mentor'  => $nama_mentor,
            'alamat'        => $alamat,
            'email'         => $email,
            'telepon'       => $telepon,
            'tempat_lahir'  => $tempat_lahir,
            'tanggal_lahir' => $tanggal_lahir,
            'jenis_kelamin' => $jenis_kelamin,
            'nama_kelompok' => $nama_kelompok,
           
        );

        $where = array (
            'id' => $id
        );

        $this->mentor_model->update_data($where, $data, 'mentor');
        $this->session->set_flashdata('pesan', '<div 
            class="alert alert-success alert-dismissible fade show" role="alert">
            Data Mentor Berhasil Diupdate
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            </div>');
        redirect('administrator/mentor');
    }


    public function _rules()
    {
       
        $this->form_validation->set_rules('password', 'Password', 'required', ['required' => 'Password wajib diisi!']);
        $this->form_validation->set_rules('level', 'Level', 'required', ['required' => 'Level wajib diisi!']);
        $this->form_validation->set_rules('nama_mentor', 'Nama Mentor', 'required|alpha', [
            'required' => 'Nama Mentor wajib diisi!',
            'alpha'    => 'Nama Mentor hanya boleh berisi huruf!'
        ]);
        $this->form_validation->set_rules('alamat', 'Alamat', 'required', ['required' => 'Alamat wajib diisi!']);
        $this->form_validation->set_rules('email', 'Email', 'required', ['required' => 'Email wajib diisi!']);
        $this->form_validation->set_rules('telepon', 'Telepon', 'required|numeric', [
            'required' => 'Telepon wajib diisi!',
            'numeric'  => 'Telepon hanya boleh berisi angka!'
        ]);
        $this->form_validation->set_rules('tempat_lahir', 'Tempat Lahir', 'required|alpha', [
            'required' => 'Tempat Lahir wajib diisi!',
            'alpha'    => 'Tempat Lahir hanya boleh berisi huruf!'
        ]);
        $this->form_validation->set_rules('tanggal_lahir', 'Tanggal Lahir', 'required', ['required' => 'Tanggal Lahir wajib diisi!']);
        $this->form_validation->set_rules('jenis_kelamin', 'Jenis Kelamin', 'required', ['required' => 'Jenis Kelamin wajib diisi!']);
        $this->form_validation->set_rules('nama_kelompok', 'Nama Kelompok', 'required', ['required' => 'Nama Kelompok wajib diisi!']);
      
    }
}