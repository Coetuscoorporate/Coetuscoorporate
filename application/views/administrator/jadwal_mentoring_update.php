<div class="container-fluid">

    

    <div class="alert alert-success" role="alert">
        <i class=" fas fa-clipboard-list"></i>Update Jadwal Mentoring
    </div>

    <?php foreach($jadwal_mentoring as $jdl) : ?>

        <form method="post" action="<?php echo base_url('administrator/jadwal_mentoring/update_aksi') ;?>">
        <?php echo $this->session->flashdata('pesan'); ?>

            <div class="form-group">
                <label>Nama Mentor</label>
                <input type="text" name="nama_mentor" placeholder="Masukkan Nama Mentor" class="form-control">
                <?php echo form_error('nama_mentor','<div class="text-danger small ml-3">') ?>
            </div>

            <div class="form-group">
                <label>Judul Materi</label>
                <input type="text" name="judul_materi" placeholder="Masukkan Judul Materi" class="form-control">
                <?php echo form_error('judul_materi','<div class="text-danger small ml-3">') ?>
            </div>

            <div class="form-group">
                <label>Waktu</label>
                <input type="text" name="waktu" placeholder="Masukkan waktu" class="form-control">
                <?php echo form_error('waktu','<div class="text-danger small ml-3">') ?>
            </div>

            <div class="form-group">
                <label>Tempat</label>
                <input type="text" name="Tempat" placeholder="Masukkan Tempat Mentoring" class="form-control">
                <?php echo form_error('Tempat','<div class="text-danger small ml-3">') ?>
            </div>

                <div class="form-group">
                    <label>Nama Kelompok</label>
                    <select name="nama_kelompok" class="form-control">
                        <option value="<?php echo $jdl->nama_kelompok?>"><?php echo $jdl->nama_kelompok ?></option>
                            <?php foreach ($kelompok as $klp) : ?>
                                <option value="<?php echo $klp->nama_kelompok ?>"><?php echo $klp ->nama_kelompok;?></option>
                            <?php endforeach; ?>
                    </select>
                    
                </div>

        <button type="submit" class="btn btn-primary">Simpan</button>
        </form>
                
    <?php endforeach; ?>
</div>

