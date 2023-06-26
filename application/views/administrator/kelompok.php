<div class="container-fluid">
    
    <div class="alert alert-success" role="alert">
        <i class=" fas fa-clipboard-list"></i> Kelompok
    </div>

    <?php echo $this->session->flashdata('pesan') ?>

    <?php echo anchor('administrator/kelompok/tambah_kelompok','<button
        class="btn btn-sm btn-primary mb-3"><i class="fas fa-plus fa-sm"></i> TAMBAH KELOMPOK</button>') ?>


    <table class="table table-bordered table-striped table-hover">
        <tr>
            <th>NO</th>
            <th>KODE KELOMPOK</th>
            <th>NAMA KELOMPOK</th>
            <th>NAMA JURUSAN</th>
            <th colspan="2">AKSI</th>
        </tr>

            <?php
            $no = 1;
            foreach ($kelompok as $klp) : ?>
            <tr>
                <td width="20px"><?php echo $no++ ?></td>
                <td><?php echo $klp->kode_kelompok ?></td>
                <td><?php echo $klp->nama_kelompok ?></td>
                <td><?php echo $klp->nama_jurusan ?></td>
                <td width="20px"><?php echo anchor('administrator/kelompok/update/'.$klp->id_kelompok,'<div class="btn 
                    btn-sm btn-primary"><i class="fa 
                    fa-edit"></i></div>') ?></td>
                <td width="20px"><?php echo anchor('administrator/kelompok/delete/'.$klp->id_kelompok,'<div class="btn 
                    btn-sm btn-danger"><i class="fa 
                    fa-trash"></i></div>') ?></td>
            </tr>
            <?php endforeach; ?>
    </table>
</div>