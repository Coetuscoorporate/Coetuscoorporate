<div class="container-fluid">

    <div class="alert alert-success" role="alert">
        <i class=" fas fa-clipboard-list"></i> Form Input Jadwal Mentoring
    </div>

    <form method="post" action="<?php echo base_url('administrator/jadwal_mentoring/tambah_jadwal_aksi') ?>">
    <?php echo $this->session->flashdata('pesan'); ?>

        <div class="form-group">
            <label>Nama Mentor</label>
            <select name="nama_mentor" class="form-control">
                <option value="">-- Pilih Nama Mentor --</option>
                    <?php foreach ($mentor as $mtr) : ?>
                        <option value="<?php echo $mtr->nama_mentor ?>"><?php echo $mtr ->nama_mentor;?></option>
                    <?php endforeach; ?>
            </select>
            
        </div>


        <div class="form-group">
            <label>Judul Materi</label>
            <select name="judul_materi" class="form-control">
                <option value="">-- Pilih Judul Materi --</option>
                <?php foreach ($materi as $mti) : ?>
                    <option value="<?php echo $mti->judul_materi ?>"><?php echo $mti ->judul_materi;?></option>
                <?php endforeach; ?>
            </select>
            
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
                <option value="">-- Pilih Nama Kelompok --</option>
                <?php foreach($kelompok as $klp) : ?>
                    <option value="<?php echo $klp->nama_kelompok ?>"><?php echo $klp->nama_kelompok ?></option>
                <?php endforeach; ?>
            </select>
        </div>



    <button type="submit" class="btn btn-primary">Simpan</button>
    </form>
</div>