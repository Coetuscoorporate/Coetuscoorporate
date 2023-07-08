<div class="container-fluid">
    
    <div class="alert alert-success" role="alert">
        <i class=" fas fa-fw fa-book-open"></i> Materi
    </div>
    <?php echo $this->session->flashdata('pesan') ?>

    <?php echo anchor('administrator/kelompok/tambah_kelompok','<button
        class="btn btn-sm btn-primary mb-3"><i class="fas fa-plus fa-sm"></i> TAMBAH MATERI</button>') ?>


    <table class="table table-bordered table-striped table-hover">
        <tr>
            <th>NO</th>
            <th>TM</th>
            <th>MATERI</th>
            <th>WAKTU</th>
            <th>BULAN</th>
            <th>MINGGU</th>
            <th colspan="2">AKSI</th>
        </tr>

            <?php
            $no = 1;
            foreach ($materi as $mtr) : ?>
            <tr>
                <td width="20px"><?php echo $no++ ?></td>
                <td><?php echo $mtr->TM ?></td>
                <td><?php echo $mtr->materi ?></td>
                <td><?php echo $mtr->waktu ?></td>
                <td><?php echo $mtr->bulan ?></td>
                <td><?php echo $mtr->minggu ?></td>
                <td width="20px"><?php echo anchor('administrator/materi/update/'.$mtr->id_materi,'<div class="btn 
                    btn-sm btn-primary"><i class="fa 
                    fa-edit"></i></div>') ?></td>
                <td width="20px"><?php echo anchor('administrator/materi/delete/'.$mtr->id_materi,'<div class="btn 
                    btn-sm btn-danger"><i class="fa 
                    fa-trash"></i></div>') ?></td>
            </tr>
            <?php endforeach; ?>
    </table>

    
</div>