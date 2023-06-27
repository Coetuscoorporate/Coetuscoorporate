<div class="container-fluid">
    
    <div class="alert alert-success" role="alert">
        <i class=" fas fa-clipboard-list"></i> jadwal Mentoring
    </div>

    <?php echo $this->session->flashdata('pesan') ?>

    <?php echo anchor('administrator/kelompok/tambah_kelompok','<button
        class="btn btn-sm btn-primary mb-3"><i class="fas fa-plus fa-sm"></i> TAMBAH JADWAL</button>') ?>


    <table class="table table-bordered table-striped table-hover">
        <tr>
            <th>NO</th>
            <th>NAMA MENTOR</th>
            <th>NAMA KELOMPOK</th>
            <th>JADWAL MENTORING</th>
        </tr>

        <?php
        $no = 1;
        # foreach ($jurusan as $jrs) : ?>
       

    </table>
</div>