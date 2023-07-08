<div class="container-fluid">

    <div class="alert alert-success" role="alert">
        <i class ="fas fa-university"></i> Form Update Mentee
    </div>


    <?php foreach($mentee as $mte) : ?>
    <?php echo form_open_multipart('administrator/mentee/update_mentee_aksi') ?>

    <div class="form-group">
        <label>NIM Mentee</label>
        <input type="hidden" name="id" class="form-control" value="<?php echo $mte->id ?>">
        <input type="text" name="nim" class="form-control" value="<?php echo $mte->nim ?>">
        <?php echo form_error('nim','<div class="text-danger small ml-3">','</div>') ?>
    </div>

    <div class="form-group">
        <label>Nama Mahasiswa</label>
        <input type="text" name="nama_lengkap" class="form-control" value="<?php echo $mte->nama_lengkap ?>">
        <?php echo form_error('nama_lengkap','<div class="text-danger small ml-3">','</div>') ?>
    </div>

    <div class="form-group">
        <label>Alamat</label>
        <input type="text" name="alamat" class="form-control" value="<?php echo $mte->alamat ?>">
        <?php echo form_error('alamat','<div class="text-danger small ml-3">','</div>') ?>
    </div>

    <div class="form-group">
        <label>Email</label>
        <input type="text" name="email" class="form-control" value="<?php echo $mte->email ?>">
        <?php echo form_error('email','<div class="text-danger small ml-3">','</div>') ?>
    </div>
    
    <div class="form-group">
        <label>Telepon</label>
        <input type="text" name="telepon" class="form-control" value="<?php echo $mte->telepon ?>">
        <?php echo form_error('telepon','<div class="text-danger small ml-3">','</div>') ?>
    </div>

    <div class="form-group">
        <label>Tempat Lahir</label>
        <input type="text" name="tempat_lahir" class="form-control" value="<?php echo $mte->tempat_lahir ?>">
        <?php echo form_error('tempat_lahir','<div class="text-danger small ml-3">','</div>') ?>
    </div>

    <div class="form-group">
        <label>Tanggal Lahir</label>
        <input type="date" name="tanggal_lahir" class="form-control" value="<?php echo $mte->tanggal_lahir ?>">
        <?php echo form_error('tanggal_lahir','<div class="text-danger small ml-3">','</div>') ?>
    </div>

    <div class="form-group">
        <label>Jenis Kelamin</label>
        <select name="jenis_kelamin" class="form-control" value="<?php echo $mte->jenis_kelamin ?>">
            <option>Laki-Laki</option>
            <option>Perempuan</option>
        </select>
        <?php echo form_error('jenis_kelamin','<div class="text-danger small ml-3">','</div>') ?>
    </div>

    <div class="form-group">
        <label>Nama Kelompok</label>
        <select name="nama_kelompok" class="form-control" value="<?php echo $mte->nama_kelompok ?>">
            <?php foreach($kelompok as $klp) : ?>
                <option value="<?php echo $klp->nama_kelompok ?>"><?php echo $klp->nama_kelompok ?></option>
            <?php endforeach; ?>
        </select>
        <?php echo form_error('nama_kelompok','<div class="text-danger small ml-3">','</div>') ?>
    </div>

    <div class="form-group">

        <?php foreach($detail as $dt) : ?>
            <img src="<?php echo base_url(). 'assets/uploads/'.$mte->photo ?>">
            <?php endforeach; ?><br><br>
        <label>Foto</label><br>
        <input type="file" name="userfile" value="<?php echo $mte->photo ?>">
    </div>

    <button type="submit" class="btn btn-primary mb-5 mt-3">Simpan</button>

    <?php form_close(); ?>

<?php endforeach; ?>
</div>