<!-- <h1 class="mt-4">Dashboard</h1> -->
<div class="row mt-4">
    <div class="col-xl-3 col-md-6">
        <div class="card bg-white mb-4 shadow-sm" style="border-radius: 10px;">
            <div class="card-body">
                <h7 class="" style="color: rgb(124, 124, 124);">Siswa Yang Diterima</h7>
                <h1 class="" style="color: #01AEF0;">
                    <b><?php
                        $query = $this->db->query('SELECT * FROM tb_datadiri WHERE status="diterima"');
                        echo $query->num_rows();
                        ?>
                    </b>
                </h1>
            </div>
            <div class="card-footer d-flex align-items-center justify-content-between">
                <a class="small stretched-link" style="color: #01AEF0;" href="<?php echo base_url('admin/seleksi_nilai') ?>">Lihat detailnya</a>
                <div class="small text-white"><i class="fas fa-angle-right"></i></div>
            </div>
        </div>
    </div>
    <div class="col-xl-3 col-md-6">
        <div class="card bg-white mb-4 shadow-sm" style="border-radius: 10px;">
            <div class="card-body">
                <h7 class="" style="color: rgb(124, 124, 124);">Pserta Yang Ditolak</h7>
                <h1 class="" style="color: #01AEF0;">
                    <b>
                        <?php
                        $query = $this->db->query('SELECT * FROM tb_datadiri WHERE status="ditolak"');
                        echo $query->num_rows();
                        ?>
                    </b>
                </h1>
            </div>
            <div class="card-footer d-flex align-items-center justify-content-between">
                <a class="small stretched-link" style="color: #01AEF0;" href="#">Lihat detailnya</a>
                <div class="small text-white"><i class="fas fa-angle-right"></i></div>
            </div>
        </div>
    </div>
    <div class="col-xl-3 col-md-6">
        <div class="card bg-white mb-4 shadow-sm" style="border-radius: 10px;">
            <div class="card-body">
                <h7 class="" style="color: rgb(124, 124, 124);">Peserta Yang Belum Diproses</h7>
                <h1 class="" style="color: #01AEF0;">
                    <b>
                        <?php
                        $query = $this->db->query('SELECT * FROM tb_datadiri WHERE status="-"');
                        echo $query->num_rows();
                        ?>
                    </b>
                </h1>
            </div>
            <div class="card-footer d-flex align-items-center justify-content-between">
                <a class="small stretched-link" style="color: #01AEF0;" href="<?php echo base_url('admin/data_siswa') ?>">Lihat detailnya</a>
                <div class="small text-white"><i class="fas fa-angle-right"></i></div>
            </div>
        </div>
    </div>
    <div class="col-xl-3 col-md-6">
        <div class="card bg-white mb-4 shadow-sm" style="border-radius: 10px;">
            <div class="card-body">
                <h7 class="" style="color: rgb(124, 124, 124);">Peserta Yang Mendaftar</h7>
                <h1 class="" style="color: #01AEF0;">
                    <b><?php
                        $query = $this->db->query('SELECT * FROM tb_datadiri');
                        echo $query->num_rows();
                        ?></b>
                </h1>
            </div>
            <div class="card-footer d-flex align-items-center justify-content-between">
                <a class="small stretched-link" style="color: #01AEF0;" href="#">Lihat detailnya</a>
                <div class="small text-white"><i class="fas fa-angle-right"></i></div>
            </div>
        </div>
    </div>

</div>


