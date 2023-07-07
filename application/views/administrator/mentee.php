<div class="container-fluid">

    <div class="alert alert-success" role="alert">
        <i class=" fas fa-clipboard-list"></i> Mentee
    </div>

    <?php echo $this->session->flashdata('pesan') ?>

    <?php echo anchor('administrator/mentee/tambah_mentee','<button
        class="btn btn-sm btn-primary mb-3"><i class="fas fa-plus fa-sm"></i> TAMBAH MENTEE</button>') ?>

    <table class="table table-striped table-hover table-bordered">
        <tr>
            <th>NO</th>
            <th>NAMA LENGKAP</th>
            <th>ALAMAT</th>
            <th>EMAIL</th>
            <th colspan="3">AKSI</th>
        </tr>

        <?php 
        
        $no=1;
        foreach($mentee as $mte) : ?>

            <tr>
                <td><?php echo $no++ ?></td>
                <td><?php echo $mte->nama_lengkap ?></td>
                <td><?php echo $mte->alamat ?></td>
                <td><?php echo $mte->email ?></td>
                <td width="20px"><?php echo anchor('administrator/mentee/detail/'.$mte->id,'<div class="btn 
                    btn-sm btn-info"><i class="fa 
                    fa-eye"></i></div>') ?></td>
                <td width="20px"><?php echo anchor('administrator/mentee/update/'.$mte->id,'<div class="btn 
                    btn-sm btn-primary"><i class="fa 
                    fa-edit"></i></div>') ?></td>
                <td width="20px"><?php echo anchor('administrator/mentee/delete/'.$mte->id,'<div class="btn 
                    btn-sm btn-danger"><i class="fa 
                    fa-trash"></i></div>') ?></td>
            </tr>

            <?php endforeach; ?>
    </table>
</div>