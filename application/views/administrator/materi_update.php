<div class="container-fluid">

    <div class="alert alert-success" role="alert">
        <i class=" fas fa-clipboard-list"></i> Form Update Materi
    </div>

    <?php foreach($materi as $mtr) : ?>

        <form method="post" action="<?php echo base_url('administrator/materi/update_aksi') ?>">
        <?php echo $this->session->flashdata('pesan'); ?>
            <div class="form-group">
                
                <label>TM</label>
                <input type="text" name="TM" class="form-control" value="<?php echo $mtr->TM ?>">
            </div>

            <div class="form-group">
                <label>Judul Materi</label>
                <input type="text" name="judul_materi" class="form-control" value="<?php echo $mtr->judul_materi ?>">
            </div>

            <div class="form-group">
                <label>Pencapaian</label>
                <textarea class="form-control" name="capaian" id="summernotehal" style="height:120px"><?= $mtr->capaian ?></textarea>
            </div>

            

            <div class="form-group">
                <label>Waktu</label>
                <select name="waktu" class="form-control">
                    <option value="<?php echo $mtr->waktu?>"><?php echo $mtr->waktu ?></option>
                        <?php foreach ($materi as $mtr) : ?>
                            <option>Pekan ke 4 Januari</option>
                            <option>Pekan ke 4 Februari</option>
                            <option>Pekan ke 4 Maret</option>
                            <option>Pekan ke 4 April</option>
                            <option>Pekan ke 4 Mei</option>
                            <option>Pekan ke 4 Juni</option>
                            <option>Pekan ke 4 Juli</option>
                            <option>Pekan ke 4 Agustus</option>
                            <option>Pekan ke 4 September</option>
                            <option>Pekan ke 4 Oktober</option>
                            <option>Pekan ke 4 November</option>
                            <option>Pekan ke 4 Desember</option>
                        <?php endforeach; ?>
                </select>
                
            </div>

            <div class="form-group">
                <label>Bulan</label>
                <select name="bulan" class="form-control">
                    <option value="<?php echo $mtr->bulan?>"><?php echo $mtr->bulan ?></option>
                        <?php foreach ($materi as $mtr) : ?>
                            <option>Januari</option>
                            <option>Februari</option>
                            <option>Maret</option>
                            <option>April</option>
                            <option>Mei</option>
                            <option>Juni</option>
                            <option>Juli</option>
                            <option>Agustus</option>
                            <option>September</option>
                            <option>Oktober</option>
                            <option>November</option>
                            <option>Desember</option>
                        <?php endforeach; ?>
                </select>
                
            </div>

            <div class="form-group">
                <label>Minggu</label>
                <select name="minggu" class="form-control">
                    <option value="<?php echo $mtr->minggu?>"><?php echo $mtr->minggu ?></option>
                        <?php foreach ($materi as $mtr) : ?>
                            <option>1</option>
                            <option>2</option>
                            <option>3</option>
                            <option>4</option>
                        <?php endforeach; ?>
                </select>
                
            </div>

            <button type="submit" class="btn btn-primary">Simpan</button>
        </form>
            
    <?php endforeach; ?>
</div>