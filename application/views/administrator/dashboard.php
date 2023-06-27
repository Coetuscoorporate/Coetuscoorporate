<div class="container-fluid">
    <div class="alert alert-success" role="alert">
        <i class=" fas fa-tachometer-alt"></i> Dashboard
    </div>

    <div class="alert alert-success" role="alert">
        <h4 class="alert-heading">Selamat Datang!</h4>
        <p>Selamat Datang <strong><?php echo $username; ?></strong> di Sistem Informasi Ruang Hijrah, Anda 
        Login sebagai <strong><?php echo $level; ?></strong></p>
        <hr>
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
            <i class="fas fa-cogs"></i> Super Admin
        </button>
    </div>

    <!-- Button trigger modal -->

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog"
    aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel"><i class="fas fa-cogs"></i>Super Admin</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="
                    Close">
                        <span aria-hodden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-3 text-info text-center">
                            <a href="<?php echo base_url() ?>"><p class="nav-link small text-info">MENTEE</p></a>
                            <i class="fas fa-3x fa-user-graduate"></i>
                        </div>

                        <div class="col-md-3 text-info text-center">
                            <a href="<?php echo base_url() ?>"><p class="nav-link small text-info">TAHUN PERIODE</p></a>
                            <i class="fas fa-3x fa-calendar-alt"></i>
                        </div>

                        <div class="col-md-3 text-info text-center">
                            <a href="<?php echo base_url() ?>"><p class="nav-link small text-info">INPUT NILAI</p></a>
                            <i class="fas fa-3x fa-sort-numeric-down"></i>
                        </div>

                        <div class="col-md-3 text-info text-center">
                            <a href="<?php echo base_url() ?>"><p class="nav-link small text-info">TRANSKIP NILAI</p></a>
                            <i class="fas fa-3x fa-print"></i>
                        </div>
                    </div><hr>
                    <div class="row">
                        <div class="col-md-3 text-info text-center">
                            <a href="<?php echo base_url() ?>"><p class="nav-link small text-info">DOSEN</p></a>
                            <i class="fas fa-3x fa-user"></i>
                        </div>

                        <div class="col-md-3 text-info text-center">
                            <a href="<?php echo base_url() ?>"><p class="nav-link small text-info">MATERI</p></a>
                            <i class="fas fa-3x fa-book"></i>
                        </div>

                        <div class="col-md-3 text-info text-center">
                            <a href="<?php echo base_url() ?>"><p class="nav-link small text-info">TUGAS</p></a>
                            <i class="fas fa-3x fa-tasks"></i>
                        </div>

                        <div class="col-md-3 text-info text-center">
                            <a href="<?php echo base_url() ?>"><p class="nav-link small text-info">PELATIHAN</p></a>
                            <i class="fas fa-3x fa-chalkboard-teacher"></i>
                        </div>
                    </div><hr>
                    <div class="row">
                        <div class="col-md-3 text-info text-center">
                            <a href="<?php echo base_url() ?>"><p class="nav-link small text-info">INFORMASI KARISMA</p></a>
                            <i class="fas fa-3x fa-info-circle"></i>
                        </div>

                        <div class="col-md-3 text-info text-center">
                            <a href="<?php echo base_url() ?>"><p class="nav-link small text-info">TENTANG KARISMA</p></a>
                            <i class="fas fa-3x fa-question-circle"></i>
                        </div>

                        <div class="col-md-3 text-info text-center">
                            <a href="<?php echo base_url() ?>"><p class="nav-link small text-info">FASILITAS</p></a>
                            <i class="fas fa-3x fa-building"></i>
                        </div>

                        <div class="col-md-3 text-info text-center">
                            <a href="<?php echo base_url() ?>"><p class="nav-link small text-info">KONTAK</p></a>
                            <i class="fas fa-3x fa-envelope"></i>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
</div>