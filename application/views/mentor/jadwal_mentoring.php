<div class="container-fluid">
    
    <div class="alert alert-success" role="alert">
        <i class=" fas fa-clipboard-list"></i> jadwal Mentoring
    </div>
    <?php echo $this->session->flashdata('pesan') ?>

    <?php echo anchor('mentor/jadwal_mentoring/tambah_jadwal_mentoring','<button
        class="btn btn-sm btn-primary mb-3"><i class="fas fa-plus fa-sm"></i> TAMBAH JADWAL</button>') ?>


    
</div>