<div class="container-fluid">

    

    <div class="alert alert-success" role="alert">
        <i class=" fas fa-clipboard-list"></i>Update Kelompok
    </div>

    <?php foreach($kelompok as $klp) : ?>

        <form method="post" action="<?php echo base_url('administrator/kelompok/update_aksi') ;?>">
        <?php echo $this->session->flashdata('pesan'); ?>

        
            <div class="form-group">
                <label>Kode Kelompok</label>
                
                <input type="hidden" name="id_kelompok" value="<?php echo $klp->id_kelompok ?>">

                <input type="text" name="kode_kelompok" class="form-control" value="<?php echo $klp->kode_kelompok ?>">
            </div>

            <div class="form-group">
                <label>Nama kelompok</label>
                <input type="text" name="nama_kelompok" class="form-control" value="<?php echo $klp->nama_kelompok ?>">
            </div>

            <div class="form-group">
                <label>Nama Jurusan</label>
                    <select name="nama_jurusan" class="form-control">
                        <option value="<?php echo $klp->nama_jurusan?>"><?php echo $klp->nama_jurusan ?></option>
                            <?php foreach ($jurusan as $jrs) : ?>
                                <option value="<?php echo $jrs->nama_jurusan ?>"><?php echo $jrs ->nama_jurusan;?></option>
                            <?php endforeach; ?>
                </select>
                
            </div>

            <button type="submit" class="btn btn-primary">Simpan</button>
        </form>
                
    <?php endforeach; ?>
</div>

