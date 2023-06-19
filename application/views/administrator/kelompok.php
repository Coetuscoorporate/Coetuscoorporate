<div class="container-fluid">

<div class="alert alert-success" role="alert">
    <i class ="fas fa-university"></i>Kelompok
</div>
<?php echo $this->session->flashdata('')?>
<?php echo anchor ('administrator/kelompok/tambah_kelompok',
'<button class="btn btn-sm btn-primary mb-3"><i class="fas fa-plus fa-sm"></i> Tambah Kelompok</button>')?>
    <table class="table table-striped table-bordered table-hover">
        <tr>
            <th>NO</th>
            <th>KODE KELOMPOK</th>
            <th>NAMA KELOMPK</th>
            <th>NAMA JURUSAN</th>
            <th colspan="2">AKSI</th>
        </tr>

        <?php
        $no=1;
        foreach($kelompok as $klp): ?>
        <tr>
            <td><?php echo $no++ ?></td>
            <td><?php echo $klp->kode_kelompok ?></td>
            <td><?php echo $klp->nama_kelompok ?></td>
            <td><?php echo $klp->nama_jurusan ?></td>
            <td width="10px" ><?php echo anchor('administrator/kelompok/update'.$klp->id_kelompok, '<div class="btn btn-sm btn-primary"><i class "fas fa-edit"></i></div>') ?></td>
            <td width="10px" ><?php echo anchor('administrator/kelompok/delete'.$klp->id_kelompok, '<div class="btn btn-sm btn-danger"><i class "fas fa-trash"></i></div>') ?></td>
            
            
        </tr>
        <?php endforeach; ?>
    </table>
</div>