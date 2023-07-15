<div class="container-fluid">

    <div class="alert alert-success" role="alert">
        <i class ="fas fa-university"></i> Form Input Materi

    </div>
    <form method="post" action="<?php echo base_url('administrator/materi/tambah_materi_aksi')  ?>">
    <?php echo $this->session->flashdata('pesan'); ?>
        <div class="form-group">
            <label>TM</label>
            <input type="text" name="TM" placeholder="Masukan TM ke Berapa" class="form-control">
            <?php echo form_error('TM', '<div class="text-danger small ml-3">') ?>

        </div>
        <div class="form-group">
            <label>Nama Materi</label>
            <input type="text" name="materi" placeholder="Masukan nama materi" class="form-control">
            <?php echo form_error('materi','<div class="text-danger small ml-3">') ?>
        </div>

        <div class="form-group">
            <label>Pencapaian</label>
            <textarea class="form-control" name="capaian" id="summernotehal" style="height:120px"></textarea>
            <?php echo form_error('capaian','<div class="text-danger small ml-3">') ?>
        </div>

    

        <div class="form-group">
            <label>Waktu</label>
            <select name="waktu" class="form-control" required="required">
                <option value="">--Pilih Pekan Berapa--</option>
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
            </select>
            <?php echo form_error('waktu','<div class="text-danger small ml-3">') ?>
        </div>

        <div class="form-group">
            <label>Bulan</label>
            <select name="bulan" class="form-control" required="required">
            <option value="">--Pilih Bulan--</option>
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
            </select>
            <?php echo form_error('bulan','<div class="text-danger small ml-3">') ?>
        </div>

        <div class="form-group">
            <label>Minggu</label>
            <select name="minggu" class="form-control" required="required">
                <option value="">--Pilih Minggu Ke--</option>
                <option>1</option>
                <option>2</option>
                <option>3</option>
                <option>4</option>
            </select>
            <?php echo form_error('minggu','<div class="text-danger small ml-3">') ?>
        </div>



    <button type="submit" class="btn btn-primary">Simpan</button>
    </form>
</div>

