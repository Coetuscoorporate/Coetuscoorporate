<div class="container-fluid">
    
    <div class="alert alert-success" role="alert">
        <i class=" fas fa-clipboard-list"></i> jadwal Mentoring
    </div>

    <?php echo $this->session->flashdata('pesan') ?>

    <?php echo anchor('administrator/jadwal_mentoring/tambah_jadwal_mentoring','<button
        class="btn btn-sm btn-primary mb-3"><i class="fas fa-plus fa-sm"></i> TAMBAH JADWAL</button>') ?>


    <table class="table table-bordered table-striped table-hover">
        <tr>
            <th>NO</th>
            <th>NAMA MENTOR</th>
            <th>NAMA KELOMPOK</th>
            <th>MATERI</th>
            <th>WAKTU</th>
            <th>TEMPAT</th>
            <th colspan="2">AKSI</th>
        </tr>

        <?php
        $no = 1;
        foreach ($jadwal_mentoring as $jdl) : ?>
        <tr>
            <td width="20px"><?php echo $no++ ?></td>
            <td><?php echo $jdl->nama_mentor ?></td>
            <td><?php echo $jdl->judul_materi ?></td>
            <td><?php echo $jdl->nama_kelompok ?></td>
            <td><?php echo $jdl->waktu ?></td>
            <td><?php echo $jdl->Tempat ?></td>
            <td width="20px"><?php echo anchor('administrator/jadwal_mentoring/update/'.$jdl->id_jadwal,'<div class="btn 
                    btn-sm btn-primary"><i class="fa 
                    fa-edit"></i></div>') ?></td>
                <td width="20px"><?php echo anchor('administrator/jadwal_mentoring/delete/'.$jdl->id_jadwal,'<div class="btn 
                    btn-sm btn-danger"><i class="fa 
                    fa-trash"></i></div>') ?></td>
        </tr>
        <?php endforeach; ?>
       
       

    </table>
</div>