<div class="container-fluid">

<div class="alert alert-success" role="alert">
    <i class ="fas fa-university"></i> Form Input Kelompok
</div>

<form method="post" action="<?php echo base_url('administrator/kelompok/tambah_kelompok_aksi')  ?>">
<div class="form-group">
    <label>Kode Kelompok</label>
    <input type="text" name="kode_kelompok" placeholder="Masukan Kode Kelompok" Class="form-control" >
    <?php echo form_error('kode_kelompok', '<div class="text-danger small" ml-3') ?>

</div>

<div class="form-group">
    <label>Nama Kelompok</label>
    <input type="text" name="nama_kelompok" placeholder="Masukan Nama Kelompok" Class="form-control" required>
    <?php echo form_error('nama_kelompok', '<div class="text-danger small" ml-3') ?>
</div>

<div class="form-group">
    <label>Nama Jurusan</label>
    <select name="nama_jurusan" class="form-control"required>
        <option value="">--Pilih Jurusan--</option>
            <?php foreach ($jurusan as $jrs) : ?>
            <option value="<?php echo $jrs->nama_jurusan ?>"><?php echo $jrs ->nama_jurusan;?></option>
            <?php endforeach; ?>
    </select>
</div>

<button type="submit" class="btn btn-primary">Simpan</button>
</form>
</div>