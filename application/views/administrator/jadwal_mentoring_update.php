<div class="container-fluid">

    

    <div class="alert alert-success" role="alert">
        <i class=" fas fa-clipboard-list"></i>Update Jadwal Mentoring
    </div>

    <?php foreach($jadwal_mentoring as $jdl) : ?>

        <form method="post" action="<?php echo base_url('administrator/jadwal_mentoring/update_aksi') ;?>">
        <?php echo $this->session->flashdata('pesan'); ?>

    

            <div class="form-group">
                <label>Nama Mentor</label>
                <input type="hidden" name="id_jadwal" value="<?php echo $jdl->id_jadwal ?>">
                <input type="text" name="nama_mentor" class="form-control" value="<?php echo $jdl->nama_mentor ?>">
            </div>

            <div class="form-group">
                <label>Judul Materi</label>
                <input type="text" name="judul_materi" class="form-control" value="<?php echo $jdl->judul_materi ?>">
            </div>

            <div class="form-group">
                <label>Waktu</label>
                <input type="text" name="waktu" class="form-control" value="<?php echo $jdl->waktu ?>">
            </div>

            <div class="form-group">
                <label>Tempat</label>
                <input type="text" name="Tempat" class="form-control" value="<?php echo $jdl->Tempat ?>">
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

