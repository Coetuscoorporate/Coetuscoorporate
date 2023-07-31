<div class="container-fluid">

    <div class="alert alert-success" role="alert">
        <i class ="fas fa-university"></i> Form Update Mentor
    </div>


    <?php foreach($mentor as $mtr) : ?>
    <?php echo form_open_multipart('administrator/mentor/update_mentor_aksi') ?>
    <?php echo $this->session->flashdata('pesan'); ?>
    

    <div class="form-group">
        <label>Password</label>
        <input type="hidden" name="id" class="form-control" value="<?php echo $mtr->id ?>">
        <input type="text" name="password" class="form-control" value="<?php echo $mtr->password ?>">
        <?php echo form_error('password','<div class="text-danger small ml-3">','</div>') ?>
    </div>

    <div class="form-group">
        <label>Level</label>
        <input type="text" name="level" class="form-control" value="<?php echo $mtr->level ?>">
        <?php echo form_error('level','<div class="text-danger small ml-3">','</div>') ?>
    </div>

    <div class="form-group">
        <label>Nama Mentor</label>
        <input type="text" name="nama_mentor" class="form-control" value="<?php echo $mtr->nama_mentor ?>">
        <?php echo form_error('nama_lengkap','<div class="text-danger small ml-3">','</div>') ?>
    </div>

    <div class="form-group">
        <label>Alamat</label>
        <input type="text" name="alamat" class="form-control" value="<?php echo $mtr->alamat ?>">
        <?php echo form_error('alamat','<div class="text-danger small ml-3">','</div>') ?>
    </div>

    <div class="form-group">
        <label>Email</label>
        <input type="text" name="email" class="form-control" value="<?php echo $mtr->email ?>">
        <?php echo form_error('email','<div class="text-danger small ml-3">','</div>') ?>
    </div>
    
    <div class="form-group">
        <label>Telepon</label>
        <input type="text" name="telepon" class="form-control" value="<?php echo $mtr->telepon ?>">
        <?php echo form_error('telepon','<div class="text-danger small ml-3">','</div>') ?>
    </div>

    <div class="form-group">
        <label>Tempat Lahir</label>
        <input type="text" name="tempat_lahir" class="form-control" value="<?php echo $mtr->tempat_lahir ?>">
        <?php echo form_error('tempat_lahir','<div class="text-danger small ml-3">','</div>') ?>
    </div>

    <div class="form-group">
        <label>Tanggal Lahir</label>
        <input type="date" name="tanggal_lahir" class="form-control" value="<?php echo $mtr->tanggal_lahir ?>">
        <?php echo form_error('tanggal_lahir','<div class="text-danger small ml-3">','</div>') ?>
    </div>

    <div class="form-group">
        <label>Jenis Kelamin</label>
        <select name="jenis_kelamin" class="form-control" value="<?php echo $mtr->jenis_kelamin ?>">
            <option>Laki-Laki</option>
            <option>Perempuan</option>
        </select>
        <?php echo form_error('jenis_kelamin','<div class="text-danger small ml-3">','</div>') ?>
    </div>

    <div class="form-group">
        <label>Nama Kelompok</label>
        <select name="nama_kelompok" class="form-control" value="<?php echo $mtr->nama_kelompok ?>">
            <?php foreach($kelompok as $klp) : ?>
                <option value="<?php echo $klp->nama_kelompok ?>"><?php echo $klp->nama_kelompok ?></option>
            <?php endforeach; ?>
        </select>
        <?php echo form_error('nama_kelompok','<div class="text-danger small ml-3">','</div>') ?>
    </div>

    

    <div class="form-group">

        <?php foreach($detail as $dt) : ?>
            <img src="<?php echo base_url(). 'assets/uploads/'.$mtr->photo ?>">
            <?php endforeach; ?><br><br>
        <label>Foto</label><br>
        <input type="file" name="userfile" value="<?php echo $mtr->photo ?>">
    </div>

    <button type="submit" class="btn btn-primary mb-5 mt-3">Simpan</button>

    <?php form_close(); ?>

<?php endforeach; ?>
</div>